<!DOCTYPE html>
    <head>
        <title>
            Update
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #table
            {
                margin-top: 100px;
            }
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

            input[type=text],input[type=number]
            {
                font-size: 18px;
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
            <form action="casedetadd.php" method="POST" >            
                <div id="table" class="tabContent">
                    <table align="center">
                        <tr >
                            <th>Attributes</th>                            
                            <th>Input</th>
                        </tr>
                        
                        <tr>
                            <td>Status</td>                            
                            <td><input type="text" name="two_column"></td>
                        </tr>
                        <tr>
                            <td>Case Notes</td>                            
                            <td><textarea rows="4" cols="50"   name="three_column"> </textarea></td>
                        </tr>
                        
                        <tr>
                            <td>Lawyer ID</td>                            
                            <td><input type="number" name="five_column"></td>
                        </tr>
                        <tr>
                            <td>Client ID</td>                            
                            <td><input type="number" name="six_column"></td>
                        </tr>
                        <tr>
                            <td>Fee</td>                            
                            <td><input type="number" name="seven_column"></td>
                        </tr>
                    </table>
                    <div id="ip_id" align="center" style="margin-top: 80px;" >
                        
                        <div class="container">
                            <div class="center">
                                <button name="Update" type="submit" onclick="window.alert('Update successful')" id="center" class="button buttonEffect" >ADD</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
                       
    </body>
    <script>
        
        
        
    </script>
</html>