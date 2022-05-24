<html>
<head><title>Change</title></head>
<body>
<p>Check</p>
<?php
            $lin1=mysqli_connect("localhost:5500","root","","law_firm");
            
            $i2=$_POST["two_column"];
            $i3=$_POST["three_column"];
            
            $i5=$_POST["five_column"];
            
            $en=mysqli_query($lin1,"SELECT lawyer_id from case_ where case_id='$i2'");
            $dat=mysqli_fetch_assoc($en);
            $i4=$dat["lawyer_id"];
            $num=mysqli_query($lin1,"SELECT MAX(s_no) AS counts FROM hearing");
            $s_no=mysqli_fetch_assoc($num);
            $send=$s_no["counts"];
            $id=$send+1;
            
            mysqli_query($lin1,"INSERT INTO hearing VALUES('$id','$i2','$i3',$i4,'$i5')");
            $num1=mysqli_query($lin1,"SELECT count(*) AS counts FROM hearing where case_id='$i2'");
            $s_no1=mysqli_fetch_assoc($num1);
            $send1=$s_no1["counts"];
            mysqli_query($lin1,"UPDATE case_ SET no_of_hearings='$send1' WHERE case_.case_id='$i2'");
            header("Location: a_add_hearings.php");
?>    
</body>
</html>
