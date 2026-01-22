<?php

require_once('./connection.php');

$id = $_GET['id'];

// SELECT * FROM books WHERE id = 9

$stmt = $pdo->prepare('SELECT * FROM books WHERE id = :id');
$stmt->execute(['id' => $id]);
$book = $stmt->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $book['title']; ?></title>
</head>
<body>
    <h2><?= $book['title']; ?></h2>
</body>
</html>


