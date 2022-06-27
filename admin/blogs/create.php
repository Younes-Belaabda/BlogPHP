<?php
    require dirname(dirname(__DIR__)) . '/database/db.php';
    /**
     * Create Blog
     */
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $title   = $_POST['title'];
        $content = $_POST['content'];
        $blog    = [
            'title' => $title,
            'content' => $content,
        ];
        if(!createBlog($blog)){
            $status = 'Blog Not Created Something Wrong';
        }else{
            $status = 'Blog Was Created';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin / Create Blog Page</title>
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
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="title">title(*)</label>
        <input type="text" name="title" placeholder="blog title" required>
        <label for="content">content(*)</label>
        <textarea name="content" id="content" cols="30" rows="10">

        </textarea>
        <button>submit</button>
    </form>
    <footer>
        <p>copyright &copy; <?php echo date('Y')?></p>
    </footer>
</body>
</html>