<?php

	require_once("connection.php"); //ktu e krijojme nje php per konekt

	if(isset($_POST['submit'])) //varsisht se si e ka emrin /name 
	{ 
		$full_name=$_POST['full_name'];
		$username=$_POST['username'];
		$salt="oidas31243as3467";		
		$password=$_POST['password'].$salt;
		$password=sha1($password);
		
		if(mysqli_query($conn, "INSERT INTO users(full_name,username,password)
			VALUES ('{$full_name}','{$username}','{$password}')
		")) //echo "Te dhenat shkuan";		
		 {
			header("Location: login.php");		//sna duhet me shku ne login por ne faqen kryesore
		    exit;
		 }
		else echo "<br>Deshtim, nuk u regjistruat!";
	}
?>

<html>
<head>
<title>Register</title>
</head>
<body>
  <h1>Regjistrohu</h1>
  <form action="register.php"" method="post">
    <table border=0 cellpading="1" cellspacing="1">
	   <tr><td>Full name: </td><td><input type="text" name="full_name"></td></tr>
	   <tr><td>Username: </td><td><input type="text" name="username"></td></tr>
	   <tr><td>Password: </td><td><input type="password" name="password"></td></tr>
	   <tr><td></td><td><input type="submit" name="submit" value="Regjistrohu"></td></tr>
	</table>  
  </form>
</body>
</html>







