<?php
    require __DIR__ . '/database/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs Page</title>
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
    <!-- Blogs -->
    <div id="blogs">
        <?php foreach($blogs as $blog) : ?>
            <div class="blog">
                <h2><?=$blog['title']?></h2>
                <p><?=$blog['content']?></p>
                <p><?=$blog['created_at']?></p>
                <a href="blog.php?id=<?=$blog['id']?>">read more</a>
            </div>
        <?php endforeach; ?>
    </div>
    <footer>
        <p>copyright &copy; <?php echo date('Y') ?></p>
    </footer>
</body>

</html>