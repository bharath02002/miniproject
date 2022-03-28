<?php

require('db.php');

$errors = array(); 
if (isset($_REQUEST['gym'])) {

  $gym_id = mysqli_real_escape_string($conn, $_REQUEST['id']);
  $name = mysqli_real_escape_string($conn, $_REQUEST['name']);
  $address = mysqli_real_escape_string($conn, $_REQUEST['address']);
  $type = mysqli_real_escape_string($conn, $_REQUEST['type']);
  
  
  $user_check_query = "SELECT * FROM event WHERE event_id='$gym_id' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['event_id'] === $gym_id) {
      array_push($errors, "<div class='alert alert-warning'><b>ID already exists</b></div>");
    }
  }


  if (count($errors) == 0) {
  

    $query = "INSERT INTO event (event_id,event_name,nation,type) 
          VALUES('$gym_id','$name','$address','$type')";
    $sql=mysqli_query($conn, $query);
    if ($sql) {
    $msg="<div class='alert alert-success'><b>Event added successfully</b></div>";
    }else{
      $msg="<div class='alert alert-warning'><b>Event not added</b></div>";
    }
  }
}



?>



<div class="container">
	<form class="form-group mt-3" method="post" action="">
		<div><h3>ADD EVENT</h3></div>
		 <?php include('errors.php'); 
    echo @$msg;

    ?>
		<label class="mt-3">EVENT ID</label>
		<input type="text" name="id" class="form-control">
		<label class="mt-3">EVENT NAME</label>
		<input type="text" name="name" class="form-control">
		<label class="mt-3">NATION</label>
		<input type="text" name="address" class="form-control">
		<label class="mt-3">EVENT TYPE</label>
		<select name="type" class="form-control mt-3">
    <option value="unisex">UNISEX</option>
    <option value="women">WOMEN</option>
    <option value="men">MEN</option>  
    </select>
		<button class="btn btn-dark mt-3" type="submit" name="gym">ADD</button>
	</form>
</div>