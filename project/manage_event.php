
<div class="container">
	<form class="form-group mt-3" method="post" action="home.php?info=gym_search">
		<h3 class="lead">SEARCH EVENT</h3>
		<input type="text" name="name" class="form-control" placeholder="ENTER EVENT NAME OR EVENT ID">
	</form>

	<div class="container">
		<table class="table table-bordered table-hover">
			<tr>
				<th>EVENT_ID</th>
				<th>EVENT NAME</th>
				<th>NATION</th>
				<th>TYPE</th>
			</tr>
			<?php
           require('db.php');


$all="SELECT * FROM event";
$all_query=mysqli_query($conn,$all);
if (mysqli_num_rows($all_query) > 0) {
    while($row = mysqli_fetch_assoc($all_query)) {
       echo "<tr>";
			echo "<td>".$row['event_id']."</td>";
		echo "<td>".$row['event_name']."</td>";
		echo "<td>".$row['nation']."</td>";
		echo "<td>".$row['type']."</td>";
		echo "</tr><br>";
    }
} else {
    echo "0 results";
}



?>
			
		</table>
	</div>
</div>
