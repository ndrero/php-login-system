<?php

function criar_token($id){
    global $pdo;

    try {
        $token = bin2hex(random_bytes(16));

        $expires_at = date('Y-m-d H:i:s', strtotime('+1 hour'));

        $stmt = $pdo->prepare('INSERT INTO tokens (user_id, token, expires_at) VALUES (?, ?, ?)');
        $stmt->execute([$id, $token, $expires_at]);

        return $token;
    } catch (PDOException $e) {
        $_SESSION['warning'] = 'Não foi possível criar o token para recuperação de senha';
        header('Location: esqueci_senha.php');
        exit();
    }
}