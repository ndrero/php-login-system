<?php
session_start();
if(!$_SESSION['user_id']){
    $_SESSION['warning'] = 'Você precisa estar logado para acessar a sua conta!';
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Usuário | Minha Conta</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>
    <nav class="navbar">
        <a href="#" class="navbar-brand">Minha Conta</a>
        <div class="navbar-menu">
            <a href="#" class="nav-link">Dashboard</a>
            <a href="#" class="nav-link">Serviços</a>
            <a href="#" class="nav-link">Suporte</a>
            <div class="user-dropdown">
                <button class="user-dropdown-btn">
                    <div class="user-avatar"><?php echo $_SESSION['user_name'][0] ?></div>
                    <span><?php echo $_SESSION['user_name'] ?></span>
                </button>
                <div class="user-dropdown-content">
                    <a href="#">Meu Perfil</a>
                    <a href="#">Configurações</a>
                    <a href="#">Notificações</a>
                    <a href="#" class="logout">Sair</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="content">
        <div class="welcome-banner">
            <h1>Bem-vindo de volta, <?php echo $_SESSION['user_name'] ?>!</h1>
            <p>Acesso concedido à área restrita. Aqui você tem acesso a todos os recursos exclusivos da sua conta.</p>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="card-icon icon-purple">📊</div>
                <h3 class="card-title">Estatísticas</h3>
            </div>
            <div class="card-body">
                <p class="card-text">Visualize dados importantes relacionados à sua conta e atividades recentes.</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">Ver detalhes</a>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="card-icon icon-blue">📁</div>
                <h3 class="card-title">Documentos</h3>
            </div>
            <div class="card-body">
                <p class="card-text">Acesse seus documentos importantes e arquivos compartilhados de forma segura.</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">Acessar</a>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="card-icon icon-teal">💬</div>
                <h3 class="card-title">Mensagens</h3>
            </div>
            <div class="card-body">
                <p class="card-text">Você tem 3 novas mensagens aguardando resposta em sua caixa de entrada.</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">Ver mensagens</a>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="card-icon icon-orange">⚙️</div>
                <h3 class="card-title">Preferências</h3>
            </div>
            <div class="card-body">
                <p class="card-text">Personalize as configurações de sua conta e gerencie suas preferências.</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">Configurar</a>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="card-icon icon-pink">🔒</div>
                <h3 class="card-title">Segurança</h3>
            </div>
            <div class="card-body">
                <p class="card-text">Gerencie as configurações de segurança da sua conta e ative a verificação em duas etapas.</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">Gerenciar</a>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="card-icon icon-green">📱</div>
                <h3 class="card-title">Aplicativo</h3>
            </div>
            <div class="card-body">
                <p class="card-text">Baixe nosso aplicativo para acesso rápido e receba notificações em tempo real.</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">Download</a>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>©️ 2025 Minha Conta. Todos os direitos reservados.</p>
    </footer>
</body>
</html>