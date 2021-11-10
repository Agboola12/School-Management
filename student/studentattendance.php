<?php 
    include('dashboard.php');
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
<style>
table{
        position: relative;
        top: 20vh;
     }
</style>
</head>
<body>
        
   <table class="table text-center" style="width: 60%; left: 25%">
      <tr class="bg-primary">
        <th colspan="3">Please Enter The Date For The Attendance</th>
      </tr>


      <tr>   
        <td><input type="text" class="form-control"> </td>
      </tr>

      <tr>   
        <td><a class="btn btn-primary" name="submit" href="submitattend.php">Submit</a></td>
      </tr>

  
   
  "</table>"



<!-- <td><input type='text' name='date' class='form-control' value=''></td> -->
 <script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
 <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>
</html>