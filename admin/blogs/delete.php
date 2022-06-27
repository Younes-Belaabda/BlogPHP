<?php
    require dirname(dirname(__DIR__)) . '/database/db.php';
    if(isset($_GET['id']))
        $blog = getBlog($_GET['id']);
    /**
     * Delete Blog
     */
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(!deleteBlog($_POST['id'])){
            $status = 'Blog Not Deleted Something Wrong';
        }else{
            header('Location: ' . './../blogs.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin / Delete Blog Page</title>
</head>
<body>
    <header>
        <ul>
            <li>
                <a href="./../index.php">Homepage</a>
            </li>
            <li>
                <a href="./../blogs.php">Blogs</a>
            </li>
        </ul>
    </header>
    <?php if(isset($status)) : ?>
        <p><?=$status?></p>
    <?php endif; ?>
    <form action="<?=$_SERVER['PHP_SELF'] . '?id=' . $blog['id']?>" method="post">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <h2><?=$blog['title']?></h2>
        <p><?=$blog['content']?></p>
        <button>Confirm Delete</button>
    </form>
    <footer>
        <p>copyright &copy; <?php echo date('Y')?></p>
    </footer>
</body>
</html>