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
            $id=$_POST["emp_id"];
            
            if(isset($_POST["Update"]))
            {
                
                mysqli_query($lin1,"UPDATE employees SET first_name='$i1',last_name='$i2',employee_password='$i3',salary='$i5',door_no='$i6',street_name='$i7',contact='$i8' WHERE employees.employee_id='$id' ");
            }            
            else
            {
                mysqli_query($lin1,"DELETE from employees where employee_id=$id");
            }
            header("Location: a_update_emp.php");
?>    
</body>
</html>
