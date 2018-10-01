<!-- <?php
require_once('./output_functions.php');
session_start();
redirectIfNotLogin();
$id = $_SESSION['user']['id'];
$username = $_SESSION['user']['username'];
$nichiji  = date('Y-m-d H:i:s');
$pdo = connectDB();
if($_SERVER["REQUEST_METHOD"]==="POST"){

}
$sql="SELECT * FROM stations"
$statement=$pdo->prepare($sql);
$statement->execute();
$stations=$statement->fetchAll();


?> -->
<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="utf-8">
 <style type="text/css">

 .go {
   background-color: #239b76;
   padding: 8px 24px;
   color: white;
   display: inline-block;
   opacity: 0.8;
   border-radius: 4px;
 }

 </style>
 <title>ペルセポネ</title>
</head>
 <body>
   <form action="" method="POST">
     <p>駅名<input type="text" name="station"></p>
     <p>徒歩<input type="number" name="minute" step="1">分</p>
     <input type="submit" value="go" class="go">
   </form>
 </body>
</html>
