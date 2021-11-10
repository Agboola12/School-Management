<?php 
    include('dashboard.php');
    include 'submitattend.php';

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
        <?php
  $save = mysqli_query($db , "SELECT * FROM student  WHERE class='4' ");

  echo "<table class='table text-center' style='width: 60%; left: 25%'>";
  echo "<tr class='bg-primary'>";
  echo "<th colspan='3'>Please Enter The Date For The Attendance</th>";
  echo "</tr>";

  echo "<tr class='thead-light'>";
  
  echo "<tr>   
        <td><input type='text' class='form-control' </td>
      </tr>";

  echo "<tr>   
        <td><a class='btn btn-primary' name='submit' href='submitattend.php'>Submit</a></td>
      </tr>";

  // while ($retrive = mysqli_fetch_array($save))
  // {
  // echo "<tr>
  //         <td name='student_name'>".$retrive['firstname']." ".$retrive['lastname']."</td>
  //         <td>  <select name='attend'>
  //                 <option name='attend'> Present </option>
  //                 <option name='attend'> Absent </option>
  //               </select>
  //         <td>
  //     </tr>";
  // }
   
  echo "</table>";

?>

<!-- <td><input type='text' name='date' class='form-control' value=''></td> -->
 <script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
 <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>
</html>