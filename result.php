<!DOCTYPE html>
<html>

<head> 

   <title>Registration Form</title>

  </head>

<body>

	<style type="text/css">
		
		body {
			font-family: arial;
			size: 12px;
			padding: 50px;
		}
	</style>

	
	<h2> Registation Result</h2>
	
	<?php
		
		if (isset($_POST['submit'])) {
			if (empty($_POST["first"])) {
   				echo "Please Enter First name "."<br/>";
  		} 		
  			else {
				$firstName = $_POST['first'];
					echo "First Name: " .$firstName ."<br/>"; 
		}


			if (empty($_POST["middle"])) {
   				echo "Please Enter Middle name "."<br/>";
  		} 
  			else {
				$middleName = $_POST['middle'];
					echo "Middle Name: " .$middleName ."<br/>";
		}

			if (empty($_POST["last"])) {
   				echo "Please Enter Last name "."<br/>";
  		} 
  			else {
				$lastName = $_POST['last']; 
					echo "Last Name: " .$lastName ."<br/>";
		}
			
				$gender = $_POST['gender'];
					echo "Gender: " .$gender ."<br/>";

			
			if (empty($_POST["username"])) {
   				echo "Please Enter  username "."<br/>";
  		} 
  			else {
  				$username = $_POST['user'];
				echo "Username: " .$username ."<br/>";}

			if (empty($_POST["pw"])) {
   				echo "Please Enter password "."<br/>";
  		} 
  			else {
				$password = $_POST['pw'];
					echo "Password: " .$password ."<br/>";}

			if ($_POST["pw"] === $_POST["cpassword"]) {
		}
			else {
   					echo "Password does not match. "."<br/>";
				}		
		}
?>

			<br/><br/>
		<a href="index.php"> Clear</a>

	</body>
</html>				