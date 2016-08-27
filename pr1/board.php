<?php

echo $_SERVER['REQUEST_METHOD'];

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $userData = array(
        "date" => $_SERVER['REQUEST_TIME'],
        "email" => filter_var($_POST['email'], FILTER_SANITIZE_EMAIL),
        "name" => filter_var($_POST['name'],FILTER_SANITIZE_STRING),
        "text" => filter_var($_POST['text'],FILTER_SANITIZE_STRING),
    )


file_put_contents("database.txt", $userData, FILE_APPEND);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 101 Template</title>

 
    <link href="css/bootstrap.min.css" rel="stylesheet">


  </head>
  <body>
    

<form method="post" action "board.php">

<div class="form-group">

    <label for="exampleInputEmail1">email address</label>
    <input name="email"  type="email" class="form-control" placeholder="email">
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input name="name" type="text" class="form-control">
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Comment</label>
    <textarea name="text" class="form-control"></textarea>
  </div>
  
  
  <button type="submit" class="btn btn-default">Submit</button>

</form>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
