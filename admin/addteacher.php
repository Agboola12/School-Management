<?php 
    include('dashboard.php') ;
// initializing variables
      $username = "";
      $errors = array();

// connect to the database
    include("../connect.php");

// REGISTER USER

if (isset($_POST['reg_teacher'])) {

  // receive all input values from the form
  $firstname=mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname=mysqli_real_escape_string($db, $_POST['lastname']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $mobile= mysqli_real_escape_string($db, $_POST['mobile']);
  $salary= mysqli_real_escape_string($db, $_POST['salary']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($firstname)) { array_push($errors, "First Name is required"); }
  if (empty($lastname)) { array_push($errors, "Last Name is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($mobile)) { array_push($errors, "Mobile is required"); }
  if (empty($salary)) { array_push($errors, "Salary is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  }
  // first check the database to make sure
  // a user does not already exist with the same username and/or email

 $user_check_query = "SELECT * FROM teacher WHERE username='$username'  LIMIT 1 ";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

    $password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO teacher  (username,password_1,firstname,lastname,salary,mobile,approved)
           VALUES('$username','$password','$firstname','$lastname','$salary',$mobile,'true')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['firstname'] =$firstname;
    $_SESSION['lastname'] =$lastname;
    // echo "successful". $firstname;
    header('location: addteacher.php');
  }
}



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
<style>
      .container{
        position: absolute;
        top: 20vh;
        padding-left:40%;
      } 

      p{
        padding: 1em;
      } 

</style>
</head>
<body>
        <div class="container form-inline" >
            <form action="" method="post">
                      <p class=" text-center ">Hire New Teacher To School</p> <br>
                <div class="form-group">
                      <input type="text" class="form-control  m-2" placeholder="Firstname" name="firstname" style="padding-right:3em;padding-left: 2em;">
                      <input type="text" class="form-control m-2" placeholder="Lastname" name="lastname" style="padding-right:3em;padding-left: 2em">
                </div>

                <div class="form-group">
                      <input type="text" class="form-control m-2" name="username" placeholder="Username" style="padding-right:3em;padding-left: 2em">
                      <input type="text" class="form-control m-2" name="salary" placeholder="salary" style="padding-right:3em;padding-left: 2em">
                </div>

                <div class="form-group">
                      <input type="text" class="form-control m-2" name="mobile" placeholder="Mobile" style="padding-right:3em;padding-left: 2em">
                      <input type="password" class="form-control m-2" name="password_1" placeholder="Password" style="padding-right:3em;padding-left: 2em">
                </div>

                 <div class="form-group">
                      <input type="password" class="form-control m-2" name="password_2" placeholder="Re-enter Password" style="padding-right:3em;padding-left: 2em">
                </div>
                <center>
                    <button type="submit" name="reg_teacher" id="reg_teacher" class="btn btn-primary" style="width: 30%; padding: 1em" >Hire</button>
                </center>
            </form>
        </div>


 <script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
 <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>
</html>