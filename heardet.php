<html>
<head><title>Change</title></head>
<body>
<p>Check</p>
<?php
            $lin=mysqli_connect("localhost:5500","root","","law_firm");
            
            
            $i3=$_POST["three_column"];
            
            
           
            
            $id=$_POST["hid"];
            
            if(isset($_POST["Update"]))
            {
                mysqli_query($lin,"UPDATE hearing SET hearing_date='$i3' WHERE hearing.s_no='$id'");
            }            
            else
            {
                mysqli_query($lin,"DELETE from hearing where s_no=$id");
            }
            $num1=mysqli_query($lin,"SELECT case_id FROM hearing where s_no='$id'");
            $s_no1=mysqli_fetch_assoc($num1);
            $send1=$s_no1["case_id"];
            $num2=mysqli_query($lin,"SELECT count(*) AS counts FROM hearing where case_id='$send1'");
            $s_no2=mysqli_fetch_assoc($num2);
            $send2=$s_no2["counts"];
            mysqli_query($lin,"UPDATE case_ SET no_of_hearings='$send2' WHERE case_.case_id='$send1'");
            header("Location: a_update_cases.php");
?>    
</body>
</html>
