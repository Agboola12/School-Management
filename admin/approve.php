<?php 
	session_start();
  	include '../connect.php';


	$id = $_GET['id']; 

	$a = "UPDATE teacher SET approved='true' WHERE id='$id'";
	$query = mysqli_query($db,$a);

	if ($query == true)  {
            	echo "successful";
            header('location: approveteacher.php');
    	} 
    else  {
         echo "something went wrong". mysqli_error($db);
     }

//   $sql =("UPDATE teacher SET approved='true' WHERE id='id'");

// if ($db->query($sql) === TRUE) {
//     header('location:viewteacher.php');
// } else {
//     echo "Error updating record: " . $db->error;
// }


 ?>