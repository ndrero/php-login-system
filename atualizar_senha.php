<?php 

session_start();
include_once 'verificar_token.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset de Senha | Minha Conta</title>
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

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h2 {
            color: #5b6bd1;
            font-weight: 600;
            font-size: 22px;
            margin-bottom: 10px;
        }

        .header p {
            color: #777;
            font-size: 14px;
            line-height: 1.6;
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

        .password-strength {
            margin-top: 8px;
            font-size: 12px;
            color: #777;
        }

        .password-strength .meter {
            height: 4px;
            background-color: #eee;
            border-radius: 2px;
            margin-top: 5px;
            position: relative;
            overflow: hidden;
        }

        .password-strength .meter div {
            height: 100%;
            width: 0;
            background-color: #ff6b6b;
            transition: width 0.3s ease, background-color 0.3s ease;
        }

        .password-strength .meter div.weak {
            width: 33%;
            background-color: #ff6b6b;
        }

        .password-strength .meter div.medium {
            width: 66%;
            background-color: #ffbb3d;
        }

        .password-strength .meter div.strong {
            width: 100%;
            background-color: #52c41a;
        }

        .password-tips {
            margin-top: 5px;
            font-size: 12px;
            color: #777;
        }

        .btn-submit {
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

        .btn-submit:hover {
            background: linear-gradient(135deg, #5d7df9, #9666d9);
            transform: translateY(-2px);
            box-shadow: 0 7px 14px rgba(110, 142, 251, 0.2);
        }

        .btn-submit:active {
            transform: translateY(0);
        }
        
        .password-container {
            position: relative;
        }
        
        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #777;
            cursor: pointer;
            font-size: 14px;
        }

        .info-box {
            background-color: rgba(110, 142, 251, 0.1);
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
            border-left: 4px solid #6e8efb;
        }
        
        .info-box p {
            color: #5b6bd1;
            font-size: 14px;
            line-height: 1.5;
        }

        @media (max-width: 480px) {
            .container {
                padding: 30px 20px;
                max-width: 90%;
            }
        }

        /* Feedback styles */
        .feedback {
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            display: none;
        }

        .success {
            background-color: rgba(82, 196, 26, 0.1);
            border-left: 4px solid #52c41a;
            color: #52c41a;
        }

        .error {
            background-color: rgba(255, 77, 79, 0.1);
            border-left: 4px solid #ff4d4f;
            color: #ff4d4f;
        }
    </style>
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
        <form id="resetForm">
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
                    <input type="password" id="password" placeholder="Digite sua nova senha" required>
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
                    <input type="password" id="confirmPassword" placeholder="Confirme sua nova senha" required>
                    <button type="button" class="password-toggle" id="toggleConfirmPassword">Mostrar</button>
                </div>
            </div>
            <button type="submit" class="btn-submit">Redefinir Senha</button>
        </form>
    </div>


</body>
</html>