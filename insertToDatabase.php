<?php
  require_once('./config/dbConnection.php');
  $title = $_POST['title'];
  $description = $_POST['description'];
  
  echo $_POST['title']."</br>";
  echo $_POST['description']."</br>";

  $sql = "INSERT INTO post (title, description) VALUES (?,?)";
  $stmt= $db->prepare($sql);
  $stmt->execute([$title, $description]);

  header('Location: http://localhost/phpTry1/');
  exit;
 ?>
