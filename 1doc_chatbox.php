<?php
include 'head2.php';
session_start();
$doc_flg = $_SESSION['doc_flag'];
?>
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

</style>
<style>
  #container{
  width:50%;
  margin:0 auto;
  margin-top: 30px;
  background: white;
  padding:20px;
}
#chat_box{
  width: 90%;
  height: 400px;
}
#chat_data{
  font-weight: bold;
  border-bottom: 1px solid silver;
}
textarea{
  box-sizing: border-box;
  width: 100%;
}
input[type='submit']{
  width: 100%;
}
</style>
<!DOCTYPE html>
<?php include "db.php"; ?>
<html>
<head>
  <title>Chat Bot</title>
  <link rel="stylesheet" href="style.css" media="all">
  <script>
    function ajax1(){
      var req = new XMLHttpRequest();
      req.onreadystatechange = function(){
        if(req.readyState == 4 && req.status == 200){
          document.getElementById('chat').innerHTML = req.responseText;
        }
      }
      req.open('GET','1doc_chat1.php',true);
      req.send();
    }
    setInterval(function(){ajax1()},1000);
  </script>
</head>
<body onload="ajax1();">
<div class="row">
<div class="col-md-6">
<div class="temp">
<a href="doctor.php">Respond to Querries</a>
</div>
</div>
<div class="col-md-6">
<div class="temp">
<a href="1doc_chat.php ">Chat</a>
</div>
</div>
</div>
    <div id="container">
      <div id="chat_box">
        <div id="chat" style="overflow-x: hidden; overflow-y: visible; height: 95%; width: 112%">
        </div>
      </div>
      <?php echo "<form method='POST'>"?>
        <textarea name="msg" placeholder="Enter your Message" rows="2" cols="50"></textarea>
        <input type="submit" name="submit" value="Send">
        <input type="hidden" value="<?php echo $docname1;?>" name="test">
      </form>
      <form method="POST">
      	 <input type="hidden" id="mydoc" name="docsname1" value="">
      	 <input type="submit" name="but_test1" id='but_test_id1' style="display: none;">
      </form>
      <?php
      	echo "<script type='text/javascript'>
          var patt = localStorage['pat_name'];
          document.getElementById('mydoc').value = patt;</script>";
           if($doc_flg == 0)
      		{		
       			echo "<script>document.getElementById('but_test_id1').click();</script>";
	   			}
		?>
      <?php
      if(isset($_POST['but_test1'])){
          $reciever = $_POST['docsname1'];
          $name = $_SESSION['udid1'];
          $_SESSION['pat'] = $reciever;
          $_SESSION['doc_flag'] = $_SESSION['doc_flag'] + 1 ;
        }
        if(isset($_POST['submit'])){      
          $name = $_SESSION['udid1'];
          $recie =  $_SESSION['pat'];
          $message = $_POST['msg'];
          $docname1 = $_POST['test'];
          $insert = "insert into chat (sender, reciever, message) values ('$name','$recie' ,'$message')";
          $run = $con->query($insert);
        }
      ?>
    </div>
</body>
</script>
</html>