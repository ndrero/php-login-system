<?php

session_start();
require_once __DIR__ . '/../src/salvar_nova_senha.php';
require_once __DIR__ . '/../src/verificar_nova_senha.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['password']) && isset($_POST['confirmPassword'])) {
    
    $senha = $_POST['password'];
    $senhaConfirmada = $_POST['confirmPassword'];

    $forca = verificarForcaDaSenha($senha);
    if($forca < 4) {
        $_SESSION['warning'] = 'A senha não é forte o suficiente.';
        header("Location: atualizar_senha.php?token={$_SESSION['token']}");
        exit;
    }

    if(!verificarConfirmacaoSenha($senha,$senhaConfirmada)){
        $_SESSION['warning'] = 'A confirmação da senha não confere.';
        header("Location: atualizar_senha.php?token={$_SESSION['token']}");
        exit;
    }
    salvarSenha($senha, $pdo);
    unset($_SESSION['token']);
    $_SESSION['success'] = 'Senha atualizada com sucesso!';
    header('Location: login.php');
    exit;

} else {
    $_SESSION['warning'] = 'Requisição inválida';
    header('Location: login.php');
    exit;
}
