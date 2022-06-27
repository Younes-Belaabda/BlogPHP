<?php
    require dirname(__DIR__) . '/database/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin / Blogs Page</title>
</head>
<body>
    <header>
        <ul>
            <li>
                <a href="./index.php">Homepage</a>
            </li>
            <li>
                <a href="./blogs.php">Blogs</a>
            </li>
        </ul>
    </header>
    <a href="./blogs/create.php">Create</a>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>content</th>
                <th>created_at</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($blogs as $blog) : ?>
                <tr>
                    <td><?=$blog['id']?></td>
                    <td><?=$blog['title']?></td>
                    <td><?=$blog['content']?></td>
                    <td><?=$blog['created_at']?></td>
                    <td>
                        <a href="./blogs/update.php?id=<?=$blog['id']?>">Update</a>
                        <a href="./blogs/delete.php?id=<?=$blog['id']?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <footer>
        <p>copyright &copy; <?php echo date('Y')?></p>
    </footer>
</body>
</html>