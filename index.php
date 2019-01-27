<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include('./config/dbConnection.php');
    try {
    $stmt = $db->query('SELECT * from post');
    while($row = $stmt->fetch()){
            echo '<a href="post.php?id='.$row["id"].'">';
            echo "<h1>".$row['title']."</h1>";
            echo '</a>';
        }
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
     ?>
  </body>
</html>
