<?php
      session_start();

      require "../connect.php";
      // include('server.php');

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: teacherlogin.php');
  }
  $id= $_SESSION['id'];
  $username = $_SESSION['username'];
  $firstname =$_SESSION ['firstname'];
  $lastname = $_SESSION['lastname'];
  $mobile = $_SESSION ['mobile'];
  $salary = $_SESSION['salary'];
            
 ?>
<!DOCTYPE html>
<html>
<head>
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
      <a href="teacherdashboard.php" style="text-decoration: none;"><i class="fas fa-desktop"></i><span>Dashboard</span></a>   
       <a href="teacherprofile.php" style="text-decoration: none;"><i class="fas fa-clock"></i><span>Profile</span></a>  
     <!--  <a href="teacherattendance.php" style="text-decoration: none;"><i class="fas fa-clock"></i><span>Attendance</span></a>  -->    
      <a href="allstudent.php" style="text-decoration: none;"><i class="fas fa-users"></i><span>All Student</span></a>
      <a href="teachernotice.php" style="text-decoration: none;"><i class="fas fa-bell"></i><span>Notice</span></a>

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