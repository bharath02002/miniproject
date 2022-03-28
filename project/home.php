<?php
include("auth.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title>olympic management system</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <link rel="stylesheet" href="style.css">
  
</head>
<body style="background:url(images/16598ab35d6fef53ede4fddce4953e9b7.jpg);">



	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		<div class="container-fluid">
  <a class="navbar-brand" href="home.php">OLYMPIC MANAGEMENT SYSTEM</a>
  <a href="logout.php" class=" nav nav-link">log out</a>
</div>
</nav>



<div class="row mt-3">
  <div class="col-2">
    <div id="accordion">
    <div class="list-group">
      <div class="list-group-item bg-dark">
        <a class="collapsed nav-link text-light" data-toggle="collapse" href="#collapseTwo">
        <i class="fas fa-user-alt"></i>EVENT</a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=add_gym" class="text-light">ADD EVENT</a>
          </div>
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=manage_gym" class="text-light">VIEW EVENT</a></div>
        </div>

      <div class="list-group-item bg-dark">
        <a class="collapsed nav-link text-light" data-toggle="collapse" href="#collapseThree">
          <i class="fas fa-user-graduate"></i>FACILITY DEPARTMENT
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="list-group-item" style="background-color: #303030;">
          <a href="home.php?info=add_payment" class="text-light">ADD FACILITY</a>
        </div>
        <div class="list-group-item" style="background-color: #303030;">
          <a href="home.php?info=manage_payment" class="text-light">VIEW FACILITY</a>
        </div>
        
      </div>
         <div class="list-group-item bg-dark">
        <a class="collapsed nav-link text-light" data-toggle="collapse" href="#collapsefive">
        <i class="fas fa-book"></i>ATHLETES</a>
      </div>
      <div id="collapsefive" class="collapse" data-parent="#accordion">
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=add_member" class="text-light">ADD ATHLETE</a></div>
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=manage_member" class="text-light">VIEW ATHLETE</a></div>
        </div>

         <div class="list-group-item bg-dark">
        <a class="collapsed nav-link text-light" data-toggle="collapse" href="#collapsesix">
        <i class="fas fa-users"></i>COACH</a>
      </div>
      <div id="collapsesix" class="collapse" data-parent="#accordion">
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=add_trainer" class="text-light">ADD COACH</a></div>
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=manage_trainer" class="text-light">VIEW COACH</a></div>
        </div>
    </div>
</div>
 
  </div>

  <div class="col-10">
   <?php

@$info=$_GET['info'];
if ($info!=="") {
             if ($info=="add_gym") {
             include('add_event.php');
                }
             else if($info=="add_payment")
             {
             include('add_facility.php');
             }
             elseif ($info=="manage_payment") {
               include ('manage_facility.php');

             }elseif ($info=="add_member") {
               include ('add_athlete.php');
             }elseif ($info=="manage_member") {
               include ('manage_athlete.php');
             }elseif ($info=="add_trainer") {
               include ('add_coach.php');
             }elseif ($info=="manage_trainer") {
               include ('manage_coach.php');
             }elseif ($info=="manage_gym") {
               include ('manage_event.php');
             }elseif ($info=="update_payment") {
               include ('update_facility.php');
             }elseif ($info=="delete_payment") {
               include ('delete_facility.php');
             }elseif ($info=="update_gym") {
               include ('update_event.php');
             }elseif ($info=="delete_gym") {
               include ('delete_event.php');
             }elseif ($info=="update_member") {
               include ('update_athlete.php');
             }elseif ($info=="delete_member") {
               include ('delete_athlete.php');
             }elseif ($info=="update_trainer") {
               include ('update_coach.php');
             }elseif ($info=="delete_trainer") {
               include ('delete_coach.php');
             }elseif ($info=="change_password") {
               include ('change_password.php');
             }elseif ($info=="gym_search") {
               include ('olympic_search.php');
             }elseif ($info=="member_search") {
               include ('athlete_search.php');
             }elseif ($info=="payment_search") {
               include ('facility_search.php');
             }elseif ($info=="trainer_search") {
               include ('coach_search.php');
             }
                      }

?>
  </div>
</div>



</body>
</html>