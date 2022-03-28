<?php
require('db.php');


$name="";



if (isset($_POST['name'])) {
	echo "<div class='container'>";
	echo "<table class='table table-bordered  table-hover mt-3'>";
	echo "<tr>";
	echo "<th>Athlete_Id</th>";
	echo "<th>Name</th>";
	echo "<th>DOB</th>";
	echo "<th>Age</th>";
	echo "<th>facility</th>";
	echo "<th>Mobile No</th>";
	echo "<th>Update</th>";
	echo "<th>Delete</th>";
	echo "</tr>";
	echo "</div>";


	$name=$_POST['name'];


		$que=mysqli_query($conn,"SELECT * FROM `athlete` WHERE CONCAT(`athlete_id`,`name`,`dob`,`age`,`facilityname`,'mobileno') LIKE '%".$name."%'");
		if(mysqli_num_rows($que) > 0){
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$row['athlete_id']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['dob']."</td>";
		echo "<td>".$row['age']."</td>";
		echo "<td>".$row['facilityname']."</td>";
		echo "<td>".$row['mobileno']."</td>";
		echo "<td><a href='home.php?id=$row[athlete_id]&info=update_member'><i class='fas fa-pencil-alt'></i></a></td>";
		echo  "<td><a href='home.php?id=$row[athlete_id]&info=delete_member'><i class='fas fa-trash-alt'></i></a></td>";

	}
}else{
	echo "<div class='alert alert-warning'><b>0 result</b></div>";
}
	
}




	
?>
