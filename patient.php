<?php
  error_reporting(0);
  include('head1.php');
  include('session.php');
?>
<style>
  .beemari{
    width: 800px;
    font-size: 25px;
    margin-left: 38%;
    margin-right: 25%;
  }
.txt_area{
    width: 800px;
    height: 230px;
    margin-left: 28%;
    margin-right: 25%;
    margin-top: 20px;
    font-size: 25px;
    font-family:Comic Sans MS, Comic Sans, cursive;
  }
.sub_but{
    width: 803px;
    height: 100px;
    margin-left: 28%;
    margin-right: 25%;
}
.text_only{
  margin-top: 40px;
  margin-bottom: 40px;
  margin-left: 39%;
  margin-right: 25%;
  font-size: 50px;
  font-family: monospace, courier new;
}
.non_heading{
  margin-left: 32%;
  margin-right : 20%;
  font-size: 25px;
  font-family: cursive;
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
.intro
{
  text-align : left;
  font-size : 20px;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Patients</title>
</head>
<body>
  <div class="intro"> <b>Welcome <?php session_start(); echo $_SESSION['udid'];  ?></b></div>
  <?php
    $con_test = mysqli_connect("localhost","root","","pdc");
    mysqli_select_db($con_test,"pdc");
    ?>
  <div class='text_only' id="test">Disease Finder</div>
  <div class='non_heading' id="test">Please Enter your Symptoms in the Text Area below. After entering the symptoms the system for now takes a 10 second window waiting for a doctor's responce to the querry. If no doctor responds then the AI would respond to the querry as it happens.</div>
    <div class="txt_area" id="test">
      <form method="post">
      <textarea rows='6' cols='60' name="txtarea" id="ta01"></textarea>
    </div>
    <div class="sub_but" id="test">
      <button name="check" id="b01">Check For Symptoms</button>
      </form>
    </div>
<?php
  if(isset($_POST['check']))
  {
    include('symptom.php');
  }
?>
<script>
    if(document.getElementById("ta01").value != NULL)
    {
        document.getElementById("b01").disabled = false;
    }
    else
    {
        document.getElementById("b01").disabled = true;
    }
</script>
<br>
<br>
<br>
<div class="col-md-12 footer">
    © 2017 PatientDoctorConnect Pvt. Ltd. All rights reserved
</div>
</body>
</html>