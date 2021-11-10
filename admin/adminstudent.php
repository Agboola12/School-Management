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
   .container{
    position: relative;
    top: 30vh;
    left: 8em;
    text-decoration: none;
   }
 </style>
 <body>
        <div class="container text-center " >
          <div class="btn-group m-3">
                <a href="viewstudent.php"><button type="button" style="width:220px;height: 150px" class="btn btn-primary">View All Student<br><br><i class="fas fa-eye"></i></button></a>
          </div>

           <div class="btn-group m-3">
                <a href="addstudent.php"><button type="button" style="width:220px;height: 150px" class="btn btn-success">Add Student <br><br><i class="fa fa-calendar-plus"></i></button></a>
          </div>

           <div class="btn-group m-3">
                <a href="approvestudent.php"><button type="button" style="width:220px;height: 150px" class="btn btn-warning">Approve Student <br><br> <i class=" fa fa-landmark"></i></button></a>
          </div>

         <div class="btn-group m-3">
                <a href="studentfee.php"><button type="button" style="width:220px;height: 150px" class="btn btn-danger">View Student Fee<br><br><i class="fa fa-users"></i></button></a>
          </div>
        </div>

 <script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
 <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>
</html>