<?php
include("../connect.php");



if (isset($_GET['id'])){
	$id = $_GET['id'];
	$retrive = "DELETE FROM admin_notice WHERE notice_id = $id";

	if (mysqli_query($db, $retrive)) {
	    echo "Record deleted successfully";
	    header("location:studentdashboard.php");
	} else {
	    echo "Error deleting record: " . mysqli_error($db);
	}
}
?>