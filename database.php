<?php
$dsn = 'mysql:host=localhost;dbname=cs602';
$username = 'cs602_user';
$password = 'cs602_secret';

try {
    $db = new PDO($dsn, $username, $password);
    var_dump($db);
} catch (PDOException $e) {
    var_dump($e);
    $error_message = $e->getMessage();

    include('error.php');
    exit();
}


?>