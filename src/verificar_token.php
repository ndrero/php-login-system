<?php

require_once __DIR__ . '/../config/db.php';

$tokenFromURL = $_GET['token'];

$stmt = $pdo->prepare('SELECT id, expires_at FROM tokens WHERE token = :token');
$stmt->execute([':token' => $tokenFromURL]);
$token = $stmt->fetch();

if(!$token) {
    $_SESSION['warning'] = 'Token inválido';
    header('Location: esqueci_senha.php');
    exit();
}

if(strtotime($token['expires_at']) < time()) {
    $_SESSION['warning'] = 'Token expirado';
    header('Location: esqueci_senha.php');
    exit();
}