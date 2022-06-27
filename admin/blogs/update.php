<?php
    require dirname(dirname(__DIR__)) . '/database/db.php';
    if(isset($_GET['id']))
        $blog = getBlog($_GET['id']);
    else
        die('Page Not Found');
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $blog = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
        ];
        if(!updateBlog($blog)){
            $status = 'Blog Not Updated Something Wrong';
        }else{
            $status = 'Blog Was Updated';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin / Update Blog Page</title>
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

    <form action="<?=$_SERVER['PHP_SELF'] . '?id=' . $_GET['id']?>" method="post">
        <label for="title">title(*)</label>
        <input type="text" name="title" placeholder="blog title" value="<?=$blog['title']?>" required>
        <label for="content">content(*)</label>
        <textarea name="content" id="content" cols="30" rows="10">
        <?=$blog['content']?>
        </textarea>
        <button>submit</button>
    </form>
    <footer>
        <p>copyright &copy; <?php echo date('Y')?></p>
    </footer>
</body>
</html>