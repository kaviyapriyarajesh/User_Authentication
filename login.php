<?php

require 'config.php';
require 'vendor/autoload.php';

use Firebase\JWT\JWT;

if (!isset($_POST['username']) || !isset($_POST['password'])) {
    http_response_code(400);
    echo json_encode(['message' => 'Invalid input']);
    exit;
}

$username = $_POST['username'];
$password = $_POST['password'];

try {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user || !password_verify($password, $user['password'])) {
        http_response_code(401);
        echo json_encode(['message' => 'Invalid credentials']);
        exit;
    }

    
    $token = [
        "iss" => "kaviya", 
        "aud" => "kaviya", 
        "iat" => time(),
        "exp" => time() + 3600, 
        "data" => [
            "id" => $user['id'],
            "username" => $user['username']
        ]
    ];

    $jwt = JWT::encode($token, $secret_key, $algorithm);

    echo json_encode(['token' => $jwt]);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['message' => 'Login failed']);
}
?>
