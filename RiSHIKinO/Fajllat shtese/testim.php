<html>
	<head>
	<title>Shto nje studente te ri ne Databaze</title>
	</head>
	<body>
		<?php
		if(isset($_POST['add']))
		{
			$dbhost = 'localhost';
			$dbuser = 'root';
			$dbpass = '123456';
			$db = 'projektiv1';
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
			if(!$conn )
				{
				die('Could not connect: ' . mysqli_connect_error());
				}
			echo 'Connected successfully';
			echo "<br>";



			$ID = $_POST['IDGR'];
			$lloji = $_POST['Lloji'];

			 $sql = "INSERT INTO grperdoruesit
			 (IDGR, Lloji)
		      VALUES ($ID,'$lloji')";
			
			$retval = mysqli_query( $conn, $sql );
			if(! $retval )
				{
				die('Could not enter data: ' . mysqli_connect_error());
				}
			echo "Te dhenat u regjistruan me sukses\n";
			mysqli_close($conn);
			
		}
		?>
			
		<form method="post" action="<?php $_PHP_SELF ?>">
			<table width="400" border="0" cellspacing="1" cellpadding="2">
				<tr>
				<td width="100">ID</td>
				<td><input name="IDGR" type="text" id="ID"></td>
				</tr>
				<tr>
				<td width="100">Emri</td>
				<td><input name="Lloji" type="text" id="emri"></td>
				</tr>
				<tr>
				</tr>
				<tr>
				<td width="100"> </td>
				<td> </td>
				</tr>
				<tr>
				<td width="100"> </td>
				<td>
				<input name="add" type="submit" id="add" value="Shto Studentin">
				</td>
				</tr>
			</table>
		</form>
	</body>
</html>