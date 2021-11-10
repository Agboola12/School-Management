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
 <style type="text/css">
     table{
        position: relative;
        top: 12vh;
     }

     table tr:nth-child(even){
      background-color: #f2f2f2;
    }

    table tr:hover {
      background-color: #ddd;
    }
 </style>
<body>
<table class='table text-center' style="width: 60%; left: 25%">;
    <tr class="bg-primary">
        <th colspan="2">FEE OF STUDENTS</th>
    </tr>
    <tr class='thead-light'>
          <th>Class Name</th>
          <th>View Dues</th>
    </tr>
        
         <tr>
          <td>One</td>
          <td><i class="fas fa-eye "></i></td>
        </tr>
        <tr>
          <td>Two</td>
          <td><i class="fas fa-eye"></i></td>
        </tr>
        <tr>
          <td>Three</td>
          <td><i class="fas fa-eye"></i></td>
        </tr>
        <tr>
          <form action="six.php" method="post">
          <button name="submit">
          <td>Four</td>
          <td><i class="fas fa-eye"></i></td>
          </button>
        </form>
        </tr>
        <tr>
          <td>Five</td>
          <td><i class="fas fa-eye"></i></td>
        </tr>
        <tr>
          <td>Six</td>
            <button>
              <td><i class="fas fa-eye"></i></td>
            </button>
        </tr>
        <tr>
          <td>Seven</td>
          <td><i class="fas fa-eye"></i></td>
        </tr>
        <tr>
          <td>Eight</td>
          <td><i class="fas fa-eye"></i></td>
        </tr>
        <tr>
          <td>Nine</td>
          <td><i class="fas fa-eye"></i></td>
        </tr>
        <tr>
          <td>Ten</td>
          <td><i class="fas fa-eye"></i></td>
        </tr>
</table>

 <script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
 <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>
</html>