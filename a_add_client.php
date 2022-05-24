<html>
    <head>
        <title>
            Add
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .layer 
            {
                background-image: linear-gradient(to right,rgba(255, 255, 255, 0.377),rgba(255, 255, 255, 0));
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 120%;
            }
            #bg 
            {
                background-image: url('images/bg.jpg');
                font-family: Helvetica, sans-serif;
                background-attachment: fixed;
            }
            table, td, th 
            {  
                border: 1px solid rgb(221, 221, 221);                
                text-align: center;
            }

            table 
            {
                border-collapse: collapse;  
                margin-top: 50px;  
            }
            tr:nth-child(even)
            {
                background-color: #f2f2f2;
            }
            tr:nth-child(odd)
            {
                background-color: #ffffff;
            }
            th, td 
            {
                padding: 20px;
            }
            th
            {
                background-color: #414141;
                color: white;
            }

            input[type=checkbox]
            {
                size: 10px;
            }
            .container 
            { 
                height: 60px;
                position: relative;
            }
            .center 
            {
                margin: 0;
                position: absolute;
                top: 50%;
                left: 50%;
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
            }
            .button
            {
                border: none;
                color: white;
                padding: 16px 32px;
                text-align: center;
                display: inline-block;
                font-size: 16px;
                transition-duration: 0.4s;
                cursor: pointer;
            }
            .buttonEffect 
            {
                background-color: #555555;
                color: rgb(255, 255, 255);
                border: none;
            }
            .buttonEffect:hover 
            {
                background-color: transparent;
                color: rgb(0, 0, 0);
            }
            .tabContent
            {
                display: block;
                border-top: none;                
                animation: fade 1s;                
                
            }
            @keyframes fade 
            {
                from {opacity: 0;}
                to {opacity: 1;}
            }
            #HomeButton
            {
                background-color: #d4d4d4;
                margin-left: 50px;
                margin-top: 20px;
                color: rgb(0, 0, 0);
            }
            #HomeButton:hover
            {
                background-color: transparent;
                margin-left: 50px;
                margin-top: 20px;
                color: white;
            }
        </style>
    </head>
    <body id="bg">
        <div class="layer"> 
            <button onclick="location.href='admin.php'" id="HomeButton" class="button buttonEffect" >Home</button>
            <div id="table" class="tabContent">
                <table align="center">
                    <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Door number</th>
                        <th>Street</th>
                        <th>Contact</th>
                    </tr>
                    <?php
                        $conn = mysqli_connect("localhost:5500", "root", "", "law_firm");
                        $ex = mysqli_query($conn,"SELECT * FROM client_request");
                        while($row = mysqli_fetch_assoc($ex))
                        {
                            echo "<tr><td>" . $row["client_id"]. "</td><td>" . $row["first_name"]. "</td><td>" . $row["last_name"]. "</td><td>" . $row["door_no"] . "</td><td>". $row["street_name"]. "</td><td>" . $row["contact"]. "</td></tr>";
                        }
                        if(isset($_POST["but"]))
                        {
                            $a=$_POST["client_id"];
                            $ex2=mysqli_query($conn,"SELECT * from client_request where client_id='$a'");
                            $num=mysqli_query($conn,"SELECT MAX(client_id) AS counts FROM clients");
                            $s_no=mysqli_fetch_assoc($num);
                            $send=$s_no["counts"]+1;
                            $j= mysqli_fetch_assoc($ex2);                           
                            $fn1=$j["first_name"];
                            $ln=$j["last_name"];
                            $ad1=$j["door_no"];
                            $ad2=$j["street_name"];
                            $pn=$j["contact"];
                            $pw=$j["client_request_password"];
                            $since=strval(date("Y-m-d"));
                            echo $since;
                            if(mysqli_query($conn,"insert into clients values('$send','$fn1','$ln','$ad1','$ad2','$pn','$pw','$since')"))
                            {
                                mysqli_query($conn,"DELETE from client_request where client_id=$a");
                            }
                            
                        }
                    ?>
                </table>              
            </div>
            <form action ="a_add_client.php" method="post" id="ip_id" name="ip_id" align="center" style="margin-top: 80px;" >
                <label for="id_input">Enter the s_no:</label>
                <input type="text" name="client_id" id="client_id"><br /><br />
                <div class="container">
                    <div class="center">
                        <button type="submit" id="center" class="button buttonEffect" name="but" onclick="openTab(event,'table')">Add</button>
                    </div>
                </div>                    
            </form>  
        </div>               
    </body>
    <script>
        function openTab(evt, tabName) 
        {
            var input = document.forms["ip_id"]["client_id"].value;
            if( input != "")
            {
                
            }
            else
            {
                alert("Please enter the id");
            }            
        }
        
    </script>
</html>