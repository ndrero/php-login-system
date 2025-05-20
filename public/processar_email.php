<?php

session_start();
require_once __DIR__ . '/../src/logica_email.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    enviarEmail($pdo, $mail);
} else {
    $_SESSION['warning'] = 'Requisição inválida';
    header('Location: login.php');
    exit;
}
