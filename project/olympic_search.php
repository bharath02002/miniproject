<?php
require('db.php');


$name="";



if (isset($_POST['name'])) {
	echo "<div class='container'>";
	echo "<table class='table table-bordered  table-hover mt-3'>";
	echo "<tr>";
	echo "<th>Event_Id</th>";
	echo "<th>Name</th>";
	echo "<th>Nation</th>";
	echo "<th>Type</th>";
	echo "<th>Update</th>";
	echo "<th>Delete</th>";
	echo "</tr>";
	echo "</div>";


	$name=$_POST['name'];


		$que=mysqli_query($conn,"SELECT * FROM `event` WHERE CONCAT(`event_id`,`event_name`,`nation`,`nation`,`type`) LIKE '%".$name."%'");
		if(mysqli_num_rows($que) > 0){
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$row['event_id']."</td>";
		echo "<td>".$row['event_name']."</td>";
		echo "<td>".$row['nation']."</td>";
		echo "<td>".$row['type']."</td>";
		echo "<td><a href='home.php?id=$row[event_id]&info=update_gym'><i class='fas fa-pencil-alt'></i></a></td>";
		echo  "<td><a href='home.php?id=$row[event_id]&info=delete_gym'><i class='fas fa-trash-alt'></i></a></td>";
		echo "</tr>";

	}
}else{
	echo "<div class='alert alert-warning'><b>0 result</b></div>";
}
	
}




	
?>
