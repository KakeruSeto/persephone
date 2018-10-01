<?php
function connectDB()
{
  require_once('./output_function.php');
  $dsn="mysql:dbname=$db_name;host=$host".';charset=utf8'
  try{
    $pdo = new PDO($dsn, $db_user, $db_passwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
  }catch(PDOException $e){
    die ('DB Connection Failed')
  }
    return $pdo;
}

function h($string){
  return htmlspecialchars($string,ENT_QUOTES,'UTF-8');
}

function redirectIfNotLogin()
{
  if (!isset($_SESSION['user'])){
    header('Location: login.php');
    return;
  }
}

function loginUser(){
  return $_SESSION['user'];
}
?>
