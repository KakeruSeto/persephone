<?php
function connectDB()
{
  require_once('./output_function.php');
  $dsn="mysql:dbname=$db_name;host=$host".'charset=utf8'
  try{}catch(PDOException $e){return $pdo;}
}
?>
