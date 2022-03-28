<?php
require('db.php');


$id="";



if (isset($_POST['id'])) {
	echo "<div class='container'>";
	echo "<table class='table table-bordered  table-hover mt-3'>";
	echo "<tr>";
	echo "<th>Facility_Id</th>";
	echo "<th>Facility</th>";
	echo "<th>Update</th>";
	echo "<th>Delete</th>";
	echo "</tr>";
	echo "</div>";


	$id=$_POST['id'];


		$que=mysqli_query($conn,"SELECT * FROM `facility` WHERE CONCAT(`facility_id`,`facility`) LIKE '%".$id."%'");
		if(mysqli_num_rows($que) > 0){
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$row['facility_id']."</td>";
		echo "<td>".$row['facility']."</td>";
		echo "<td><a href='home.php?id=$row[facility_id]&info=update_payment'><i class='fas fa-pencil-alt'></i></a></td>";
		echo  "<td><a href='home.php?id=$row[facility_id]&info=delete_payment'><i class='fas fa-trash-alt'></i></a></td>";

	}
}else{
	echo "<div class='alert alert-warning'><b>0 result</b></div>";
}
	
}




	
?>
