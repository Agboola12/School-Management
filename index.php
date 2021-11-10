<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="index.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="./node_modules/bootstrap/dist/css/bootstrap.css"> 
  <link rel="stylesheet" type="text/css" href="./Font-Awesome-master/css/all.css">
  <link rel="stylesheet" type="text/css" href="./fonts/material-icon/css/material-design-iconic-font.css">

</head>

<body>


  <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top ">

    <a href="" class="navbar-brand p-3">School Management</a>
    <button class="navbar-toggler" data-toggle="collapse" type="button" data-target="#sab">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="sab">    
  <ul class="navbar-nav list-line ml-auto">               
    <li class="nav-item active list-line-item mr-5 ">
      <a href="home" class="nav-link active">Home</a>
    </li>

    <li class="nav-item dropdown list-line-item mr-5 " >
      <a href="admin/first.php" class="nav-link">Admin</a>
    </li>
    <li class="nav-item dropdown  list-line-item mr-5" >
    <a href="teacher/first.php" class="nav-link" data-target="#login" data-toggle="modal">Teacher</a>
    </li>
     <li class="nav-item dropdown list-line-item mr-5" >
      <a href="student/first.php" class="nav-link ">Student</a>
    </li>
  </ul>
 </div>
</nav>


<header>
        <div class="text-center"  id="home">
          <h6 style="margin-bottom: 20%">sjdbmn</h6>
          <h2 class="text-light"  >Learning Today . . .  Leading Tomorrow</h2>
          <p class="text-light" >Knowledge is key to sucess</p>
          <button class="btn btn-success"> Take Admission</button>
          
      </div>
    </header>

<div class="container" id="worker">
  <div class="row">
    <div class=" card col-md 4 m-3">
      <img src="images/pastor.png">
      <p class="text-center">ADMIN</p>
      <a href="./admin/first.php" class="text-light btn btn-dark">View</a>
    </div>

    <div class=" card col-md 4 m-3">
      <img src="images/pastor.png">
      <p class="text-center">TEACHER</p>
     <a href="./teacher/first.php" class="text-light btn btn-dark"> View </a>
    </div>

    <div class=" card col-md 4 m-3">
     <img src="images/pastor.png">
      <p class="text-center">STUDENT</p>
      <a href="./student/first.php" class="text-light btn btn-dark">View</a>
    </div>
  </div>
</div>



 <div class="container-fluid bg-dark text-light text-center p-4"  id="footer">
    <!-- <div class="text-center h4 mt-3"><b>KEEP CONNECTED</b></div> -->
          <!-- <div class="row mt-5 text-center"> -->
               <div class="mt-3">
                <span class="fab fa-facebook m-1"></span>
              <!-- </div> -->

              <!-- <div class="col-md-3"> -->
               <span class="fab fa-whatsapp m-1"></span>
              <!-- </div> -->
              <!-- <div class="col-md-3"> -->
               <span class="fab fa-twitter m-1"></span>
              <!-- </div> -->
              <!-- <div class="col-md-3"> -->
               <span class="fab fa-instagram m-1"></span>
              </div> <br>
            
            <p>© Copyright Agboola E.I All right reserved. Template by <a href="elijahagboola077">Elite</a>.</p>
      </div>




  <script type="text/javascript" src="/node_modules/jquery/dist/jquery.js"></script>
  <script type="text/javascript" src="/node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>
</html>