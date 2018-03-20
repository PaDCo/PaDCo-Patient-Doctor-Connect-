<?php echo "<form method='POST'>"?>
        <input type="hidden" id="mynumber1" name="docsname1" value="">
        <input type="submit" name="submit" id="clickButton1" value="Send" style="display: none;">
    </form>
    <script type="text/javascript">
			var number1 = localStorage.getItem['pat_name'];
            document.getElementById('mynumber1').value = number1;
            var button1 = document.getElementById('clickButton1');
            document.getElementById('clickButton1').click();
    </script>
    <?php
  include "db.php";
  session_start();
  $from_name = $_SESSION['udid1'];
  $to_name = $_SESSION['pat'];
  $query = "Select * FROM chat where (sender='".$from_name."' and reciever='".$to_name."') OR (sender='".$to_name."' and reciever='".$from_name."') order by id Desc";
  //$query = "Select * from chat order by id desc";
  $run = $con->query($query);
  while($row = $run->fetch_array()) :
?>
<div id="chat_data">
	<?php 
		if($row['sender'] == $from_name)
		{
			?>
			<span style='color:red'><?php echo $row['sender'] ?></span> : 
			<span style="color:green"><?php echo $row['message']; ?></span>
			<?php 
		}
		else
		{
			?>
			<span style='color:blue'><?php echo $row['sender'] ?></span> : 
			<span style="color:green"><?php echo $row['message']; ?></span>
			<?php 
		}
  	?>
  
</div>
<script type="text/javascript">
    var test = document.getElementById("chat");
    test.scrollTop = test.scrollHeight;
</script>
<?php 
  endwhile;
?>