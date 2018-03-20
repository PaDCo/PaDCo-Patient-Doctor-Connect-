<style type="text/css">
.output{
  margin-top: 10px;
  font-size: 25px;
  margin-left : 25%;
  font-family: Comic Sans MS, Comic Sans, cursive;
}
.output1{
  margin-top: 30px;
  font-size: 32px;
  margin-left : 5%;
  font-family: Comic Sans MS, Comic Sans, cursive;
}
.output2{
  margin-top: 30px;
  font-size: 25px;
  margin-left : 40%;
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
</style>
 <?php
 include 'head1.php';
 session_start();
    $con_test = mysqli_connect("localhost","root","","pdc");
    mysqli_select_db($con_test,"pdc");
    $sel_test="select * from wait where p_username = '".$_SESSION['udid']."'";
    $sel_test1="select * from doc_resp where p_username = '".$_SESSION['udid']."'";
    $exe_test=mysqli_query($con_test,$sel_test);
    $tota = mysqli_num_rows($exe_test);
    ?>
    <div class='output1'> Waiting Querries: </div>
    <?php
    if($tota == 0)
    {
        ?>
        <div class='output'> No Query Waiting. </div>
        <?php
    }
    else
    {
    $symp_array_new = array();
    $patient_array_is = array();
    while ($rowing=mysqli_fetch_array($exe_test)) 
      {
      $symptoms_are=$rowing[2];
      array_push($symp_array_new, $symptoms_are);
      $time_q = $rowing[4];
      array_push($patient_array_is, $time_q);
     }
     $array_length = count($symp_array_new); 
     for ($i=0; $i < $array_length ; $i++) 
     {
      $index = $i + 1;
      $toPrint = $index.") You posted these Symptoms : ";
      $test = $symp_array_new[$i];
      $test1 = explode (",",$test);
      $test2 = array();
      foreach ($test1 as $key_var) {
          array_push($test2, $key_var);
        }  
      $new_len = count($test2);
      for ($j=1; $j < $new_len ; $j++) {
        if ($j == $new_len-1){
          $toPrint = $toPrint.$test2[$j]." ";
          }
          else
          {
            $toPrint = $toPrint.$test2[$j]." , ";
          }
        }
        $toPrint = $toPrint."on ".$patient_array_is[$i].".";
        ?> 
        <div class="output"> <?php echo $toPrint; ?> </div>
        <?php
      }    
    }
    $exe_test = mysqli_query($con_test, $sel_test1);
    $tota1 = mysqli_num_rows($exe_test);
    ?>
    <div class='output1'> Responded Querries: </div>
    <?php
    if($tota1 == 0)
    {
        ?>
        <div class='output'> No Responded Querry. </div>
        <?php
    }
    else
    {
    $symp_array_new = array();
    $patient_array_is = array();
    $d1 = array();
    $m1 = array();
    $p1 = array();
    $doc1 = array();
    $t_r = array();
    while ($rowing=mysqli_fetch_array($exe_test)) 
      {
      $symptoms_are=$rowing[6];
      array_push($symp_array_new, $symptoms_are);
      $time_q = $rowing[8];
      array_push($patient_array_is, $time_q);
      $doc = $rowing[1];
      array_push($doc1, $doc);
      $dis = $rowing[2];
      array_push($d1, $dis);
      $med = $rowing[3];
      array_push($m1, $med);
      $pre = $rowing[4];
      array_push($p1, $pre);
      $time_res = $rowing[7];
      array_push($t_r, $time_res);
     }
     $array_length = count($symp_array_new); 
     for ($i=0; $i < $array_length ; $i++) 
     {
      $index = $i + 1;
      $toPrint = $index.") You posted these Symptoms : ";
      $test = $symp_array_new[$i];
      $test1 = explode (",",$test);
      $test2 = array();
      foreach ($test1 as $key_var) {
          array_push($test2, $key_var);
        }  
      $new_len = count($test2);
      for ($j=1; $j < $new_len ; $j++) {
        if ($j == $new_len-1){
          $toPrint = $toPrint.$test2[$j]." ";
          }
          else
          {
            $toPrint = $toPrint.$test2[$j]." , ";
          }
        }
        $toPrint = $toPrint."on ".$patient_array_is[$i].".";
        $print1 = "<b>Doctor : </b>".$doc1[$i];
        $print6 = "<b>Responded as : </b>";
        $print2 = "<b>Disease : </b>".$d1[$i];
        $print3 = "<b>Medications : </b>".$m1[$i];
        $print4 = "<b>Precautions : </b>".$p1[$i];
        $print5 = "<b>on </b>".$t_r[$i];
        ?>
        <div class="output"> <?php echo $toPrint; ?> </div>
        <div class="output2"> <?php echo $print1; ?> </div>
        <div class="output2"> <?php echo $print2; ?> </div>
        <div class="output2"> <?php echo $print3; ?> </div>
        <div class="output2"> <?php echo $print4; ?> </div>
        <div class="output2"> <?php echo $print5; ?> </div>
        <?php
      }
    }
  ?>