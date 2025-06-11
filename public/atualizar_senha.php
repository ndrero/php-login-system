<?php 

session_start();
require_once __DIR__ . '/../src/verificar_token.php';
$_SESSION['token'] = $_GET['token'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset de Senha | Minha Conta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">    <link rel="stylesheet" href="assets/css/styles/index.css">
    <link rel="stylesheet" href="assets/css/styles/atualizar_senha.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <h1>Minha Conta</h1>
        </div>
        <div class="header">
            <h2>Criar Nova Senha</h2>
            <p>Insira e confirme sua nova senha para continuar</p>
        </div>
        <form id="resetForm" action="processa_nova_senha.php" method="POST">
            <div class="info-box">
                <p>Sua nova senha deve ter pelo menos 8 caracteres, incluindo letras, números e símbolos para maior segurança.</p>
            </div>
            <div class="feedback success" id="successMessage">
                Senha alterada com sucesso! Você será redirecionado para a página de login.
            </div>
            <div class="feedback error" id="errorMessage">
                As senhas não coincidem. Por favor, tente novamente.
            </div>
            <div class="form-group">
                <label for="password">Nova Senha</label>
                <div class="password-container">
                    <input type="password" id="password" name="password" placeholder="Digite sua nova senha" required>
                    <button type="button" class="password-toggle" id="togglePassword">Mostrar</button>
                </div>
                <div class="password-strength">
                    <span>Força da senha: <span id="strengthText">Fraca</span></span>
                    <div class="meter">
                        <div id="strengthMeter" class="weak"></div>
                    </div>
                    <div class="password-tips">
                        Use pelo menos 8 caracteres, letras maiúsculas, minúsculas, números e símbolos
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirmar Senha</label>
                <div class="password-container">
                    <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirme sua nova senha" required>
                    <button type="button" class="password-toggle" name="confirmPassword" id="toggleConfirmPassword">Mostrar</button>
                </div>
            </div>
            <button type="submit" class="btn-submit">Redefinir Senha</button>
        </form>
    </div>

    <script src="assets/js/analisar_senha.js"></script>

</body>
</html>