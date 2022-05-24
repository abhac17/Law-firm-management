<!DOCTYPE html>
<html>
    <head><title>Thank you!</title></head>
<div style="text-align:center;">
    <h1>Thank you!</h1>
    <p>Your submission has been received.</p>
    <p><span id="timer"></span></p>
</div>
<script type="text/javascript">
    var count = 5;
    var redirect = "index.php";
    function countDown(){
        var timer = document.getElementById("timer");
        if(count > 0){
            count--;
            timer.innerHTML = "This page will redirect in "+count+" seconds.";
            setTimeout("countDown()", 1000);
            }else{
            window.location.href = redirect;
        }
    }
    countDown();
</script>
</html>
<?php
  $user ='root';
  $pw ='';
  $db='law_firm';
  $db= mysqli_connect('localhost:5500',$user,$pw,$db) or die("Connection error");
  $fn=$_GET["first_name"];
  $ln=$_GET["last_name"];
  $ad1=$_GET["add_l1"];
  $ad2=$_GET["add_l2"];
  $pn=$_GET["ph"];
  $pw=$_GET["pw"];
  $num=mysqli_query($db,"SELECT MAX(client_id) AS counts FROM client_request");
  $s_no=mysqli_fetch_assoc($num);
  $send=$s_no["counts"]+1;
  echo $send;
  $query=mysqli_query($db,"insert into client_request values('$send','$fn','$ln','$pw','$ad2','$ad1','$pn')");  
?>
