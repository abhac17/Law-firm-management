<!DOCTYPE html>
<html>
    <head>
        <title>
            Employee
        </title> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .ptable table,.ptable table td, .ptable table th 
            {  
                border: 1px solid rgb(221, 221, 221);                
                text-align: center;
            }

            .ptable table 
            {
                border-collapse: collapse;    
            }
            .ptable table tr:nth-child(even)
            {
                background-color: #f2f2f2;
            }
            .ptable table tr:nth-child(odd)
            {
                background-color: #ffffff;
            }
            .ptable table th, .ptable table td 
            {
                padding: 20px;
            }
            .ptable table th
            {
                background-color: #414141;
                color: white;
            }
            table
            {
                border: 1px solid black;
                background-color: aliceblue;
                padding: 20px;
                margin-top: 20px;
                width: 20%;
            }
            tr, td
            {
                padding-bottom: 20px;
                text-align: left;
            }
            .container 
            {
                overflow: hidden;
                border-top: none;
                
                padding-top: 5px;
                padding-left: 30px;
            }
            .tabContent
            {
                display: none;
                border-top: none;                
                animation: fade 1s;                
                
            }
            @keyframes fade 
            {
                from {opacity: 0;}
                to {opacity: 1;}
            }
            .button
            {
                border: none;
                color: white;
                padding: 16px 32px;
                text-align: center;
                display: inline-block;
                font-size: 16px;
                float: none;
                transition-duration: 0.4s;
                cursor: pointer;
                margin: 10px;
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
            .layer
            {
                background-image: linear-gradient(to right,rgba(255, 255, 255, 0.377),rgba(255, 255, 255, 0));
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 150%;
            }
            #bg 
            {
                background-image: url('images/bg.jpg');
                background-attachment: fixed;
                font-family: Helvetica, sans-serif;
                font-size: large;
            }
        </style>                       
    </head>
    <body id="bg">
        <div class="layer">            
            <img src="images/logo.png" alt="logo" style="padding-top: 5px; padding-left: 30px;">
                
            <div class="container" align="center">
                <button type="button" class="button buttonEffect"  onclick="openTab(event, 'details')" >Details</button>
                <button type="button" class="button buttonEffect"  onclick="openTab(event, 'client')">Clients</button>
                <button type="button" class="button buttonEffect"  onclick="openTab(event, 'hearing')">Hearings</button>
                <button type="button" class="button buttonEffect"  onclick="openTab(event, 'cases')">Cases</button>
            </div>
            
            <div id="details" class="tabContent" >
                <h4 align="center">PERSONAL INFORMATION</h4>
                <table align="center">                    
                    <?php    
                        $lin=mysqli_connect("localhost:5500","root","","law_firm");
                        $id=$_COOKIE["id"];
                        $ex = mysqli_query($lin,"SELECT * FROM employees where employee_id='$id'");
                        $ab=mysqli_fetch_assoc($ex);
                        echo "<tr><td>Employee id: </td><td>".$id."</td></tr>";
                        echo "<tr><td>First name: </td><td>".$ab["first_name"]."</td></tr>";
                        echo "<tr><td>Last name: </td><td>".$ab["last_name"]."</td></tr>";
                        echo "<tr><td>Since: </td><td>".$ab["since"]."</td></tr>";
                        echo "<tr><td>Salary: </td><td>".$ab["salary"]."</td></tr>";
                        echo "<tr><td>Door no.: </td><td>".$ab["door_no"]."</td></tr>";
                        echo "<tr><td>Street name:</td><td>".$ab["street_name"]."</td></tr>";
                        echo "<tr><td>Contact:</td><td>".$ab["contact"]."</td></tr>";
                        echo "<tr><td>No. of cases:</td><td>".$ab["no_of_cases"]."</td></tr>";
                    ?>
                </table>
            </div>

            <div id="client" class="tabContent ptable" >
                <h4 align="center">CLIENT</h4>
                <table align="center">
                    <tr>
                        <th>Client ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Door number</th>
                        <th>Street name</th>
                        <th>Contact</th>
                        <th>Since</th>
                    </tr>
                    <?php
                        $conn = mysqli_connect("localhost:3305", "root", "", "law_firm");
                        $id=$_COOKIE["id"];
                        $ex = mysqli_query($conn,"SELECT * FROM clients WHERE client_id IN (SELECT client_id FROM case_ WHERE lawyer_id ='$id')");
                        while($row = mysqli_fetch_assoc($ex))
                        {
                            echo "<tr><td>" . $row["client_id"]. "</td><td>" . $row["first_name"]. "</td><td>" . $row["last_name"]. "</td><td>" . $row["door_no"] . "</td><td>". $row["street_name"]. "</td><td>" . $row["contact"]. "</td><td>" .$row["since"]. "</td></tr>";
                        }
                    ?>
                                        
                </table>
            </div>

            <div id="hearing" class="tabContent ptable">
                <h4 align="center">HEARINGS</h4>
                <table align="center">
                    <tr>
                        <th>Serial Number</th>
                        <th>Case ID</th>
                        <th>Hearing Date</th>                        
                        <th>Court</th>
                    </tr>
                    <?php
                        $conn2 = mysqli_connect("localhost:3305", "root", "", "law_firm");
                        $id=$_COOKIE["id"];
                        
                        $ex2 = mysqli_query($conn2,"SELECT * FROM hearing WHERE lawyer_id = '$id'");
                        while($row2 = mysqli_fetch_assoc($ex2))
                        {
                            echo "<tr><td>" . $row2["s_no"]. "</td><td>" . $row2["case_id"]. "</td><td>" . $row2["hearing_date"].  "</td><td>". $row2["court"] . "</td></tr>";
                        }
                    ?>                  
                </table>
            </div>

            <div id="cases" class="tabContent ptable">
                <h4 align="center">CASES</h4>
                <table align="center">
                    <tr>
                        <th>Case ID</th>
                        <th>Status</th>
                        <th>Case notes</th>
                        <th>Number of hearings</th>
                        <th>Client ID</th>
                        <th>Fee</th>
                    </tr>             
                    <?php
                        $conn4 = mysqli_connect("localhost:3305", "root", "", "law_firm");
                        $id=$_COOKIE["id"];
                        $ex4 = mysqli_query($conn4,"SELECT * FROM case_ where lawyer_id='$id'");
                        
                        while($row4 = mysqli_fetch_assoc($ex4))
                        {
                            echo "<tr><td>" . $row4["case_id"]. "</td><td>" . $row4["status"]. "</td><td>" . $row4["case_notes"]. "</td><td>" . $row4["no_of_hearings"] . "</td><td>". $row4["client_id"]. "</td><td>". $row4["fee"] . "</td></tr>";
                        }
                    ?>                 
                </table>
            </div>
        </div>
        <script>
            function openTab(evt, tabName) 
            {
                var i, tabcontent, button;
                tabcontent = document.getElementsByClassName("tabContent");
                for (i = 0; i < tabcontent.length; i++) 
                {
                    tabcontent[i].style.display = "none";
                }
                button = document.getElementsByClassName("button buttonEffect");
                for (i = 0; i < button.length; i++) 
                {
                    button[i].className = button[i].className.replace(" active", "");
                }
                document.getElementById(tabName).style.display = "block";
            }
        </script>
    </body>
</html>