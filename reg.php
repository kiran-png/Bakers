<?php

     include('include/head.php');
     include('include/navbar.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
  <style type="text/css">
    /* Set a style for the submit button */
.btn btn-success btn-block {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn btn-success btn-block:hover {
  opacity: 1;
}
  </style>
</head>
<div class="bd">
<body bgcolor="darkgoldenrodc">

<div class="row">
	<div class="col col-md-3">
	</div>

	<div class="col col-md-6">
		<div class="panel panel-danger">
        <div class="panel-heading"><center>COUSTMER REGISTRATON</center></div>
        <div class="panel-body">


        	<form action="insert.php" method="post" onSubmit = "return checkPassword(this)">

  <div class="form-group">
    <label>Customer Name:</label>
    <input type="text" class="form-control" name="name" required>
  </div>

  <div class="form-group">
    <label>Mobile number:</label>
    <!--input maxlength="10" type="number" class="form-control" name="mobile" required-->
    <input type="text" class="form-control" placeholder="+91" title="Contact Number must contain only numbers | 10 Digits | Indian Numbers start from 6,7,8 or 9" id="contact" name="mobile" maxlength="10" pattern="([6-9]{1}[0-9]{9})" required>
  </div>
  
  <div class="form-group">
    <label>Address:</label>
    <input type="text" class="form-control" name="address" required>
  </div>

  <div class="form-group">
    <label>Email:</label>
    <input type="email"class="form-control" placeholder="Enter Email-Id" id="email" title="email ID must be in gmail/hotmail/yahoo/kristujayanti.com domain" name="email" pattern=".+@yahoo\.com|.+@hotmail\.com|.+@gmail\.com|.+@kristujayanti\.com">
  </div>

  <div class="form-group">
    <label>Password:</label>
    <input type="password" class="form-control" name="password" required>
  </div>

  <div class="form-group">
    <label>Repeat Password:</label>
    <input type="password" class="form-control" name="password2" required>
  </div>
<!-------------------------- password valiodation-------------------------------------------------->
  <script> 
		
			// Function to check Whether both passwords 
			// is same or not. 
			function checkPassword(form) { 
				password = form.password.value; 
				password2 = form.password2.value;

				// If password not entered pass
				if (password == '') 
					alert ("Please enter Password"); 
					
				// If confirm password not entered 
				else if (password2 == '') 
					alert ("Please enter confirm password"); 
					
				// If Not same return False.	 
				else if (password != password2) { 
					alert ("\nPassword did not match: Please try again...") 
					return false; 
				} 

				// If same return True. 
				else{ 
					alert("Registra successfully!...") 
					return true; 
				} 
			} 
		</script> 
		

  <p style="color:black"><b>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</b></p>

  <div class="form-group">
              <label><input type="checkbox" name="remember" required> Remember me</label>
  </div>
  <button type="submit" class="btn btn-success btn-block" style="color:black">process to Registration</button>
  <!--script>
function myFunction() {
  alert("Registra successfully");
}
</script-->

   <center style="color:black"><h4><p><b>Already have an account? <a href="cousm_login.php">Sign in</a>.</b></p></h4></center>
</form>


        </div>
  </div>
  </div>

</body>
</div>
</html>




<!--style type="text/css">
  

.panel-body {
    background-image: linear-gradient(27deg,#013A6B 50%,#004E95 50%);
}

.bd {
    background-image: linear-gradient(27deg,#004E95 50%,#013A6B 50%);
    
}
label {
    color: black;
}
</style-->
