<?php 
   if(isset($_POST["respond"]))
  {
      session_start();
      $id_button =  $_POST['input2'];
      $_SESSION['id_button_pressed'] = $id_button;
      echo "<script>window.location.href = 'doctor_responding.php';</script>;";
  }
?>
<style type="text/css">
.output{
  margin-top: 30px;
  font-size: 32px;
  margin-left : 40%;
  font-family: Comic Sans MS, Comic Sans, cursive;
}
.output1{
  margin-top: 30px;
  font-size: 25px;
  margin-left : 10%;
  font-family: Comic Sans MS, Comic Sans, cursive;
}
.brd1
{
  border: 0px;
  background: white;
  font-family:Comic Sans MS, Comic Sans, cursive;
  font-size: 20px;
  margin:auto;
  margin-left: 300px; 
  margin-top: 60px;
  width: 80%; 
}
.but{
  margin-top: 60px;
  width: 50%;
  margin-left: 25%;
  margin-right: 25%;
}
.but1{
  margin-left: 35%;
  margin-right: 25%;
  width: 25%;
}
</style>
<?php
include 'head2.php';
error_reporting(0);
  $con_doc_search = mysqli_connect("localhost","root","","pdc");
  mysqli_select_db($con_doc_search,"pdc");
  $selection="select * from wait where flag = '0'";
  $exe_doc_search=mysqli_query($con_doc_search,$selection);
  $total_rows_search = mysqli_num_rows($exe_doc_search);
  if($total_rows_search == 0)
    {
        ?>
      <div class='output'> No New Notifications. </div>
      <?php
    }
  else
  {
    $symp_array_new = array();
    $patient_array_is = array();
    while ($rowing=mysqli_fetch_array($exe_doc_search)) 
      {
      $symptoms_are=$rowing[2];
      array_push($symp_array_new, $symptoms_are);
      $patient_id = $rowing[1];
      array_push($patient_array_is, $patient_id);
     }
     $array_length = count($symp_array_new);
    for ($i=0; $i < $array_length ; $i++) 
    {
      $button_id = $i;
      $toPrint = "Patient with patient_id as '<b>".$patient_array_is[$i]."</b>' Has the following Symptoms : ";
      $test = $symp_array_new[$i];
      $test1 = explode (",",$test);
      $test2 = array();
      foreach ($test1 as $key_var) {
          array_push($test2, $key_var);
        }  
      $new_len = count($test2);
      for ($j=1; $j < $new_len ; $j++) {
        if ($j == $new_len-1){
          $toPrint = $toPrint.$test2[$j].".";
          }
          else
          {
            $toPrint = $toPrint.$test2[$j]." , ";
          }
        }
        ?>
        <form method="POST">
          <div class='output1 '><?php echo $toPrint; ?></div>
          </div>
          <?php 
          echo "<button class='but1' name='respond' id='$button_id'>Respond</button>"; 
          echo "<input type='hidden' value='$button_id' name='input2'/>";        
          ?>
        </form>    
        </div>
        <?php
    }
  }
?>
</div>