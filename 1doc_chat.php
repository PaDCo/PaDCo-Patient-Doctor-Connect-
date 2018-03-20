<?php
	include('session.php');
?>
<!DOCTYPE html>
<script>
  function testfunc1(clickedID1) {
	
	var id_but1 = clickedID1;
  localStorage.setItem("pat_name", document.getElementById(id_but1).value);
  var test = "1doc_chatbox.php";
	document.location.href = test;
 }
</script>
<?php 
include 'db.php';
error_reporting(0);
?>
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
.but1{
  margin-left: 35%;
  margin-right: 35%;
  margin-bottom : 30px;
  margin-top: 20px;
  width: 30%;
  background-color: #2E61CD;
  color: white;
  padding: 10px;
}
</style>
</head>
<body>
  <div class="container-fluid ">
    <div class="row">
      <div class="col-sm-7">
        <h1 class="header1">PatientDoctorConnect</h1>
      </div>
      <div class="col-sm-5">
        <h3 class="header3">Care today, Just a CLICK away...</h3>
      </div>
    </div>
  </div>
<div class="container-fluid hello" id="navbar">
<div class="row ">

    <div class="new">      
      <a href="doctor.php"><h3 class="glyphicon glyphicon-home"></h3></a>
    </div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="temp">
<a href="doc_noti.php">Respond to Querries</a>
</div>
</div>
<div class="col-md-6">
<div class="temp">
<a href="1doc_chat.php ">Chat</a>
</div>
</div>
</div>
<br>
<?php 
session_start();
$_SESSION['flag'] = 0;
$_SESSION['doc_flag'] = 0;
$d_id = $_SESSION['udid1'];
  include "db.php"; 
  error_reporting(0);
  $con_doc_search = mysqli_connect("localhost","root","","pdc");
  mysqli_select_db($con_doc_search,"pdc");
  $selection="select distinct p_username from doc_resp where d_username='".$d_id."'";
  $exe_doc_search=mysqli_query($con_doc_search,$selection);
  $total_rows_search = mysqli_num_rows($exe_doc_search);
  if($total_rows_search == 0)
    {
        ?>
      <div class='output'> Cannot Chat. You did not Respond Yet. </div>
      <?php
    }
  else
  {
    $doca_id = array();
    while ($rowing=mysqli_fetch_array($exe_doc_search)) 
      {
      $doca=$rowing[0];
      array_push($doca_id, $doca);
     }
     $array_length = count($doca_id);
    for ($i=0; $i < $array_length ; $i++) 
    {
      $button_id = $i;
      $button_value = $doca_id[$i];
        ?>
        
        <form method="POST">
          </div>
          <?php 
          echo "<input type='button' class='but1' name='respond' id='$button_id' value='$button_value' onclick='testfunc1(this.id)'>"; 
          echo "<input type='hidden' value='$button_value' id='$button_id'/>"; 
          ?>
        </form>
        </div>
        <?php
      }
  }
?>
</div>
    <div class="footer">
    © 2017 PatientDoctorConnect Pvt. Ltd. All rights reserved
</div>
</body>
</html>