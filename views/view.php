<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="mybooks.css" />
        <title>MyBooks - Home</title>
    </head>
    <body>
        <header>
            <h1>My books</h1>
        </header>
        <?php foreach ($books as $book): ?>
        <article>
            <h2><?php echo $book->getTitle() ?></h2>
            <p><?php echo $book->getSummary() ?></p>
        </article>
        <?php endforeach ?>
        <footer class="footer">
            <p><strong>MyBooks</strong> est construit avec PHP, Silex, Twig et Bootstrap</p>
        </footer>
    </body>
</html>
