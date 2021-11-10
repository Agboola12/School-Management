<?php
session_start();
// initializing variables
$username = "";

$errors = array();

// connect to the database
    include("../connect.php");

// $db = mysqli_connect('localhost', 'root', '', 'school');
//  if (mysqli_connect_errno())
//     {
//     echo "Failed to connect to MySQL: " . mysqli_connect_error();
//     }

// REGISTER USER

if (isset($_POST['reg_admin'])) {

  // receive all input values from the form
  $firstname=mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname=mysqli_real_escape_string($db, $_POST['lastname']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $mobile= mysqli_real_escape_string($db, $_POST['mobile']);
  $salary= mysqli_real_escape_string($db, $_POST['salary']);

  $filetoupload = $_FILES["pix"]["name"];
  $target_dir = "profile/";
  $target_file = $target_dir . $filetoupload;
  $filetouploadsize= $_FILES["pix"]['size'];
  $filetouploadtype= $_FILES["pix"]['type'];
  $tmp = $_FILES["pix"]["tmp_name"];

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
       $pixmove = move_uploaded_file($tmp, $target_file);

 $user_check_query = "SELECT * FROM admin WHERE username='$username'  LIMIT 1 ";
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

    $query = "INSERT INTO admin  (username,password_1,firstname,lastname,salary,mobile,profile)
           VALUES('$username','$password','$firstname','$lastname','$salary',$mobile,'$filetoupload')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['firstname'] =$firstname;
    $_SESSION['lastname'] =$lastname;
	  // echo "successful". $firstname;
    header('location: adminlogin.php');
  }
   // else {
      // echo "Not successful: " . mysqli_error($db);
  // }
}








// Login

if (isset($_POST['login_admin'])){
		$username= $_POST['username'];
		$password=md5($_POST['password']);

    echo $username;
    echo $password;
	  $q = mysqli_query($db, "SELECT * FROM admin WHERE username='$username' and password_1='$password'");

    $res = mysqli_num_rows($q);

 		if($res == 1){
			while ($row = mysqli_fetch_assoc($q))
      {
        $id = $row['id'];
		    $username = $row['username'];
        $password_1 = $row['password_1'];
        $first_name = $row['firstname'];
        $last_name = $row['lastname'];
        $mobile = $row['mobile'];
        $salary = $row['salary'];
        $profile = $row['profile'];

        $_SESSION['id'] = $id;
        $_SESSION['username'] = $username;
        $_SESSION['salary'] =  $salary;
        $_SESSION['password_1'] = $password_1;
        $_SESSION['firstname'] = $first_name;
        $_SESSION['lastname'] = $last_name;
        $_SESSION['mobile'] = $mobile;
        $_SESSION['profile'] = $profile;
     	}
   		header("location:admindashboard.php");
 	 }
  else
  {
        array_push($errors, "<h6 style = 'color:red; text-align:center;'>Wrong Username or Password</h6>");
  };

	echo mysqli_error($db);
}









// notice

if (isset($_POST['notice_admin'])) {

  // receive all input values from the form
  $message= mysqli_real_escape_string($db, $_POST['message']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($message)) { array_push($errors, "Message is required"); }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

    $query = "INSERT INTO admin_notice  (message) VALUES('$message')";
    mysqli_query($db, $query);
   
    $_SESSION['message'] =$message;
    // echo "successful". $firstname;
    header('location: adminnotice.php');
  }
}













  ?>
