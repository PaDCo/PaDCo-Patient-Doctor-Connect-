<?php
error_reporting(0);
$connection = mysqli_connect("localhost","root","","pdc");
mysqli_select_db($connection,"pdc");
session_start();
$sel="select * from doctor where d_username='".$_SESSION['udid1']."'";
$exe=mysqli_query($connection,$sel);
$fetch=mysqli_fetch_array($exe);
$name=$fetch[1];
$mobno=$fetch[3];
$email=$fetch[4];
$adr=$fetch[5];
?>
<style>
.noti{
  font-size: 35px;
  font-family:Comic Sans MS, Comic Sans, cursive;
  margin-top : 30px;
  margin-left : 30px;
}
.output{
  margin-top: 10px;
  font-size: 20px;
  margin-left : 30px;
  font-family: Comic Sans MS, Comic Sans, cursive;
}
.but{
  margin-top: 60px;
  width: 50%;
  margin-left: 25%;
  margin-right: 25%;
}
.new_class{
  display: none;
}
.new_label2{
   margin-top: 70px;
  font-size: 20px;
  margin-left : 30px;
  font-family: Comic Sans MS, Comic Sans, cursive;
}
.new_label{
   margin-top: 30px;
  font-size: 20px;
  margin-left : 30px;
  font-family: Comic Sans MS, Comic Sans, cursive;
}
.new_label1{
  margin-left: 30px;
  width: 50%;
}
.welcome{
  text-align : left;
  font-size : 20px;
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
  background: white;
  font-family:Comic Sans MS, Comic Sans, cursive;
}
.modal-content2{
    background-color: #fefefe;
    margin:auto; /* 5% from the top, 15% from the bottom and centered */
    margin-top: 10px;
    width: 50%; /* Could be more or less, depending on screen size */
    height : 47%;
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
</style>
<?php
session_start();
  include('head.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Doctor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script sr="js/bootstrap.min.js"></script>
</head>
<body>
<div class="row">
<div class="col-md-6">
<div class="temp">
<a href="doc_noti.php">Respond to Queries</a>
</div>
</div>
<div class="col-md-6">
<div class="temp">
<a href='1doc_chat.php'>Chat</a>
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
      <label><b><h2 style="padding-left: 100px">Doctor Name:</h2></b></label>
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