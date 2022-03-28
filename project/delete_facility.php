<?php
require('db.php');


$inf=$_GET['id'];


$sql_member="DELETE FROM athlete WHERE coach_id=(select coach_id from coach where facility_id=(select facility_id from facility where facility_id='$inf'))";
$sql_query_mem=mysqli_query($conn,$sql_member);


if ($sql_query_mem) {
$sql_trainer="DELETE FROM coach WHERE facility_id=(select facility_id from facility where facility_id='$inf' )";
	$sql_query_trainer=mysqli_query($conn,$sql_trainer);
}else
{
	echo "Not delet";
}

	

	if ($sql_query_trainer) {


	$sql_query="DELETE FROM facility WHERE facility_id='$inf'";
	$delete=mysqli_query($conn,$sql_query);
	if ($delete) {
		header("location:home.php?info=manage_payment");
	}else{
		echo "error".mysqli_error($conn);
	}
	
	}else{
		echo "Not deleted".mysqli_error($conn);
	}



	
?>