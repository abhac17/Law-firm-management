<html>
<head><title>Change</title></head>
<body>
<p>Check</p>
<?php
            $lin1=mysqli_connect("localhost:5500","root","","law_firm");
            
            $i2=$_POST["two_column"];
            $i3=$_POST["three_column"];
            
            $i5=$_POST["five_column"];
            $i6=$_POST["six_column"];
            $i7=$_POST["seven_column"];
            
            $num=mysqli_query($lin1,"SELECT MAX(case_id) AS counts FROM case_");
            $s_no=mysqli_fetch_assoc($num);
            $send=$s_no["counts"];
            $id=$send+1;
            
            mysqli_query($lin1,"INSERT INTO case_ VALUES('$id','$i2','$i3',0,'$i5','$i6','$i7')");
            $num1=mysqli_query($lin,"SELECT count() AS counts FROM case_ where lawyer_id='$i5'");
            $s_no1=mysqli_fetch_assoc($num1);
            $send1=$s_no1["counts"];
            mysqli_query($lin,"UPDATE employees SET no_of_cases='$send1' WHERE employees.employee_id='$i5'");
            header("Location: a_add_cases.php");
?>    
</body>
</html>
