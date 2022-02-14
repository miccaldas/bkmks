
<?php
$where = "localhost";
$user = "mic";
$password = "xxxx";
$dbname = "bkmks";
$pdo = new PDO("mysql:host=$where;dbname=$dbname", $user, $password);

$a=1;
$stmt = $pdo->prepare("SELECT * FROM bkmks");
$stmt->execute();
$users = $stmt->fetchAll();
foreach($users as $user)
{
?>
        <div class="title" id="hp_title">
          <?php echo "# ID - "; echo $user["id"]; ?><br>
          <?php echo "   TITLE -  "; echo $user["title"]; ?><br>
          <?php echo "   COMMENT - "; echo $user["comment"]; ?><br>
          <p><a href='<?php echo $user["link"]; ?>' target='_blank'>   </a></p>      
        </div><br>
          <?php } ?>

