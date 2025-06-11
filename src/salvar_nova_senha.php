<?php 

require_once __DIR__ . '/../config/db.php';

function salvarSenha($senha, $pdo) {
    try {
        $stmt = $pdo->prepare('SELECT user_id FROM tokens WHERE token = :token ');
        $stmt->execute([':token' => $_SESSION['token']]);
        $id = $stmt->fetch();

        $novaSenha = password_hash($senha, PASSWORD_BCRYPT);
        
        $stmt = $pdo->prepare('UPDATE users SET password = :password WHERE id = :id ');
        $stmt->execute([':id' => $id['user_id'], ':password' => $novaSenha]);

        $stmt = $pdo->prepare('DELETE FROM tokens WHERE token = :token');
        $stmt->execute([':token' => $_SESSION['token']]);

    } catch (PDOException $e) {
        $_SESSION['warning'] = 'Não foi possível atualizar a senha';
        header('Location: esqueci_senha.php');
        exit();
    }
}