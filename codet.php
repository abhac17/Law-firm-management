<html>
<head><title>Change</title></head>
<body>
<p>Check</p>
<?php
            $lin1=mysqli_connect("localhost:5500","root","","law_firm");
            
            $i2=$_POST["two_column"];
            $i3=$_POST["three_column"];                       
            $id=$_POST["court_id"];            
            if(isset($_POST["Update"]))
            {
                
                mysqli_query($lin1,"UPDATE courts SET cheif_judge='$i2',district='$i3' WHERE courts.c_no='$id' ");
            }            
            else
            {
                mysqli_query($lin1,"DELETE from courts where c_no=$id");
            }
            header("Location: a_update_courts.php");
?>    
</body>
</html>
