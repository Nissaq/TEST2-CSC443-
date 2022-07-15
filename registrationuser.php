<!DOCTYPE html>


<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: #fafafa;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #FFC0CB;
  color: pink;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a pink text color to links */
a {
  color: pink;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #FFC0CB;
  text-align: center;
}
</style>
</head>
<body>

<?php 

if(!session_id())
{
session_start();
}
include('config.php');


  ?>
	<form class="form" action="registrationdata.php" method="POST" style="width:100%;">
	<br>

<form action="registrationdata.php">
  <div class="container">
    <h1>Register</h1>
    <p>Fill in the form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Your Email" name="email" id="email" required>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Your Name" name="name" id="name" required>

    <label for="hpnumber"><b>Phone number</b></label>
    <input type="text" placeholder="Enter Your Phone Number" name="hpnumber" id="hpnumber" required>


    <span id="span2">Gender:</span>
					<select id="gender" name="gender" style="width:30%;border-radius:12px;height:37px;"required> 
						<option></option>
						<option>Male</option>
						<option>Female</option>
					</select>
</body>
</html>

    <hr>

    <button type="submit" class="registerbtn w3-teal">Register</button>
  </div>
</form>

</body>
</html>
