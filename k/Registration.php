<?php include('server.php'); ?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<link rel="stylesheet" href="Reg/style.css" />
</head>
<body>
	<h1>Registration Form</h1>
	<div class="register">
	<form action="" id="register" method="post">
		<h2>Register Here</h2>
		<label>First Name :</label> <br />
		<input type="text" name="Fname" id="name" placeholder="Enter First Name" required> </input><br /><br />
		<label>Last Name :</label> <br />
		<input type="text" name="Lname" id="name" placeholder="Enter Last Name" required> </input> <br /><br />
		<label>Mobile Number :</label> <br />
		<select id="ph">
			<option>+1</option>
			<option>+31</option>
			<option>+44</option>
			<option>+880</option>
			<option>+91</option>
		</select>
		<input type="number" name="Mname" id="num" placeholder="Enter Mobile Number" required> </input> <br /><br />
		<label>Email :</label> <br />
		<input type="email" name="email" id="name" placeholder="Enter Email"required> </input> <br /><br />
		<label>Password :</label> <br />
		<input type="password" name="pass" id="name" placeholder="Enter Password" required> </input> <br /><br />
		<label>Re Enter Password :</label> <br />
		<input type="text" name="pass" id="name" placeholder="Enter Re-Password" /> <br /><br />
		<input type="radio" name="Gender" id="male"/> <span id="male">Male</span>
		<input type="radio" name="Gender" id="female"/> <span id="male">Female</span>
		<input type="radio" name="Gender" id="other"/> <span id="male">Other</span> <br /> <br />
		Upload Picture: <input type="submit" value="Choose a picture" id="pic" /> <br /> <br />
		<input type="submit" value="Submit" id="sub" />
	</form>
	</div>
	
	
</body>
</html>