<?php
    $errors = array();
    include("../connect.php");
    echo $_POST['student_name'];
  if (isset($_POST['submit'])) {

  
  $student_name=mysqli_real_escape_string($db, $_POST['student_name']);
  $attend=mysqli_real_escape_string($db, $_POST['attend']);

  echo $student_name;

  if (empty($student_name)) { array_push($errors, "student_name is required"); }
  if (empty($attend)) { array_push($errors, "attend is required"); }
  
 if (count($errors) == 0) {

    $query = "INSERT INTO attendance  (student_name,attend,dat)
           VALUES('$student_name','$attend','$dat')";

    mysqli_query($db, $query);

    $_SESSION['student_name'] = $student_name;
    $_SESSION['attend'] =$attend;
    header('location: adminattendance.php');
   } 
  echo mysqli_error($db);
}
