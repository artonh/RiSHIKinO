<?php 
  session_start();
  
  require_once("connection.php"); //nje fajll per konn me DB
  
 // if(isset($_SESSION['user_id'])){ redirect_to("read.php");}   //kjo eshte per sessione
  
  if(isset($_POST['submit'])) //varsisht se si e ka emrin /name 
  { 
		$username=$_POST['username'];
		$salt="oidas31243as3467";		// saltit mund t'i shtohet edhe nje random
		$password=$_POST['password'].$salt;
		$password=sha1($password);
		
		$data=mysqli_query($conn, "SELECT * FROM users
		     WHERE username='{$username}' AND password='{$password}'");
			 
		 while($row=mysqli_fetch_array($data))
		 {
			 $id=$row['id'];
			 $useri=$row['username'];
			 if(isset($id)){  echo "<br><h2>Pershendetje ".$useri.", ju deshirojme nje dite te palodhshme!</h3><br><b>Ju njoftojme se jeni kycur</b>";
				 // $_SESSION['user_id']=$id;        ///nese kemi SESIONE
				 // header("Location: home.php");
				 // exit;
			 }
			 else
			  echo "Passwordi ose Username nuk jane valid!</br>";				 
		 }
  }		
?>
<html>
<head>
<title>Login</title>
</head>
<body>
<h1>Login</h1>
   <form action="login.php"" method="post">
    <table border=0 cellpading="1" cellspacing="1">
	   <tr><td>Username: </td><td><input type="text" name="username"></td></tr>
	   <tr><td>Password: </td><td><input type="password" name="password"></td></tr>
	   <tr><td></td><td><input type="submit" name="submit" value="Regjistrohu"></td></tr>
	</table>  
  </form>
</body>
</html>