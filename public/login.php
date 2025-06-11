<?php
session_start();
if(isset($_SESSION['warning'])){
    echo '<div class="alert alert-danger" role="alert">'.$_SESSION['warning'].'</div>';
    unset($_SESSION['warning']);
}
if(isset($_SESSION['success'])){
    echo '<div class="alert alert-success" role="alert">'.$_SESSION['success'].'</div>';
    unset($_SESSION['success']);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Minha Conta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">    <link rel="stylesheet" href="assets/css/styles/index.css">
    <link rel="stylesheet" href="assets/css/styles/login.css">

</head>
<body>
    <div class="container">
        <div class="logo">
            <h1>Minha Conta</h1>
        </div>
        <form method="post" action="/processar_login.php">
            <div class="form-group">
                <label for="username">Nome de usuário</label>
                <input type="text" id="username" name="username" placeholder="Digite seu nome de usuário" required autocomplete="username">
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <div class="password-container">
                    <input type="password" id="password" name="password" placeholder="Digite sua senha" required autocomplete="current-password">
                </div>
            </div>
            <div class="checkbox-group">
                <input type="checkbox" id="remember">
                <label for="remember">Permanecer conectado</label>
            </div>
            <div class="forgot-password">
                <a href="esqueci_senha.php">Esqueceu sua senha?</a>
            </div>
            <button type="submit" class="btn-login">Entrar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>