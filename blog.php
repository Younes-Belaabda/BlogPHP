<?php
require __DIR__ . '/database/db.php';
if (isset($_GET['id']))
    $blog = getBlog($_GET['id']);
else
    die('Page Not Found');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Blog Page</title>
</head>

<body>
    <header>
        <ul>
            <li>
                <a href="index.php">Homepage</a>
            </li>
            <li>
                <a href="blogs.php">Blogs</a>
            </li>
        </ul>
    </header>
    <div id="single-blog">
        <h2><?= $blog['title'] ?></h2>
        <p><?= $blog['content'] ?></p>
        <p><?= $blog['created_at'] ?></p>
    </div>
    <footer>
        <p>copyright &copy; <?php echo date('Y') ?></p>
    </footer>
</body>

</html>