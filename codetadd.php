<html>
<head><title>Change</title></head>
<body>
<p>Check</p>
<?php
            $lin1=mysqli_connect("localhost:5500","root","","law_firm");
            
            $i2=$_POST["two_column"];
            $i3=$_POST["three_column"];
            $num=mysqli_query($lin1,"SELECT MAX(c_no) AS counts FROM courts");
            $s_no=mysqli_fetch_assoc($num);
            $send=$s_no["counts"];
            $id=$send+1;
            mysqli_query($lin1,"INSERT INTO courts VALUES('$id','$i2','$i3')");
            header("Location: a_add_courts.php");
?>    
</body>
</html>
  