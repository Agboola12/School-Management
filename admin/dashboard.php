<?php 
include ('server.php');

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: adminlogin.php');
  }
  $id = $_SESSION['id'];
  $username = $_SESSION['username'];
  $salary = $_SESSION ['salary'];
  $firstname =$_SESSION ['firstname'];
  $lastname = $_SESSION['lastname'];
  $mobile = $_SESSION ['mobile'];
  $profile = $_SESSION['profile'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Principal</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="dashboard.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../Font-Awesome-master/css/all.css">
  <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../fonts/material-icon/css/material-design-iconic-font.css">
</head>

<body>
  <header>
        <div class="left_area" style="padding-top: 1em">
          <h1>School <span>Management</span></h1>
        </div>
        <div class="right_area">
          <a href="logout.php" style="text-decoration: none;" class="logout_btn">Logout</a>
        </div>
      </header>

    <div class="sidebar" >
      <center>
        <?php echo "<img src='profile/".$_SESSION['profile']."' class='profile_image'>"; ?>
        <h4><?php echo $username; ?> </h4>
      </center>
      <a href="admindashboard.php" style="text-decoration: none;"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="adminteacher.php" style="text-decoration: none;"><i class="fas fa-chalkboard-teacher"></i><span>Teacher</span></a>    
      <a href="adminstudent.php" style="text-decoration: none;"><i class="fas fa-graduation-cap"></i><span>Student</span></a>     
      <!-- <a href="adminattendance.php" style="text-decoration: none;"><i class="fas fa-clock"></i><span>Attendance</span></a>      -->
<!-- <a href="adminfee.php" style="text-decoration: none;"><i class="fas fa-money-bill-alt"></i><span></span>Fees</a> -->
      <a href="adminnotice.php" style="text-decoration: none;"><i class="fas fa-bell"></i><span>Notice</span></a>
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



