<?php echo "<form method='POST'>"?>
        <input type="hidden" id="mynumber" name="docsname" value="">
        <input type="submit" name="submit" id="clickButton" value="Send" style="display: none;">
    </form>
<script type="text/javascript">
          var number = localStorage["doc_name"];
          document.getElementById("mynumber").value = number;
           var button = document.getElementById('clickButton');
           button.form.submit();
</script>


<?php 
  include "db.php";
  session_start();
  $from_name = $_SESSION['udid'];
  $to_name = $_SESSION['doc'];
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