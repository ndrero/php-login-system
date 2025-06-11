<?php
session_start();

if(isset($_SESSION['warning'])){
    echo '<div class="alert alert-danger" role="alert">';
    echo $_SESSION['warning'];
    echo '</div>';
    unset($_SESSION['warning']);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha | Minha Conta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles/esqueci_senha.css">

</head>
<body>
    <div class="container">
        <div class="logo">
            <h1>Minha Conta</h1>
        </div>
        <div class="header">
            <h2>Recuperação de Senha</h2>
            <p>Informe seu e-mail cadastrado abaixo para receber as instruções de recuperação de senha</p>
        </div>
        <form method="post" action="processar_email.php">
            <div class="info-box">
                <p>Enviaremos um link de recuperação para o seu e-mail. Verifique também sua pasta de spam.</p>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required autocomplete="email">
            </div>
            <button type="submit" class="btn-submit">Enviar instruções</button>
            <div class="back-link">
                <a href="login.php">Voltar para o login</a>
            </div>
        </form>
    </div>
</body>
</html>