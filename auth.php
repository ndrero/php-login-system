<?php 

// Pega o que foi enviado por post
// Pesquisa no banco de dados se existe alguem com aquele usuario
// Se tiver, logo
// Se nao, digo que algum dos dois esta errado

session_start();
include_once './db.php';

$username = $_POST['username'];
$password = trim($_POST['password']);

try {
  $stmt = $pdo->prepare('SELECT id, name, password FROM users WHERE username = :username');
  $stmt->execute(['username' => $username]);
  $user = $stmt->fetch();
  
  if(!$user || !password_verify($password, $user['password'])){
    $_SESSION['warning'] = 'Nome de usuário ou senha incorretos';
    header('Location: login.php');
    exit;
  } 
  $_SESSION['user_id'] = $user['id'];
  $_SESSION['user_name'] = $user['name'];
  header('Location: index.php');
  exit;

} catch (PDOException $e) {
  echo 'Não foi possível realizar a consulta no banco de dados' . $e->getMessage();
}