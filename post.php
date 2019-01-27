<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    require_once('config/dbConnection.php');
    $id = $_GET['id'];
    $stmt = $db->query('SELECT * from post where id='.$id);
    while($row = $stmt->fetch()){
            echo "<h1>".$row['title']."</h1>";
            echo "<h4>".$row['description']."</h4>";
            echo '<a href="update.php?id='.$row['id'].'">Edit</a>';
        }

     ?>
  </body>
</html>
