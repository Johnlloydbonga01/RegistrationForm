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

		<h2> Registation Form </h2>

		<form name= "register" action="result.php" method="post">

			<p>First Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="first"/></p>
			<p>Middle Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="middle"/></p>
			<p>Last Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="last"/></p>
			<p>Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female
			</p>
			<p>Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="username" name="user"/></p>
			<p>Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="password" name="pw"/></p>
			<p>Confirm Password:&nbsp;&nbsp;<input type="password" name="cpassword"/></p>
			<p><input type="submit" name="submit" value="Sign In" /> 
					&nbsp;&nbsp;&nbsp;
			<a href="index.php"> Clear</a>
	</form>

</body>
</html>