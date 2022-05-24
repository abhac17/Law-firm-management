<?php

    
    $i1=$_POST["one_column"];
    
    $i3=$_POST["three_column"];
    $i4=$_POST["four_column"];
    
    
    $lin1=mysqli_connect("localhost:5500","root","","law_firm");
    $num=mysqli_query($lin1,"SELECT MAX(document_id) AS counts FROM document");
    $s_no=mysqli_fetch_assoc($num);
    $send=$s_no["counts"];
    $id=$send+1;
    mysqli_query($lin1,"INSERT INTO document VALUES('$i1','$id','$i3','$i4')");
    $location = "documents/";
    $to = $location.$id.".pdf";
    
    $flag = 1;
    $FileType = strtolower(pathinfo($to,PATHINFO_EXTENSION));
    
    
    if($FileType != "pdf") 
    {
        echo "Only PDF files are allowed.";
        $flag = 0; 
    }
    echo "<br><br>";
    if ($flag == 1) 
    {
            if (move_uploaded_file($_FILES["up"]["tmp_name"], $to)) 
            {
                echo "The file has been uploaded.";
            } 
            else 
            {
                echo "Sorry, there was an error uploading your file.";
            } 
    }
    else
    {
        echo "Failed to upload";
    }
    header("Location: a_add_document.php");
?>