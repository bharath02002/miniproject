<?php
require('db.php');


$inf=$_GET['id'];


$sql_member="DELETE FROM athlete WHERE coach_id=(select coach_id from coach where facility_id=(select facility_id from facility where event_id=(select event_id from event where event_id='$inf')))";
$sql_query_mem=mysqli_query($conn,$sql_member);

if ($sql_query_mem) {
	$sql_trainer="DELETE FROM coach where facility_id=(select facility_id from facility where event_id=(select event_id from event where event_id='$inf'))";

	$sql_query_trainer=mysqli_query($conn,$sql_trainer);
}else{
	echo "not delted";
}



if ($sql_query_trainer) {
	$sql_payment="DELETE FROM facility WHERE event_id=(select event_id from event where event_id='$inf')";
	$sql_querypayment=mysqli_query($conn,$sql_payment);
}else{
	echo "not deleted".mysqli_error($conn);
}


if ($sql_querypayment) {
	$sql_query="DELETE FROM event WHERE event_id='$inf'";
	$delete=mysqli_query($conn,$sql_query);
	if ($delete) {
		header("location:home.php?info=manage_gym");
	}else{
		echo "error".mysqli_error($conn);
	}
}else{
	echo "not delete".mysqli_error($conn);
}
	
	
	
	
?>