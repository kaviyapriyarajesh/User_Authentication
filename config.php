<?php


$host = 'localhost';
$db = 'user_auth';
$user = 'root'; 
$pass = ''; 

$secret_key = '6n9fA3uQpR9P9xP6'; 
$algorithm = 'HS256'; 
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
