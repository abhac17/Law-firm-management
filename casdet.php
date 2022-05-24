<html>
<head><title>Change</title></head>
<body>
<p>Check</p>
<?php
            $lin=mysqli_connect("localhost:5500","root","","law_firm");
            
            $i2=$_POST["two_column"];
            $i3=$_POST["three_column"];
            
            $i5=$_POST["five_column"];
            
            $i6=$_POST["six_column"];
            $id=$_POST["case_id"];
            
            if(isset($_POST["Update"]))
            {
                mysqli_query($lin,"UPDATE case_ SET status='$i2',case_notes='$i3',lawyer_id='$i5',fee='$i6' WHERE case_.case_id='$id'");
            }            
            else
            {
                mysqli_query($lin,"DELETE from case_ where case_id=$id");
            }
            $num1=mysqli_query($lin,"SELECT count(*) AS counts FROM case_ where lawyer_id='$i5'");
            $s_no1=mysqli_fetch_assoc($num1);
            $send1=$s_no1["counts"];
            mysqli_query($lin,"UPDATE employees SET no_of_cases='$send1' WHERE employees.employee_id='$i5'");
            header("Location: a_update_cases.php");
?>    
</body>
</html>
