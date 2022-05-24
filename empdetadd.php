<html>
<head><title>Change</title></head>
<body>
<p>Check</p>
<?php
            $lin1=mysqli_connect("localhost:5500","root","","law_firm");
            $i1=$_POST["one_column"];
            $i2=$_POST["two_column"];
            $i3=$_POST["three_column"];
            $i5=$_POST["five_column"];
            $i6=$_POST["six_column"];
            $i7=$_POST["seven_column"];
            $i8=$_POST["eight_column"];            
            $num=mysqli_query($lin1,"SELECT MAX(employee_id) AS counts FROM employees");
            $s_no=mysqli_fetch_assoc($num);
            $send=$s_no["counts"];
            $id=$send+1;
            $since=strval(date("Y-m-d"));
            mysqli_query($lin1,"INSERT INTO employees VALUES('$id','$i1','$i2','$i3','$since','$i5','$i6','$i7','$i8',0)");
            header("Location: a_add_emp.php");
?>    
</body>
</html>
