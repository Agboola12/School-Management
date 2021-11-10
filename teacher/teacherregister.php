<?php include 'server.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <title></title>
  <meta charset="utf-8">
  <!-- <link rel="stylesheet" type="text/css" href="index.css"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.css"> 
  <link rel="stylesheet" type="text/css" href="../Font-Awesome-master/css/all.css">
  <link rel="stylesheet" type="text/css" href="../fonts/material-icon/css/material-design-iconic-font.css">

</head>

<body>


  <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top ">

    <a href="" class="navbar-brand p-3">School Management</a>
    <button class="navbar-toggler" data-toggle="collapse" type="button" data-target="#sab">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="sab">    
  <ul class="navbar-nav list-line">               
    <li class="nav-item active list-line-item mr-5 ">
      <a href="../index.php" class="nav-link active">Home</a>
    </li>

    <li class="nav-item dropdown list-line-item mr-5 " >
      <a href="../admin/first.php" class="nav-link">Admin</a>
    </li>
    <li class="nav-item dropdown  list-line-item mr-5" >
    <a href="first.php" class="nav-link" data-target="#login" data-toggle="modal">Teacher</a>
    </li>
     <li class="nav-item dropdown list-line-item mr-5" >
      <a href="../student/first.php" class="nav-link ">Student</a>
    </li>
  </ul>
  <!-- <ul class="navbar-nav list-line ml-auto">  
     <li class="nav-item dropdown  list-line-item mr-5">
      <a href="#" class="nav-link">About Us</a>
    </li>
    <li class="nav-item dropdown list-line-item mr-5">
      <a href="#" class="nav-link">Contact Us</a>
    </li>
  </ul> -->
</div>
</nav>

<div class="container jumbotron card form-inline" style="top: 6em; border-radius: 50px" >
            <form action="" method="post"  enctype="multipart/form-data">
               <p class="bg-primary text-center" style="padding: 1em">Hire New Teacher To School</p> <br>
                 <?php include('../errors.php'); ?> 
                <div class="form-group">
                      <input type="text" class="form-control m-2" placeholder="Firstname" name="firstname" style="padding-right:3em;padding-left: 2em;">
                      <input type="text" class="form-control m-2" placeholder="Lastname" name="lastname" style="padding-right:3em;padding-left: 2em">
                </div>

                <div class="form-group">
                      <input type="text" class="form-control m-2" name="username" placeholder="Username" style="padding-right:3em;padding-left: 2em">
                      <input type="text" class="form-control m-2" name="mobile" placeholder="Mobile" style="padding-right:3em;padding-left: 2em">
                </div>

                <div class="form-group">
                      <input type="text" class="form-control m-2" name="salary" placeholder="Salary" style="padding-right:3em;padding-left: 2em">
                      <input type="password" class="form-control m-2" name="password_1" placeholder="Password" style="padding-right:3em;padding-left: 2em">
                </div>

                <div class="form-group">
                      <input type="password" class="form-control m-2" name="password_2" placeholder="Re-enter Password" style="padding-right:3em;padding-left: 2em;">
                       <!-- <input type="password" class="form-control m-2" name="password_2" placeholder="Re-enter Password" style="padding-right:3em;padding-left: 2em"> -->
                       <!-- <select name="gender" class="form-control">
                        <option value="male" name="gender">Male</option>
                        <option value="female" name="gender">Female</option>
                    </select>
                        -->
                     
                </div>
                <center>
                    <input type="submit" name="reg_teacher" id="reg_teacher" class="btn btn-primary mt-3" style="width: 30%; padding: 1em" value="Hire">
                </center>
            </form>
        </div>


<div class="container-fluid bg-dark text-light text-center fixed-bottom"  id="footer">
    
               <div class="mt-3">
                <span class="fab fa-facebook m-1"></span>
           
               <span class="fab fa-whatsapp m-1"></span>
             
               <span class="fab fa-twitter m-1"></span>
              
               <span class="fab fa-instagram m-1"></span>
              </div>
            
            <p>Made in Nigeria<br>Copyright @2020 elite</p> 
      </div>  

  <script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
  <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>
</html>