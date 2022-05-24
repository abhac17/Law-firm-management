<!DOCTYPE html>
<html>
    <head>
        <title>
            Admin page
        </title> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            table, td, th 
            {  
                border: 1px solid rgb(221, 221, 221);                
                text-align: center;
            }

            table 
            {
                border-collapse: collapse;    
                
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
            .container 
            {
                overflow: hidden;
                border-top: none;
                
                padding-top: 5px;
                padding-left: 30px;
            }
            #b_container 
            { 
                height: 60px;
                position: relative;
            }
            #b_center 
            {
                margin: 0;
                position: absolute;
                top: 50%;
                left: 50%;
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
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

            #bg 
            {
                background-image: url('images/bg.jpg');
                font-family: Helvetica, sans-serif;
                background-attachment: fixed;
                background-repeat: no-repeat;
            }
            .layer {
                background-image: linear-gradient(to right,rgba(255, 255, 255, 0.377),rgba(255, 255, 255, 0));
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
            .w3-grey
            {
                background-color: #5555557e;
                color: rgb(0, 0, 0);
            }
        </style>
                       
    </head>
    <body id="bg">
        <div class="layer">            
            <img src="images/logo.png" alt="logo" style="padding-top: 5px; padding-left: 30px;">
                
            <div class="container"  align="center">
                <button type="button" class="button buttonEffect"  onclick="openTab(event, 'clients')" >Clients</button>
                <button type="button" class="button buttonEffect"  onclick="openTab(event, 'hearings')">Hearings</button>
                <button type="button" class="button buttonEffect"  onclick="openTab(event, 'employees')">Employees</button>
                <button type="button" class="button buttonEffect"  onclick="openTab(event, 'documents')">Documents</button>
                <button type="button" class="button buttonEffect"  onclick="openTab(event, 'courts')">Courts</button>
                <button type="button" class="button buttonEffect"  onclick="openTab(event, 'cases')">Cases</button>
            </div>
            
            <div id="clients" class="tabContent" >
                <table align="center">
                    <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Door number</th>
                        <th>Street</th>
                        <th>Contact</th>
                        <th>Since</th>
                    </tr>
                    <?php
                        $conn = mysqli_connect("localhost:5500", "root", "", "law_firm");
                        $ex = mysqli_query($conn,"SELECT * FROM clients");
                        while($row = mysqli_fetch_assoc($ex))
                        {
                            echo "<tr><td>" . $row["client_id"]. "</td><td>" . $row["first_name"]. "</td><td>" . $row["last_name"]. "</td><td>" . $row["door_no"] . "</td><td>". $row["street_name"]. "</td><td>" . $row["contact"]. "</td><td>" .$row["since"]. "</td></tr>";
                        }
                    ?>
                </table>
                <div id="b_container">                    
                    <div id="b_center">                        
                        <button type="submit" id="center" class="button buttonEffect" onclick="location.href='a_add_client.php'">Add</button>
                        <button type="submit" id="center" class="button buttonEffect" onclick="location.href='a_update_client.php'">Update and delete</button>
                    </div>
                </div>
            </div>
                
            <div id="hearings" class="tabContent">
                <table align="center">
                    <tr>
                        <th>Serial Number</th>
                        <th>Case ID</th>
                        <th>Hearing date</th>
                        <th>Lawyer ID</th>
                        <th>Court</th>
                    </tr>
                    <?php
                        $conn2 = mysqli_connect("localhost:3305", "root", "", "law_firm");
                        $ex2 = mysqli_query($conn2,"SELECT * FROM hearing");
                        while($row2 = mysqli_fetch_assoc($ex2))
                        {
                            echo "<tr><td>" . $row2["s_no"]. "</td><td>" . $row2["case_id"]. "</td><td>" . $row2["hearing_date"]. "</td><td>" . $row2["lawyer_id"] . "</td><td>". $row2["court"] . "</td></tr>";
                        }
                    ?>
                </table>
                <div id="b_container">
                    <div id="b_center">
                        <button type="submit" id="center" class="button buttonEffect" onclick="location.href='a_add_hearings.php'">Add</button>
                        <button type="submit" id="center" class="button buttonEffect" onclick="location.href='a_update_hearings.php'">Update and delete</button>
                    </div>
                </div>
            </div>

            <div id="employees" class="tabContent">
                <table align="center">
                    <tr>
                        <th>Employee ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Employee Password</th>
                        <th>Since</th>
                        <th>Salary</th>
                        <th>Door number</th>
                        <th>Street name</th>
                        <th>Contact</th>
                        <th>Number of cases</th>
                    </tr>
                    <?php
                        $conn1 = mysqli_connect("localhost:3305", "root", "", "law_firm");
                        $ex1 = mysqli_query($conn1,"SELECT * FROM employees");
                        while($row1 = mysqli_fetch_assoc($ex1))
                        {
                            echo "<tr><td>" . $row1["employee_id"]. "</td><td>" . $row1["first_name"]. "</td><td>" . $row1["last_name"]. "</td><td>" . $row1["employee_password"] . "</td><td>". $row1["since"]. "</td><td>". $row1["salary"]. "</td><td>". $row1["door_no"] . "</td><td>". $row1["street_name"]. "</td><td>" . $row1["contact"]. "</td><td>" .$row1["no_of_cases"]. "</td></tr>";
                        }
                    ?>
                </table>
                <div id="b_container">
                    <div id="b_center">
                        <button type="submit" id="center" class="button buttonEffect" onclick="location.href='a_add_emp.php'">Add</button>
                        <button type="submit" id="center" class="button buttonEffect" onclick="location.href='a_update_emp.php'">Update and delete</button>
                    </div>
                </div>
            </div>

            <div id="documents" class="tabContent">
                <table align="center">
                    <tr>
                        <th>Case ID</th>
                        <th>Document ID</th>
                        <th>Document Name</th>
                        <th>Authenicity</th>
                        <th>File</th>
                    </tr>
                    <?php
                        $conn2 = mysqli_connect("localhost:3305", "root", "", "law_firm");
                        $ex2 = mysqli_query($conn2,"SELECT * FROM document");
                        while($row2 = mysqli_fetch_assoc($ex2))
                        {
                            echo "<tr><td>" . $row2["case_id"]. "</td><td>" . $row2["document_id"]. "</td><td>" . $row2["document_name"]. "</td><td>" . $row2["authenicity"] . "</td><td>". "<a href='/ldb/documents/" .$row2["document_id"] . ".pdf'> Download </a>" . "</td></tr>";
                        }
                    ?>
                </table>
                <div id="b_container">
                    <div id="b_center">
                        <button type="submit" id="center" class="button buttonEffect" onclick="location.href='a_add_document.php'">Add</button>
                        
                    </div>
                </div>
            </div>

            <div id="courts" class="tabContent">
                <table align="center">
                    <tr>
                        <th>Court Number</th>
                        <th>Cheif Judge</th>
                        <th>District</th>
                    </tr>
                
                <?php
                        $conn3 = mysqli_connect("localhost:3305", "root", "", "law_firm");
                        $ex3 = mysqli_query($conn3,"SELECT * FROM courts");
                        while($row3 = mysqli_fetch_assoc($ex3))
                        {
                            echo "<tr><td>" . $row3["c_no"]. "</td><td>" . $row3["cheif_judge"]. "</td><td>" . $row3["district"] . "</td></tr>";
                        }
                ?>
                </table>
                <div id="b_container">
                    <div id="b_center">
                        <button type="submit" id="center" class="button buttonEffect" onclick="location.href='a_add_courts.php'">Add</button>
                        <button type="submit" id="center" class="button buttonEffect" onclick="location.href='a_update_courts.php'">Update and delete</button>
                    </div>
                </div>
            </div>

            <div id="cases" class="tabContent">
                <table align="center">
                    <tr>
                        <th>Case ID</th>
                        <th>Status</th>
                        <th>Case Notes</th>
                        <th>Number of hearings</th>
                        <th>Lawyer ID</th>
                        <th>Client ID</th>
                        <th>Fee</th>
                    </tr>
                    <?php
                        $conn4 = mysqli_connect("localhost:3305", "root", "", "law_firm");
                        $ex4 = mysqli_query($conn4,"SELECT * FROM case_");
                        while($row4 = mysqli_fetch_assoc($ex4))
                        {
                            echo "<tr><td>" . $row4["case_id"]. "</td><td>" . $row4["status"]. "</td><td>" . $row4["case_notes"]. "</td><td>" . $row4["no_of_hearings"] . "</td><td>". $row4["lawyer_id"]. "</td><td>". $row4["client_id"]. "</td><td>". $row4["fee"] . "</td></tr>";
                        }
                    ?>
                </table>
                <div id="b_container">
                    <div id="b_center">
                        <button type="submit" id="center" class="button buttonEffect" onclick="location.href='a_add_cases.php'">Add</button>
                        <button type="submit" id="center" class="button buttonEffect" onclick="location.href='a_update_cases.php'">Update and delete</button>
                    </div>
                </div>
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
                    button[i].className = button[i].className.replace(" w3-grey", "");
                }
                document.getElementById(tabName).style.display = "block";
                evt.currentTarget.className += " w3-grey";
            }
        </script>
    </body>
</html>