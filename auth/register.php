<?php 
    require dirname(__DIR__) . '/database/db.php';
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $user = [
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ];
        if(!createUser($user)){
            $status = 'Something Wrong !';
        }else{
            $status = "Register Successfull !";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
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
    <?php if(isset($status)) :?>
        <p><?=$status?></p>
    <?php endif;?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <label for="username">username(*)</label>
    <input type="text" name="username" placeholder="username">
    <label for="email">email(*)</label>
    <input type="email" name="email" placeholder="email">
    <label for="password">password(*)</label>
    <input type="password" name="password" placeholder="password">
    <button>submit</button>
    </form>
    <footer>
        <p>copyright &copy; <?php echo date('Y')?></p>
    </footer>
</body>
</html>