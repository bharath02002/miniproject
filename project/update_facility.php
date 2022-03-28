<?php
require('db.php');




if (isset($_REQUEST['payment'])) {

  $pay_id = mysqli_real_escape_string($conn, $_REQUEST['id']);
  $amount = mysqli_real_escape_string($conn, $_REQUEST['amount']);

  $update_query="update facility set facility_id='$pay_id',facility='$amount' where facility_id='".$_GET['id']."'";
  $update_sql=mysqli_query($conn,$update_query);
  $err="<div class='alert alert-success'><b>Facility Area Details updated</b></div>";
}
$con=mysqli_query($conn,"select * from facility where facility_id='".$_GET['id']."'");

$res=mysqli_fetch_assoc($con);  



?>


<div class="container">
	<form class="mt-3 form-group" method="post" action="">
		<h3>UPDATE FACILITY AREA</h3>
		 <?php 
    echo @$err;

    ?>
		<label class="mt-3">FACILITY AREA ID</label>
		<input type="text" name="id" value="<?php echo @$res['facility_id'];?>" class="form-control">
		<label class="mt-3">FACILITY</label>
		<input type="text" name="amount" value="<?php echo @$res['amount'];?>" class="form-control">
		<button class="btn btn-dark mt-3" type="submit" name="payment">UPDATE</button>
	</form>
</div>