<?php
//var_dump($_GET, $_POST);

//if($_SERVER['REQUEST_METHOD'] == "POST"){

  $userData = [
      "date" => $_SERVER['REQUEST_TIME'],
      "email" => filter_var($_POST['email'], FILTER_SANITIZE_EMAIL),
      "name" => filter_var($_POST['name'], FILTER_SANITIZE_STRING),
      "text" => filter_var($_POST['text'], FILTER_SANITIZE_STRING),
  ];

 if(!filter_var($userData['email'], FILTER_VALIDATE_EMAIL)) {
     echo "ERROR : Wrong Email!";
 }

file_put_contents('database.txt',$userData,FILE_APPEND);

$f = fopen('test.txt', 'w',FILE_APPEND);
fwrite($f, 'Hello world'. PHP_EOL . 'This is new string');
fclose($f);

 echo "<pre>";
 var_dump($userData);
//}

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


    <label name="email" for="email">Email address</label>
    <input name="email" type="email" class="form-control" id="email" placeholder="Email">
  </div>

<div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" class="form-control" id="name" placeholder="name">
  </div>

<div class="form-group">
    <label for="text">Comment</label>
    <input name="text" type="text" class="form-control" placeholder="comment">
  </div>
  
  
  <button type="submit" class="btn btn-default">Submit</button>

</form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>