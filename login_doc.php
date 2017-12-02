<?php
  error_reporting(0);
  $usr_doc = $_POST["uname_doc"];
  echo "$usr_doc";
  sleep(3);
  $pss_doc = $_POST["psw_doc"];
  echo
  $con_doc = mysql_connect("localhost","root","","pdc");
  mysql_select_db("pdc");
  $sel_doc="select * from doctor where d_username = '".$usr_doc."' AND password = '".$pss_doc."'";
  $exe_doc=mysql_query($sel_doc);
  echo $sel_doc;
  sleep(3);
  $total_rows_doc = mysql_num_rows($exe_doc);
  echo $total_rows_doc;
  if($total_rows_doc == 1)
  {
    echo '<script>window.location="doctor.php"</script>';
  }
  if($total_rows_doc == 0)
  {
    echo '<script>alert("Please Check your Username and Password");</script>';
  }
?>