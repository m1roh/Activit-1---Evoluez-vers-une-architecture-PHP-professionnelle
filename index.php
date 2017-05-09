<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="mybooks.css" />
        <title>Activité 1 - Home</title>
    </head>
    <body>
        <header>
            <h1>My books</h1>
        </header>
        <?php
        $bdd = new PDO('mysql:host=localhost;dbname=mybooks;charset=utf8', 'mybooks_user', 'secret');
        $books = $bdd->query('select * from book order by book_id desc');
        foreach ($books as $book): ?>
        <article>
            <h2><?php echo $book['book_title'] ?></h2>
            <p><?php echo $book['book_summary'] ?></p>
        </article>
        <?php endforeach ?>
        <footer class="footer">
            <p><strong>MyBooks</strong> est construit avec PHP, Silex, Twig et Bootstrap</p>
        </footer>
    </body>
</html>
