<?php
  include 'config.php';
?>

<!tutorial>
<html>
<head>
<link rel="stylesheet" href="Reg/style.css"></link>
<title>WEB</title>
<h2 align="center" class="h">Welcome to LOGIN</h2>
</head>
<body id="b">
<center>
<div id="d">
<img src="Reg/login.png" class="img"></img>
<center><form action="login.php" method="POST">

<b><label>Email</label>
<input name="email" type="email" id="form" placeholder="Enter your email" required> <br /> <br />
</input>
<b><label>Password</label>
<input name="pass" type="password" id="form" placeholder="Enter your Password" required><br /> <br />
</input>

<!button work>

<input name="login" type="submit" id="button" value="LOGIN"> <br /> <br />
</input>
<a href="Reg/register.php"><input name="reg" type="button" id="button" value="REGISTER">
</input>


</form></center>

</center>



<?php

    if(isset($_POST['login'])){
		
		$email= $_POST['email'];
		$pass=$_POST['pass'];
		
		$check = "select*from user where email='$email' AND password ='$pass'";
		$check_work= mysqli_query($con,$check);
		
		if($check_work){
			if(mysqli_num_rows($check_work) > 0 ){
				
				echo"
				<script>
				alert('You are Successfully  Logged in');
				window.location.href='index.php';
				</script>
				";
				
			}else{
				
				echo"
				<script>
				alert('Password or Email not Found ');
				window.location.href('register.php');
				</script>
				";
			}
			
			
		}else{
			
			
				echo"
				<script>
				alert('Database Error  ');
				window.location.href('register.php');
				</script>
				";
		}
		
		
		
	}else{
		
		
	}





?>



</div>
</body>

</html>