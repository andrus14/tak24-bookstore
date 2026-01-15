<?php

$host = '';
$db   = '';
$user = '';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $options);

$stmt = $pdo->query('SELECT id, title FROM books;');

echo "<ul>";
while ( $book = $stmt->fetch() )
{
    echo "<li><a href='book.php?id=" . $book['id'] . "'>" . $book['title'] . "</a></li>";
}
echo "</ul>";