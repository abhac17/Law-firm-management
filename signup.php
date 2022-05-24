<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input 
{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}


/* Set a style for all buttons */
button 
{
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: block; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
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
            }
</style>
<body id="bg">
<div id="id01" class="modal layer" >
  
  <form class="modal-content" action="su.php">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      
      <label for="first_name"><b>First name</b></label>
      <input type="text" placeholder="Enter your first name" name="first_name" required>

      <label for="last_name"><b>Last name</b></label>
      <input type="text" placeholder="Enter your last name" name="last_name" required>
      
      <p> <b>Address:</b> </p>
      <label for="add_l1"><b>Line 1</b></label>
      <input type="text" placeholder="eg: door number" name="add_l1" required>

      <label for="add_l2"><b>Line 2</b></label>
      <input type="text" placeholder="eg: street name, city" name="add_l2" required>
      
      <label for="ph"><b>Contact number</b></label>
      <input type="tel" placeholder="Enter your phone number" name="ph" required pattern="[0-9]{10}">
      
      <label for="pw"><b>Password</b></label>
      <input type="password" placeholder="Enter desired password" name="pw" required>

      <label for="rep_pw"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat password" name="rep_pw" required>
      
      <div class="clearfix">
        <button type="button" onclick="history.back()" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" >Sign Up</button>
            
      </div>
    </div>
  </form>
</div>



</body>
</html>
