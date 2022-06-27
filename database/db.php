<?php

    $config = [
        'db_host' => 'localhost',
        'db_name' => 'blog_db',
        'db_user' => 'root',
        'db_pass' => '',
    ];

    $pdo = new PDO("mysql:hostname={$config['db_host']};dbname={$config['db_name']}", $config['db_user'], $config['db_pass']);

    # Blogs
    $blogs = $pdo->query("SELECT * FROM Blogs", PDO::FETCH_ASSOC)->fetchAll();
    function getBlog($id){
        global $pdo;
        return $pdo->query("SELECT * FROM Blogs WHERE id = $id", PDO::FETCH_ASSOC)->fetch();
    }
    function createBlog($blog){
        global $pdo;
        $stmt = "INSERT INTO Blogs(title,content,created_at) VALUES('{$blog['title']}','{$blog['content']}','" . date('Y-m-d H:i:s') ."')";
        return $pdo->exec($stmt);
    }
    function updateBlog($blog){
        global $pdo;
        $stmt = "UPDATE Blogs SET title = '{$blog['title']}', content = '{$blog['content']}'";
        return $pdo->exec($stmt);
    }
    function deleteBlog($id){
        global $pdo;
        $stmt = "DELETE FROM Blogs WHERE id = $id";
        return $pdo->exec($stmt);
    }