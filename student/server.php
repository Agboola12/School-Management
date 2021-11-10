<?php
session_start();
// initializing variables
$username = "";

$errors = array();

// connect to the database
    include("../connect.php");

// REGISTER USER

if (isset($_POST['reg_student'])) {

  // receive all input values from the form
  $firstname=mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname=mysqli_real_escape_string($db, $_POST['lastname']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $mobile= mysqli_real_escape_string($db, $_POST['mobile']);
  $schoolfee= mysqli_real_escape_string($db, $_POST['schoolfee']);
  $class= mysqli_real_escape_string($db, $_POST['class']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($firstname)) { array_push($errors, "First Name is required"); }
  if (empty($lastname)) { array_push($errors, "Last Name is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($mobile)) { array_push($errors, "Mobile is required"); }
  if (empty($schoolfee)) { array_push($errors, "schoolfee is required"); }
  if (empty($class)) { array_push($errors, "class is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  }
  // first check the database to make sure
  // a user does not already exist with the same username and/or email

 $user_check_query = "SELECT * FROM student WHERE username='$username'  LIMIT 1 ";
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

    $query = "INSERT INTO student (username,password_1,firstname,lastname,schoolfee,mobile,class,approved)
           VALUES('$username','$password','$firstname','$lastname','$schoolfee',$mobile,'$class','false')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['firstname'] =$firstname;
    $_SESSION['lastname'] =$lastname;
	  // echo "successful". $firstname;
    header('location: studentlogin.php');
  }
}




// Login

if (isset($_POST['login_student'])){
		$username= $_POST['username'];
		$password=md5($_POST['password']);

    echo $username;
    echo $password;
	  $q = mysqli_query($db, "SELECT * FROM student WHERE username='$username' and password_1='$password'");

    $res = mysqli_num_rows($q);

 		if($res == 1){
      $res = mysqli_query($db , "SELECT * FROM student  WHERE approved='true' " );
			while ($row = mysqli_fetch_assoc($q))
      {
        $id = $row['id'];
	     	$username = $row['username'];
        $password_1 = $row['password_1'];
        $first_name = $row['firstname'];
        $last_name = $row['lastname'];
        $mobile = $row['mobile'];
        $schoolfee = $row['schoolfee'];
        $class = $row['class'];

        $_SESSION['id'] = $id;
        $_SESSION['username'] = $username;
        $_SESSION['password_1'] = $password_1;
        $_SESSION['firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        $_SESSION['mobile'] = $mobile;
        $_SESSION['schoolfee'] =  $schoolfee;
        $_SESSION['class'] = $class;
     	}
   		header("location: studentdashboard.php");
 	 }
  else
  {
        array_push($errors, "<h6 style = 'color:red; text-align:center;'>Wrong Username or Password</h6>");
        header("location: norecord.php");
  };

	echo mysqli_error($db);
}

  ?>
