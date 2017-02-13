<?php
session_start();
if(isset($_COOKIE["Preferencat"]))
    {
        $var = "user2.png";
    }
else
    {
    $var="user.png";
    setcookie("Preferencat","$var",time()+3600);
    }
    
        if (isset($_SESSION['username']))
    {
        $linku1 = "#";
        $id1 = "";
        $var1 = "Shkycja";
        $linku2 = "admini.php";
        $var2 = "Shto filma";
        $dukja = "visible";
        $profili = "user.php";
        $teksti = "Profili juaj";
        
    
     }
    else
    {
       echo "<script>
              alert('Nuk keni akses!');
              </script>";
       header('Location: index.php');
     }
     
if(isset($_POST['NdrrimiPas']) && !empty($_POST['password']) &&  !empty($_POST['password1']) && !empty($_POST['password2'])){
            require ('lidhjamedb.php');
            
            $pass = addslashes($_POST['password']);
            $pass1 = addslashes($_POST['password1']);
            $pass2 = addslashes($_POST['password2']);
            
            if($pass1==$pass2){
            
            $sql = "SELECT * FROM perdoruesit where username='".$_SESSION["username"]."'";
                        $retval = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($retval) > 0) {
                        while ($row=mysqli_fetch_assoc($retval))
                            {
                                $sql1="UPDATE perdoruesit set Password='".$pass1."' WHERE username='".$_SESSION["username"]."'";
                                $retval1 = mysqli_query($conn, $sql1);
                          }
            }}}

 ?>
<!DOCTYPE html>
<html>
<head>
<title>Useri - RISHIKinO</title>
<link rel="stylesheet" type="text/css" href="css/login.css">
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/colorbox.css" type="text/css" media="all">
<script src="js/jquery-1.8.0.min.js"></script>
<script src="js/jquery.colorbox-min.js"></script>
<script src="js/functions.js"></script>

</head>

<body>
<!-- wrapper -->
<div id="wrapper">
  <div class="light-bg">
    <!-- shell -->
    <div class="shell">
      <!-- header -->
      <div class="header">
        
		<!-- socials -->
        <div class="socials" style="width:500px;left:490px;"> 
            <a style="visibility: <?php echo $dukja;?>" href="logout.php" id="<?php $id1 ?>"><b><?php echo $var1; ?></b> </a>
                          
                <a href="<?php echo $linku2; ?>" class="regjistrimi"><b><?php echo $var2?></b></a>
		<a href="#" class="facebook-ico"><img src="css/images/fb.png"></a>
		<a href="#" class="twitter-ico"><img src="css/images/twitter.png"></a>
		</div>
        <!-- end of socials -->
        
		<h1 id="logo"><a href="#" alt="RISHIKinO" width="272px;" height="75px;">RISHIKinO</a></h1>
        <!-- navigation -->
        <nav id="navigation">
           <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="index2.php">SHOW ALL</a></li>
            <li><a href="index3.php">LATEST MOVIES</a></li>
          </ul>
        </nav>
        <!-- end of navigation -->
        <div class="cl">&nbsp;</div>
      </div>
      <!-- end of header -->
      <!-- main -->
      <div class="main">
        <!-- content -->
        <section  >
          <!-- post -->
          <div class="post">
            <!-- post-inner -->
            <div class="post-inner" style="font-size:14px;">
              <header>
               <div class="cl">&nbsp;</div>
              </header>
              <!-- meta -->
              <div >
                <p style="padding-left:100px">Useri: <?php require 'lidhjamedb.php';
                       $sql = "SELECT * FROM perdoruesit where username='".$_GET['id']."'";
                        $retval = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($retval) > 0) {
                        while ($row=mysqli_fetch_assoc($retval))
                            {
                            echo $row["username"];
                            }
                        }
                ?></p>				
                <div style="width:27%; height:450px; background-color:#2E2E2E; float:left; border-radius:40px;display:inline-block;">
					<div  style="margin:50px;width:150px; border:1px solid black;height:150px;background-image:url(css/images/<?php echo $var;?>);background-size: 150px  150px;background-repeat: no-repeat; border-radius:40px;">	<!--Per FOTO Userit -->
						<br></br>
					</div>
					
				  
					
				</div>
				<div style="width:72%; height:450px;  border-radius:40px;display:inline-block; ">	<!--Per FOTO Userit -->
					<section style="margin:20px; padding-top:10px;padding-left:80px">
                                            <p>Username i perdoruesit: <b><?php require 'lidhjamedb.php';
                                                    $sql = "SELECT * FROM perdoruesit where username='".$_GET['id']."'";
                                                     $retval = mysqli_query($conn, $sql);
                                                     if (mysqli_num_rows($retval) > 0) {
                                                     while ($row=mysqli_fetch_assoc($retval))
                                                         {
                                                         echo $row["username"];
                                                         }
                                                     }
                                                    ?></b></p> <!-- me nje var. te pergjithshme -->
						<p>Emri i perdoruesit: <b><?php require 'lidhjamedb.php';
                                                    $sql = "SELECT * FROM perdoruesit where username='".$_GET['id']."'";
                                                     $retval = mysqli_query($conn, $sql);
                                                     if (mysqli_num_rows($retval) > 0) {
                                                     while ($row=mysqli_fetch_assoc($retval))
                                                         {
                                                         echo $row["Emri"];
                                                         }
                                                     }
                                                    ?></b></p> <!-- me nje var. te pergjithshme -->
						<p>Mbiemri i perdoruesit :<b><?php require 'lidhjamedb.php';
                                                    $sql = "SELECT * FROM perdoruesit where username='".$_GET['id']."'";
                                                     $retval = mysqli_query($conn, $sql);
                                                     if (mysqli_num_rows($retval) > 0) {
                                                     while ($row=mysqli_fetch_assoc($retval))
                                                         {
                                                         echo $row["Mbiemri"];
                                                         }
                                                     }
                                                    ?></b></p> <!-- me nje var. te pergjithshme -->
						<br></br>
						<form  method="post" action="<?php $_PHP_SELF ?>">
							<table width=auto >
								<tr>							
								  <td>Shkruaj passwordin-in aktual: </td>
								  <td > <input type="password" placeholder="Password i vjeter" name="password" ></input>	</td>						  
								</tr>
								<tr>
								  <td>Ndrysho passwordin-in: </td>
								  <td> <input type="password" placeholder="Password i ri" name="password1"></input></td>
								</tr>
								<tr>
								  <td>Konfirmo passwordin-in: </td>
								  <td><input type="password" placeholder="Password i ri" name="password2"></input></td>
								</tr>
							</table>
							<input type="submit" value="Nderro" name="NdrrimiPas" style="width:100px; margin-left:190px">
						</form>
						<br></br>
					</section>
				</div> </div>
            </div>
            <!-- post-inner -->
          </div>
          <!-- end of post -->
          
         
          
        </section>
        <!-- end of content -->
        <!-- sidebar -->
        
        <!-- end of sidebar -->
        <div class="cl">&nbsp;</div>
      </div>
      <!-- end of main -->
      <div class="footer">
        <nav class="footer-nav">
          <ul>
			<li><a href="#">About Us</li>
			<li><a href="#">Privacy Policy</li>
		  </ul>
        </nav>
        <p class="copy">Copyright &copy; 2010-<?php echo date("Y");?> <span>|</span> RISHIKinO. Design by Grupi 4</p>
      </div>
    </div>
    <!-- end of shell -->
  </div>
</div>
<!-- end of wrapper -->
</body>
</html>