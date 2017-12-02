<?php
  include('head.php');
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Doctor</title>
</head>
<body>
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
</body>
</html>