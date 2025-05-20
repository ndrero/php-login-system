<?php

session_start();
require_once __DIR__ . '/../src/logica_login.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'], $_POST['password'])) {
    login();
} else {
    $_SESSION['warning'] = 'Requisição inválida';
    header('Location: login.php');
    exit;
}
