<?php
	session_start();
	$id_button = $_SESSION['id_button_pressed'];
	$con_pat = mysqli_connect("localhost","root","","pdc");
 	mysqli_select_db($con_pat,"pdc");
  	$test_query = "Select * from wait LIMIT ".$id_button.",1;";
   	$exe_doc=mysqli_query($con_pat,$test_query);
  	$fetch_wait=mysqli_fetch_array($exe_doc);
  	$p_usr = $fetch_wait[1];
  	$p_symp = $fetch_wait[2];
  	$p_symp = ltrim($p_symp, ',');
  	$time_q = $fetch_wait[4];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Respond</title>
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-1.9.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-1.9.1.min.js"></script>
  <script sr="js/bootstrap.min.js"></script>
  <style type="text/css">
  	.just_test{
  		float: left;
  	}
  </style>
</head>
<body>
<div id="id_test" class="modal11110">
  <div onclick="hide_function()" class="close" title="Close Modal">X</div>
  <form class="modal-content model1" method="POST" >
    <div class="row">
      <div class="col-md-12">
      <h1 class="aa">Consultancy</h1>
    </div>
      <div class="col-md-12">
      <label><b>Patient's Username :</b></label>
    </div>
    <div class="col-md-12">
      <input type="text" class="form-control" placeholder="Patient's Username" name="usrname" value="<?php echo $p_usr?>" readonly>
    </div>
	<div class="col-md-12">
      <label><b>Patient Symptoms : </b></label>
    </div>
    <div class="col-md-12">
      <input type="text" class="form-control" placeholder="Patient's Symptoms" name="symp" readonly value="<?php echo $p_symp?>">
      </div>
    <div class="col-md-12">
      <label><b>Enter the Diagnosed Disease : </b></label>
    </div>
    <div class="col-md-12">
      <input type="text" class="form-control" placeholder="Enter the Disease" name="dis">
      </div>
    <div class="col-md-12">
      <label><b>Enter the Medications : </b></label>
    </div>
    <div class="col-md-12">
      <input type="text" class="form-control" placeholder="Enter the Medications" name="medi">
      </div>
      <div class="col-md-12">
      <label><b>Enter the Precautions : </b></label>
    </div>
    <div class="col-md-12">
      <input type="text" class="form-control" placeholder="Enter the Precautions" name="pre">
    </div>
      <div class="col-md-12 just_test" ><button onclick="hide_function()"">Cancel</button>
      	<button class="just_test" name="submit">Submit</button>
      </div>
    </div>
</form>
</div>
<script type='text/javascript'>
        function new_function(){
document.getElementById('id_test').style.display='block';
  function hide_function(){
   window.location.href = 'doc_noti.php';
      }
    var modal5 = document.getElementById('id_test');
  window.onclick = function(event) {
    if (event.target == modal5) {
        modal5.style.display = 'none';
         }
  }
</script>
<?php
error_reporting(0);
    if(isset($_POST["submit"]))
    {
  $dis_pat = $_POST["dis"];
  $medi_pat = $_POST["medi"];
  $pre_pat = $_POST["pre"];
  date_default_timezone_set('Asia/Kolkata');
  $d = date("y/m/d H:i:s");
  $sel_pat="insert into doc_resp set d_username = '".$_SESSION['udid1']."' , diseases = '".$dis_pat."',
  medi = '".$medi_pat."', precaution = '".$pre_pat."', p_username = '".$p_usr."' , symptoms = '".$p_symp."' , time_resp = '".$d."' , time_query = '".$time_q."'";
  $exe_doc=mysqli_query($con_pat,$sel_pat);
  if($exe_doc)
  {
    echo '<script>alert("Query Responded Sucessfully.");</script>';
    $update_doc = "update doctor set patients_treated = patients_treated + 1 where d_username = '".$_SESSION['udid1']."'";
    $exe_doc_update=mysqli_query($con_pat,$update_doc);
    $update_wait = "insert INTO responded_query (p_username,time,symptom) values ('".$p_usr."','".$time_q."',',".$p_symp."')";
    $exe_pat_update = mysqli_query($con_pat,$update_wait);
    $delete_wait = "delete from wait where p_username = '".$p_usr."' && symptom = ',".$p_symp."' && time = '".$time_q."'";
    $exe_pat_update = mysqli_query($con_pat,$delete_wait);
    echo "<script>window.location.href = 'doc_noti.php';</script>";
  }
  else
  {
    echo '<script>alert("Query Not Responded. Please try again.");</script>';
    echo "<script>window.location.href = 'doc_noti.php';</script>";
  }
    }
?>
</body>
</html>