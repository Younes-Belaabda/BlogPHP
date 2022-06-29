<?php
    require __DIR__ . '/config/google_credentials.php'; 
    $code = $_GET['code'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="https://oauth2.googleapis.com/token" method="POST">
        <input type="text" name="code" value="<?= $code ?>">
        <input type="text" name="client_id" value="<?= GOOGLE_ID ?>">
        <input type="text" name="client_secret" value="<?= GOOGLE_SECRET ?>">
        <input type="text" name="redirect_uri" value="http://localhost:8080/google_redirect.php">
        <input type="text" name="grant_type" value="authorization_code">
        <button>Get Access Token</button>
    </form>
</body>
</html>