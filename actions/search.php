<!DOCTYPE html>
<html>
<head>
<title>Results</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Mclds">
<meta name="description" content="Results of the bookmark database query">
<link rel="stylesheet" type="text/css" href="http://localhost/bkmks/css/index.css" media="screen">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@600&family=Noto+Sans+KR&display=swap" rel="stylesheet">
</head>
<header>
<?php require 'http://localhost/bkmks/forms/header.php'; ?>
</header>
<body>
<div class="flex-container">
<div class="answer">
<?php

$question = $_GET['Bookmark'];

$where = "localhost";
$user = "mic";
$password = "xxxx";
$dbname = "bkmks";
$pdo = new PDO("mysql:host=$where;dbname=$dbname", $user, $password);    

$a=1;
$stmt = $pdo->prepare("SELECT id, title, comment, link FROM bkmks WHERE MATCH(title, comment, link, k1, k2, k3) AGAINST ('$question' IN NATURAL LANGUAGE MODE)");
$stmt->execute();
$users = $stmt->fetchAll();
foreach($users as $user) 
{  
?>
<p><div class="title" name="title-search">
<?php echo " # ID - "; echo $user["id"]; ?><br>
<?php echo "   TITLE - "; echo $user["title"]; ?><br>
<?php echo "   COMMENT -  "; echo $user["comment"]; ?><br>
<a href='<?php echo $user["link"]; ?>'>&nbsp;&nbsp;LINK</a></div></p><br>
<?php } ?>
</div>
<div class="footer">©mclds 2021 ❰❱ mclds@protonmail.com</div>
</div>
</body>
</html>
