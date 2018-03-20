<?php
error_reporting(0);
session_start();
if($_SESSION['udid']=="" && $_SESSION['udid1'] == "")
{
	echo'<script>window.location="index.php"</script>';
} 
?>
