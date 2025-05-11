<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha | Minha Conta</title>
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
            margin-bottom: 20px;
        }

        .btn-submit:hover {
            background: linear-gradient(135deg, #5d7df9, #9666d9);
            transform: translateY(-2px);
            box-shadow: 0 7px 14px rgba(110, 142, 251, 0.2);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        .back-link {
            text-align: center;
        }

        .back-link a {
            color: #6e8efb;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
            display: inline-flex;
            align-items: center;
        }

        .back-link a:hover {
            color: #a777e3;
            text-decoration: underline;
        }

        .back-link a:before {
            content: "←";
            margin-right: 5px;
            font-size: 16px;
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
    </style>
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
        <form>
            <div class="info-box">
                <p>Enviaremos um link de recuperação para o seu e-mail. Verifique também sua pasta de spam.</p>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" placeholder="Digite seu e-mail" required autocomplete="email">
            </div>
            <button type="submit" class="btn-submit">Enviar instruções</button>
            <div class="back-link">
                <a href="login.php">Voltar para o login</a>
            </div>
        </form>
    </div>
</body>
</html>