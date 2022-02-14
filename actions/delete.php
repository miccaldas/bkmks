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
<div class="col" id="col1" style="flex-grow:1"></div>
<div class="col" id="col2" style="flex-grow:9">
<div class="answer">

<?php

$delete = $_GET['delete'];

$where = "localhost";
$user = "mic";
$password = "xxxx";
$dbname = "bkmks";
$pdo = new PDO("mysql:host=$where;dbname=$dbname", $user, $password);    

$a=1;
$stmt = $pdo->prepare("DELETE FROM bkmks WHERE id = $delete");
$stmt->execute();
print "ENTRY SUCCESSFULLY DELETED!"
?>
</div>
<div class="footer">©mclds 2021 ❰❱ mclds@protonmail.com</div>
</div>
</body>
</html>
