<?php 
  include('dashboard.php'); 
  include ('server.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teacher</title>
    <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../Font-Awesome-master/css/all.css">
 </head>
 <style type="text/css">
   .container{
    position: relative;
    top:20vh;
    padding: 2em;
    left: 8em;
   }
 </style>
<body>
  <form action="" method="post">
  <div class="container jumbotron card">
    
    <h2 class="bg-primary text-center" style="padding: 1em">Announce Something</h2><br>
    <textarea name="message" style="height: 150px"></textarea><br><br>
    <center>
    <input type="submit" name="notice_admin" id="notice_admin" value="Submit" style="width: 10em; border-radius:20px" class="form-control bg-primary">
    </center>
  </div>
  </form>

 <script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
 <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>
</html>