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
    <a href="../teacher/first.php" class="nav-link" data-target="#login" data-toggle="modal">Teacher</a>
    </li>
     <li class="nav-item dropdown list-line-item mr-5" >
      <a href="../student/first.php" class="nav-link ">Student</a>
    </li>
  </ul>
 <!--  <ul class="navbar-nav list-line ml-auto">  
     <li class="nav-item dropdown  list-line-item mr-5">
      <a href="#" class="nav-link">About Us</a>
    </li>
    <li class="nav-item dropdown list-line-item mr-5">
      <a href="#" class="nav-link">Contact Us</a>
    </li>
  </ul> -->
</div>
</nav>

<div class="container-fluid text-center bg-light" style="margin-top: 10em">
  <p style="font-size:50px ">HELLO</p>
  <p style="font-size: 20px">Your account is yet to be approved</p>
  <p style="font-size: 20px">Our Team is checking your profile</p><br>
  <p style="font-size: 20px">Soon your account will be confirmed</p><br><br>

  <h4>Check Later</h4>
  <a href="logout.php"><button class="btn btn-primary" >Logout for now</button></a>
  
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