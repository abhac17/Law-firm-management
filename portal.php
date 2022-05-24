<html>
    <head>
        <title>
            Portal
        </title>
        
        <style>
            .login 
            {
                position: absolute;
                left: 50%;
                top: 40%;
                overflow: hidden;
                border-top: none;
                transform: translate(-50%, -50%);
                border: 1px solid rgb(151, 146, 146);
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

            * {
                box-sizing: border-box;
            }

            input[type=text], input[type=password] 
            {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                resize: vertical;
            }

            label 
            {
                padding: 12px 12px 12px 0;
                display: inline-block;
            }

            input[type=submit],input[type=button] 
            {
                background-color: #4CAF50;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type=submit]:hover,input[type=button]:hover 
            {
                background-color: #45a049;
            }

            .container 
            {
                display: none;
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
                size: 120%;
                animation: fade 1s;
            }

            .col-25 
            {
                float: left;
                width: 50%;
                margin-top: 6px;
            }

            .col-75 
            {
                float: left;
                width: 75%;
                margin-top: 6px;
            }

            
            .row:after 
            {
                content: "";
                display: table;
                clear: both;
            }
           
            @keyframes fade 
            {
                from {opacity: 0;}
                to {opacity: 1;}
            }

            
            @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit], .button {
                width: 100%;
                margin-top: 0;
            }
            }
            .layer {
                background-image: linear-gradient(to right,rgba(255, 255, 255, 0.377),rgba(255, 255, 255, 0));
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
            #bg 
            {
                background-image: url('images/bg.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
            }
        </style>
    </head>
    <body id="bg" >
        <div class="layer">
        <h1 align="center" style="padding: 20px;">LOGIN</h1>
        <form action="por.php">
        <div class="login" >
            <button type="button" name="cl" class="button buttonEffect" onclick="tabOpen(); getid(this.id);" id="client">Client</button>
            <button type="button" name="em" class="button buttonEffect" onclick="tabOpen(); getid(this.id);" id="employee">Employee</button>
            <button type="button" name="ad" class="button buttonEffect" onclick="tabOpen(); getid(this.id);" id="admin">Admin</button>            
            <div class="container" id="sign-in">
                
                <div class="row">
                    <div class="col-25">
                    <label id="mutable" name="ui" for="userid">USER ID:</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="userid" name="userid" placeholder="USER ID">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label for="pw">PASSWORD:</label>
                    </div>
                    <div class="col-75">
                    <input type="password" id="pw" name="pw" placeholder="Password">
                    </div>
                </div>
                <div class="row" align="center">
                    <input type="hidden" name="ph" value='' id="did">
                    <br/><input type="submit" value="Submit">
                    <input type="button" id="su" onclick="location.href='signup.php'" style="width:auto;" value="Signup">
                    
                </div>
                
            </div>
            
        </div>
        </form>
        
    </div>
        <script>
            var uid;
            function tabOpen(id)
            {
                document.getElementById('sign-in').style.display = "block";
                
            }
            function getid(id)
            {
                uid=id;
                switch(uid)
                {
                    case "client": 
                    document.getElementById("mutable").innerHTML="Client ID:";
                    document.getElementById("su").style.display="inline";
                    document.getElementById("did").value = "client";
                    break;
                    case "employee": document.getElementById("mutable").innerHTML="Employee ID:";
                    document.getElementById("su").style.display="none";
                    document.getElementById("did").value = "employee";
                    break;
                    case "admin": document.getElementById("mutable").innerHTML="Admin ID:";
                    document.getElementById("su").style.display="none";
                    document.getElementById("did").value = "admin";
                    break;
                }
            }    
            function nextpage()
            {
                switch(uid)
                {
                    case "client": 
                        $(document).ready(function () {createCookie("usert", "client", "10");});
                    break;
                    case "employee": 
                        $(document).ready(function () {createCookie("usert", "employee", "10");});
                    break;
                    case "admin": 
                        $(document).ready(function () {createCookie("usert", "admin", "10");});
                    break;
                }
            }
                
            
        </script>
    </body>
</html>