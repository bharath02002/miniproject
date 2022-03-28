

<div class="container">
	<form class="form-group mt-3" method="post" action="home.php?info=member_search">
		<h3 class="lead">SEARCH ATHLETE</h3>
		<input type="text" name="name" class="form-control" placeholder="ENTER ATHLETE NAME">
	</form>

	<div class="container">
		<table class="table table-bordered table-hover">
			<tr>
				<th>ATHLETE_ID</th>
				<th>ATHLETE NAME</th>
				<th>DOB</th>
				<th>AGE</th>
				<th>FACILITY</th>
				<th>MOBILE NO</th>

			</tr>
			<?php
           require('db.php');


$all="SELECT * FROM athlete";
$all_query=mysqli_query($conn,$all);
if (mysqli_num_rows($all_query) > 0) {
    while($row = mysqli_fetch_assoc($all_query)) {
       echo "<tr>";
			echo "<td>".$row['athlete_id']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['dob']."</td>";
		echo "<td>".$row['age']."</td>";
		echo "<td>".$row['facilityname']."</td>";
		echo "<td>".$row['mobileno']."</td>";
		echo "</tr><br>";
    }
} else {
    echo "0 results";
}



?>
			
		</table>
	</div>
</div>
