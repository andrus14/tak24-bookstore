<?php

require_once('./connection.php');

$stmt = $pdo->query('SELECT * FROM authors;');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name="" id="">

<?php while ( $author = $stmt->fetch() ) {
    if ( $author['id'] ) { // in_array funktsioon
?>

        <option value=""><?= $author['first_name']; ?></option>

<?php }
} ?>

    </select>
</body>
</html>