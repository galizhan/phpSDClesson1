<?php
  require_once('./config/dbConnection.php');
  $title = $_POST['title'];
  $description = $_POST['description'];
  $id = $_POST['id'];

  $sql = "UPDATE post SET title=?, description=? WHERE id=?";
  $stmt= $db->prepare($sql);
  $stmt->execute([$title, $description, $id]);

  header('Location: http://localhost/phpTry1/post.php?id='.$id);
  exit;
 ?>
