<?php
error_reporting(0);
$connection = mysqli_connect("localhost","root","","pdc");
mysqli_select_db($connection,"pdc");
session_start();
include('session.php');
$sel="select * from patient where p_username='".$_SESSION['udid']."'";
$exe=mysqli_query($connection,$sel);
$fetch=mysqli_fetch_array($exe);
$name=$fetch[1];
$mobno=$fetch[7];
$email=$fetch[8];
$adr=$fetch[5];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PaDCo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script sr="js/bootstrap.min.js"></script>
  <style>
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    width: 100%;
}
.glyphicon{
  color: white;
  font-size: 30px;
}
.new
{
  margin-left: 50%;
  margin-bottom: 8px;
}
.footer
{
   background-color:blue;
    opacity: 0.7;
    height: 80px;
    color: white;
    text-align: center;
    font-family:Comic Sans MS, Comic Sans, cursive;
    font-size: 30px;
    padding-top: 20px;
  }
.temp
{
  height: 50px;
  border-left: blue 5px solid;
  border-bottom: blue 5px solid;
  border-right: blue 5px solid;
  text-align: center;
  font-size: 30px;
  font-family:Comic Sans MS, Comic Sans, cursive;
}
.brd
{
  border: 0px;
  background: white;
  font-family:Comic Sans MS, Comic Sans, cursive;
}
.modal-content2{
    background-color: #fefefe;
    margin:auto; /* 5% from the top, 15% from the bottom and centered */
    margin-top: 10px;
    width: 50%; /* Could be more or less, depending on screen size */
    height : 80%;
}
</style>
</head>
<body>
	<?php include 'head.php'; ?>
<div class="row">
<div class="col-md-4">
<div class="temp">
<a href="patient.php">Disease Checker</a>
</div>
</div>
<div class="col-md-4">
<div class="temp">
<a href="previous.php ">Previous</a>
</div>
</div>
<div class="col-md-4">
<div class="temp">
<a href="chat.php ">Chat</a>
</div>
</div>
</div>
<br>
<form class="modal-content2 model2 brd" method="POST" >
    <div class="row">
      <div class="col-md-12">
      <h1 class="aa">My Profile</h1>
    </div>
    <div class="row">
      <div class="col-md-6">
      <label><b ><h2 style="padding-left: 100px">Patient Name:</h2></b></label>
    </div>
    <div class="col-md-6">
	<h2><?php echo $name; ?></h2>
    </div>
    </div>
    <div class="row">
      <div class="col-md-6">
      <label><b ><h2 style="padding-left: 100px">Phone:</h2></b></label>
    </div>
    <div class="col-md-6">
    <h2><?php echo $mobno; ?></h2>
    </div>
    </div>
     <div class="row">
      <div class="col-md-6">
      <label><b ><h2 style="padding-left: 100px">Email:</h2></b></label>
    </div>
    <div class="col-md-6">
    <h2><?php echo $email; ?></h2>
    </div>
    </div>
     <div class="row">
      <div class="col-md-6">
      <label><b ><h2 style="padding-left: 100px">Address:</h2></b></label>
    </div>
    <div class="col-md-6">
    <h2><?php echo $adr; ?></h2>
    </div>
    </div>
  </form>
</div>
<br>
<br>
<br>
<br>
<div class="footer">
    © 2017 PatientDoctorConnect Pvt. Ltd. All rights reserved
</div>
</body>
</html>