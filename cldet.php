<html>
<head><title>Change</title></head>
<body>
<p>Check</p>
<?php
            $lin=mysqli_connect("localhost:5500","root","","law_firm");
            $i1=$_POST["one_column"];
            $i2=$_POST["two_column"];
            $i3=$_POST["three_column"];
            $i4=$_POST["four_column"];
            $i5=$_POST["five_column"];
            $i6=$_POST["six_column"];
            $i7=$_POST["seven_column"];
            $id=$_POST["client_id"];
            if(isset($_POST["Update"]))
            {
                mysqli_query($lin,"UPDATE clients SET first_name='$i1',last_name='$i2',door_no='$i3',street_name='$i4',contact='$i5',client_password='$i6',since='$i7' WHERE clients.client_id='$id'");
            }            
            else
            {
                mysqli_query($lin,"DELETE from clients where client_id=$id");
            }
            header("Location: a_update_client.php");
?>    
</body>
</html>
