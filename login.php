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
    <title>Login | Minha Conta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .container {
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            padding: 40px;
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: translateY(-5px);
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo h1 {
            color: #5b6bd1;
            font-weight: 700;
            font-size: 28px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
            font-size: 14px;
        }

        .form-group input {
            width: 100%;
            padding: 15px;
            border: 1px solid #e1e1e1;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            border-color: #6e8efb;
            outline: none;
            box-shadow: 0 0 0 2px rgba(110, 142, 251, 0.2);
        }

        .password-container {
            position: relative;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .checkbox-group input {
            margin-right: 10px;
            cursor: pointer;
            width: 18px;
            height: 18px;
            accent-color: #6e8efb;
        }

        .checkbox-group label {
            color: #555;
            font-size: 14px;
            cursor: pointer;
        }

        .forgot-password {
            text-align: right;
            margin-bottom: 20px;
        }

        .forgot-password a {
            color: #6e8efb;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .forgot-password a:hover {
            color: #a777e3;
            text-decoration: underline;
        }

        .btn-login {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            background: linear-gradient(135deg, #5d7df9, #9666d9);
            transform: translateY(-2px);
            box-shadow: 0 7px 14px rgba(110, 142, 251, 0.2);
        }

        .btn-login:active {
            transform: translateY(0);
        }
        
        @media (max-width: 480px) {
            .container {
                padding: 30px 20px;
                max-width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <h1>Minha Conta</h1>
        </div>
        <form method="post" action="/auth.php">
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
</body>
</html>