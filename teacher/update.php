<?php
 session_start();
require "../connect.php";

if (isset($_POST['submit']))
{
$id=mysqli_real_escape_string($db, $_SESSION['id']);
$firstname=mysqli_real_escape_string($db, $_POST['firstname']);
$lastname=mysqli_real_escape_string($db, $_POST['lastname']);
$username=mysqli_real_escape_string($db, $_POST['username']);
$mobile=mysqli_real_escape_string($db, $_POST['mobile']);
$salary=mysqli_real_escape_string($db, $_POST['salary']);

$a = mysqli_query($db,"UPDATE teacher SET firstname = '$firstname', lastname='$lastname', salary='$salary', username='$username', mobile='$mobile' WHERE id ='$id'");  
    
    if ($a)  {
            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['salary'] = $salary;
            $_SESSION['mobile'] = $mobile;
            $_SESSION['username'] = $username;
            header('location: teacherprofile.php');
    } 
     else  {
         echo "something went wrong";
     }
}
?>
