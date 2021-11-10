<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="dashboard.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="Font-Awesome-master/css/all.css">
  <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="fonts/material-icon/css/material-design-iconic-font.css">
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
      <a href="#" class="nav-link active">Home</a>
    </li>

    <li class="nav-item dropdown list-line-item mr-5 " >
      <a href="" class="nav-link">Admin</a>
    </li>
    <li class="nav-item dropdown  list-line-item mr-5" >
    <a href="#" class="nav-link" data-target="#login" data-toggle="modal">Teacher</a>
    </li>
     <li class="nav-item dropdown list-line-item mr-5" >
      <a href="" class="nav-link ">Student</a>
    </li>
  </ul>
  <ul class="navbar-nav list-line ml-auto">  
     <li class="nav-item dropdown  list-line-item mr-5">
      <a href="#" class="nav-link">About Us</a>
    </li>
    <li class="nav-item dropdown list-line-item mr-5">
      <a href="#" class="nav-link">Contact Us</a>
    </li>
  </ul>
</div>
</nav>

      <<!-- header>
        <div class="left_area">
          <h1>School <span>Management</span></h1>
        </div>
        <div class="right_area">
          <a href="#" class="logout_btn">Logout</a>
        </div>
      </header> -->


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<div id="main">
  <h2>Sidenav Push Example</h2>
  <p>Click on the element below to open the side navigation menu, and push this content to the right.</p>
  <span class=" " style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>








   <!--  <div class="sidebar" >
      <center>
        <img src="images/pastor.png" class="profile_image">
        <h4>Elijah</h4>
      </center>
      <a href="admindashboard.php" style="text-decoration: none;"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="adminteacher.php" style="text-decoration: none;"><i class="fas fa-chalkboard-teacher"></i><span>Teacher</span></a>    
      <a href="adminstudent.php" style="text-decoration: none;"><i class="fas fa-graduation-cap"></i><span>Student</span></a>     
      <a href="adminattendance.php" style="text-decoration: none;"><i class="fas fa-clock"></i><span>Attendance</span></a>     
      <a href="adminfee.php" style="text-decoration: none;"><i class="fas fa-money-bill-alt"></i><span></span>Fees</a>
      <a href="adminnotice.php" style="text-decoration: none;"><i class="fas fa-bell"></i><span>Notice</span></a>
    </div>  -->

   
 <!-- <footer class="fixed-bottom text-light text-dark text-center" id="footer">
      <div class="footer-area">
        <p>© Copyright Agboola E.I All right reserved. Template by <a href="elijahagboola077">Elite</a>.</p>
      </div>
    </footer>   -->
  <script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>
  <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>
</html>