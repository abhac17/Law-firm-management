<!DOCTYPE html>
<html>
    
<?php
            $user ='root';
            $pw ='';
            $db='law_firm';
            $db= mysqli_connect('localhost:5500',$user,$pw,$db) or die("Connection error");
            /*echo "check print".$_GET["userid"].$_GET["ph"];*/
            $user=$_GET["ph"];
            $id=$_GET["userid"];
            setcookie("id", $id, time() + (86400 * 30), "/") ;
            $p=$_GET["pw"];
            if($user=="admin")
            {
                if($id=="admin")
                {
                    if($p=="root")
                    {
                        header("Location: admin.php");
                    }
                }
            }
            else
            if($user=="employee")
            {
                $data= mysqli_query($db,"SELECT employee_password FROM employees WHERE employee_id = '$id'") or die("Failed".mysql_error());
                while($i= mysqli_fetch_assoc($data))
                {
                    if($i["employee_password"]==$p)
                    {
                        header("Location: emp.php");
                    }
                    else
                    {
                        echo "incorrect password";
                    }
                    echo " Password:".$i["employee_password"];
                }

            }
            
            else
            {
                $data= mysqli_query($db,"SELECT client_password FROM clients WHERE client_id = '$id'") or die("Failed".mysql_error());
                while($i= mysqli_fetch_assoc($data))
                {
                    if($i["client_password"]==$p)
                    {
                        header("Location: client.php");
                    }
                    else
                    {
                        echo "incorrect password";
                    }
                    echo " Password:".$i["client_password"];
                }
            }
        ?>
</html>