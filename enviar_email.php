<?php

session_start();
include_once 'db.php';
include_once 'gerar_token.php';
include_once 'config_email.php';

$email = $_POST['email'];

$stmt = $pdo->prepare('SELECT id, name FROM users WHERE email = :email LIMIT 1');
$stmt->bindParam(':email', $email);
$stmt->execute();
$user = $stmt->fetch();

if(!$user){
    $_SESSION['warning'] = 'E-mail não cadastrado';
    header('Location: esqueci_senha.php');
    exit();
}

$token = criar_token($user['id']);

try {
    $mail->setFrom($_ENV['MAIL_USERNAME'], 'Meu aplicativo');
    $mail->addAddress($email, $user['name']);
    $mail->isHTML(true);
    $mail->Subject = 'Recuperação de senha';
    $mail->Body = "Recupere sua senha através do link: http://localhost:8080/atualizar_senha.php?token={$token}";

    $mail->send();
    echo 'E-mail enviado com sucesso!';
} catch (Exception $e) {
    echo 'Erro ao enviar email: ' . $mail->ErrorInfo;
}

