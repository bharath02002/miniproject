


<div class="container">
	<form class="form-group mt-3" method="post" action="home.php?info=payment_search">
		<h3 class="lead">SEARCH FACILITY AREA</h3>
		<input type="text" name="id" class="form-control" placeholder="ENTER FACILITY AREA ID">
	</form>


	<div class="container">
		<table class="table table-bordered table-hover">
			<tr>
				<th>FACILITY_ID</th>
				<th>FACILITY</th>

			</tr>
			<?php
           require('db.php');


$all="SELECT * FROM facility";
$all_query=mysqli_query($conn,$all);
if (mysqli_num_rows($all_query) > 0) {
    while($row = mysqli_fetch_assoc($all_query)) {
       echo "<tr>";
			echo "<td>".$row['facility_id']."</td>";
		echo "<td>".$row['facility']."</td>";
		echo "</tr><br>";
    }
} else {
    echo "0 results";
}



?>
			
		</table>
	</div>
</div>
	