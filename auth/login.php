<?php
    require dirname(__DIR__) . '/database/db.php';
    require dirname(__DIR__) . '/config/google_credentials.php';
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $user = [
            'login' => $_POST['login'],
            'password' => $_POST['password']
        ];
        $auth_user = userLogin($user);
        if(!$auth_user){
            $status = "username/email or password is incorrect !";
        }else{
            $status = "Login Successfull";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
    <label for="login">email / username</label>
    <input type="text" name="login" placeholder="email or username">
    <label for="password">password</label>
    <input type="password" name="password" placeholder="password">
    <button>submit</button>
    </form>
    <ul>
        <li><a href="https://accounts.google.com/o/oauth2/v2/auth?scope=email&access_type=online&response_type=code&redirect_uri=<?= urlencode('http://localhost:8080/google_redirect.php') ?>&client_id=<?= GOOGLE_ID ?>">Login with google</a></li>
        <li>
            <a href="https://developers.google.com/identity/sign-in/web/sign-in">Google Docs</a>
        </li>
        <li><a href="https://developers.facebook.com/docs/facebook-login/">Login with facebook</a></li>
        <li><a href="https://developer.twitter.com/en/docs/authentication/guides/log-in-with-twitter">Login with twitter</a></li>
        <li><a href="https://docs.github.com/en/developers/apps/building-oauth-apps/authorizing-oauth-apps">Login with github</a></li>
    </ul>
    <footer>
        <p>copyright &copy; <?php echo date('Y')?></p>
    </footer>
</body>
</html>