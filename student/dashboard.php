<?php
      session_start();

      require "../connect.php";

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: studentlogin.php');
  }
  $id= $_SESSION['id'];
  $username = $_SESSION['username'];
  $firstname =$_SESSION ['firstname'];
  $lastname = $_SESSION['lastname'];
  $mobile = $_SESSION ['mobile'];
  $schoolfee = $_SESSION ['schoolfee'];
  $class = $_SESSION['class'];


            
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Student</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="dashboard.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../Font-Awesome-master/css/all.css">
  <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../fonts/material-icon/css/material-design-iconic-font.css">
</head>

<body>
      <header style="padding-top: 1.5em">
        <div class="left_area">
          <h1>School <span>Management</span></h1>
        </div>
        <div class="right_area">
          <a href="logout.php" style="text-decoration: none;" class="logout_btn">Logout</a>
        </div>
      </header>

<!-- sidebar -->
    <div class="sidebar">
      <center>
        <img src="../images/pastor.png" class="profile_image">
        <h4>Elijah</h4>
      </center>
      <a href="studentdashboard.php" style="text-decoration: none;"><i class="fas fa-desktop"></i><span>Dashboard</span></a>    
      <!-- <a href="studentattendance.php" style="text-decoration: none;"><i class="fas fa-clock"></i><span>Attendance</span></a>  -->
      <a href="studentprofile.php" style="text-decoration: none;"><i class="fas fa-user"></i><span>Profile</span></a>     
    </div> 

    <footer class="fixed-bottom text-light text-dark text-center" id="footer">
      <div class="footer-area">
        <p>© Copyright Agboola E.I All right reserved. Template by <a href="elijahagboola077">Elite</a>.</p>
      </div>
    </footer> 


  <script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
  <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>
</html>