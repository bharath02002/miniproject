<?php
require('db.php');


$inf=$_GET['id'];


$sql_mem="DELETE FROM athlete WHERE coach_id=(select coach_id from coach where coach_id='$inf')";
$sql_query_mem=mysqli_query($conn,$sql_mem);
if ($sql_query_mem) {


	$sql_query="DELETE FROM coach WHERE coach_id='$inf'";
	$delete=mysqli_query($conn,$sql_query);
	if ($delete) {
		header("location:home.php?info=manage_trainer");
	}else{
		echo "error".mysqli_error($conn);
	}
	
	
}else{
	echo "Not deleted";
}
	
	

?>