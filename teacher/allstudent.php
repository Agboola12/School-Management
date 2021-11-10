<?php include('dashboard.php') ?>


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
        <?php
         $save = mysqli_query($db , "SELECT * FROM student  WHERE approved='true' ");
 echo "<table class='table text-center' style='width: 60%; left: 25%'>";
  echo "<tr class='bg-primary'>";
  echo "<th colspan='7'>Students</th>";
  echo "</tr>";
  echo "<tr class='thead-light'>";
  echo "<tr>";
  echo "<th>Firstname</th>";
  echo "<th>lastname</th>";
  echo "<th>School Fee</th>";
   echo "<th>Class</th>";
  echo "<th>mobile</th>";
  echo "</tr>";


  $tot = 0;
  while ($retrive = mysqli_fetch_array($save))
  {
  echo "<tr>
          <td>".$retrive['firstname']."</td>
          <td>".$retrive['lastname']."</td>
           <td>".$retrive['schoolfee']."</td>
          <td>".$retrive['class']."</td>
          <td>".$retrive['mobile']."</td>
      </tr>";
  }
  echo "</table>";
?>


 <script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
 <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>
</html>