<?php  
     include('dashboard.php') 
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
 <style type="text/css">
     #profile{
        position: relative;
        top: 15vh;
     }

     
 </style>
<body> 
<form method="POST" action="update.php">
      <div class="container" id="profile" style="margin-left: 20%; position: fixed; " >
    <h2 align="center">Profile</h2>
    <div class="jumbotron">
        <div class="row">
           
          <div class="" style=" width: 50%; margin-left: 50px; ">
              <div class="col-md-6"   >
                <input type="hidden" name="id"  class="form-control" value="<?php echo $id; ?>" style="width: 500px"  >
                    <div class="m-3">
                        <h6 class="">Firstname</h6>
                        <input type="text" name="firstname"  class="form-control" value="<?php echo $firstname; ?>" style="width: 500px" >
                    </div>
                    <div class="m-3">
                        <h6  class="">Lastname</h6>
                        <input type="text" name="lastname"  class="form-control" value="<?php echo $lastname; ?>" style="width: 500px" > 
                    </div>
                    <div class="m-3 ">
                        <h6 class="" >Username</h6>
                        <input type="text" name="username"  class="form-control" value="<?php echo $username; ?>" style="width: 500px" >     
                    </div>
                    <div class="m-3">    
                        <h6  class="" >Salary</h6>
                        <input type="text" name="salary" class="form-control" value="<?php echo $salary; ?>" style="width: 500px" > 
                    </div>
                    <div class="m-3" style=" "> 
                        <h6 class="">Mobile</h6>
                        <input type="text" name="mobile" class="form-control" value="<?php echo $mobile; ?>" style="width: 500px" >  
                    </div>   
              </div>
          </div>
             <div class="col-md-1" >
                <input type="submit" name="submit" class="btn btn-primary h3" value="Update Profile" style="margin-top: 27em; padding-top: 10px;padding-bottom: 10px " >
           </div>
</form> 
        <!-- </div> -->
 </div>
 </div>  
</div>
</div>


 
 <script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
 <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>
</html>