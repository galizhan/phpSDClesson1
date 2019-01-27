<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  </head>
  <body>
    <?php
    require_once('./config/dbConnection.php');
    $id = $_GET['id'];

    $STH = $db -> prepare( "select * from post where id=".$id );

    $STH -> execute();

    $post  = $STH -> fetch();
    $title = $post['title'];
    $description = $post['description'];

    echo '
    <div class="container">
    <form class="col-md-6" action="updateInDatabase.php" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" name="title" value="'.$title.'"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">
        <small id="emailHelp" class="form-text text-muted">We\'ll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Descrtiption</label>
        <textarea name="description" class="form-control" id="exampleInputPassword1" placeholder="Password">
        '.$description.'
        </textarea>
      </div>
      <input type="hidden" name="id" value="'.$id.'"/>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    ';

    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
