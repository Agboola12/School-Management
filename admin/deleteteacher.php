<?php
// include("../connect.php");
$db = mysqli_connect('localhost', 'root', '', 'school');
 if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

if (isset($_GET['id'])){
	$id = $_GET['id'];
	$retrive = "DELETE FROM teacher WHERE id = $id";

	if (mysqli_query($db, $retrive)) {
	    echo "Record deleted successfully";
	    header("location:viewteacher.php");
	} else {
	    echo "Error deleting record: " . mysqli_error($db);
	}
}
?>