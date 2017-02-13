<?php 
session_start();
if(isset($_POST['regjistro']))
{
    require 'lidhjamedb.php';
    require 'Regex.php';
    
//$username = addslashes($_POST['username']);        //validon per injection
$emri =  addslashes($emri);
$mbiemri =  addslashes($mbiemri);
$password =  addslashes($password);
$email =  addslashes($email);
$username=addslashes($username);
$konfirmoPassword=addslashes($konfirmoPassword);
$dtl =  addslashes($viti."-".$_POST['muaji']."-".$_POST['data']);
$gjinia = addslashes($_POST['Gjinia']);

$sql = "INSERT INTO perdoruesit(username,Emri,Mbiemri,Password,Email,Grupi,Data_reg,Ditelindja,Gjinia)
VALUES ('$username','$emri','$mbiemri','$password','$email',2,NOW(),'$dtl','$gjinia')";
$retval = mysqli_query( $conn, $sql );
    if(!$retval )
    {
    die('Nuk jeni regjistruar: ' . mysqli_connect_error());
    }
    else{
        echo "<script>
                alert('Te dhenat jane regjistruar');
                </script>";
        header('Location: index.php');
        $_SESSION['username'] = $username;
    }
    
}   
 ?>
<!DOCTYPE html>
<html style="margin:0px;">
<head>
<title>Regjistrohu - RISHIKinO</title>
<link rel="stylesheet" href="css/default.css" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="css/login.css">
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/colorbox.css" type="text/css" media="all">
<script src="js/jquery-1.8.0.min.js"></script>
<script src="js/jquery.colorbox-min.js"></script>
<script src="js/functions.js"></script>
<style>
.main {margin-top:0px;}
.register { border:1px solid #1cfe10; border-radius:20px;}
.header {widht:920px;right:-300px;}
h1#logo{padding:0px}

#navigation { width: 649px; height: 66px; padding: 5px 7px 0 8px; margin-top: 10px; position: relative; margin-right: -5px;}
#navigation ul li a { padding-right: 47px; padding-left: 47px; border-right: 0; background: transparent; }
#navigation ul li a span { background: url(images/lates-ico.png) no-repeat 0 0; opacity: 0;
.footer { padding:5px;}

</style>
</head>

<body>
<!-- wrapper -->
<div id="wrapper">
  <div class="light-bg" style="width:1349px; height:281px;" >
    <!-- shell -->
    <div class="shell">
      <!-- header -->
      <div class="header">
        
		<!-- socials -->
        <div class="socials" style="width:500px;left:620px;"> 
              <a href="#" class="facebook-ico"><img src="css/images/fb.png"></a>
		<a href="#" class="twitter-ico"><img src="css/images/twitter.png"></a>
		</div>
        <!-- end of socials -->
        
		<h1 id="logo"><a href="index.php" alt="RISHIKinO" width="272px;" height="75px;">Regjistrohu</a></h1>
        
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
        <div class="post-cnt">
				<form method="post" action="<?php $_PHP_SELF ?>" class="register">
					<h1>Regjistrimi</h1>
					<fieldset class="row1">
						<legend style="color:#1cfe10">Detajet e llogarise
						</legend>
						<p>
							<label>Username *
							</label>
                                                    <input type="text" placeholder="Useri"name="username"/>
							
						</p>
						<p>
							<label>Password*
							</label>
							<input type="password" placeholder="Password" name="password" />
							<label>Konfirmo Password*
							</label>
							<input type="password" placeholder="Password"name="konfirmoPassword"/>
							<label class="obinfo">* fushat obligohen
							</label>
						</p>
					</fieldset>
					<fieldset class="row2">
						<legend style="color:#1cfe10">Detajet personale
						</legend>
						<p>
							<label>Emri *
							</label>
							<input type="text" placeholder="Emri"class="long" name="emri"/>
						</p>
						<p>
							<label>Mbiemri *
							</label>
							<input type="text" placeholder="Mbiemri" class="long" name="mbiemri"/>
						</p>
						<p>
							<label>Email *
							</label>
							<input type="text" placeholder="Email" maxlength="20" name="email"/>
						</p>
						
					</fieldset>
					<fieldset class="row3">
						<legend style="color:#1cfe10">Informata tjera
						</legend>
						<p>
							<label>Gjinia *</label>
							<input type="radio" name="Gjinia" value="Mashkull" checked> Mashkull<br>
							<input type="radio" style="display:inline-block" name="Gjinia" value="Femer"> Femer<br>
						</p>
						<p>
							<label>Ditelindja *
							</label>
							<select class="date" name="data">
								<option value="1">01
								</option>
								<option value="2">02
								</option>
								<option value="3">03
								</option>
								<option value="4">04
								</option>
								<option value="5">05
								</option>
								<option value="6">06
								</option>
								<option value="7">07
								</option>
								<option value="8">08
								</option>
								<option value="9">09
								</option>
								<option value="10">10
								</option>
								<option value="11">11
								</option>
								<option value="12">12
								</option>
								<option value="13">13
								</option>
								<option value="14">14
								</option>
								<option value="15">15
								</option>
								<option value="16">16
								</option>
								<option value="17">17
								</option>
								<option value="18">18
								</option>
								<option value="19">19
								</option>
								<option value="20">20
								</option>
								<option value="21">21
								</option>
								<option value="22">22
								</option>
								<option value="23">23
								</option>
								<option value="24">24
								</option>
								<option value="25">25
								</option>
								<option value="26">26
								</option>
								<option value="27">27
								</option>
								<option value="28">28
								</option>
								<option value="29">29
								</option>
								<option value="30">30
								</option>
								<option value="31">31
								</option>
							</select>
							<select name="muaji">
								<option value="1">Janar
								</option>
								<option value="2">Shkurt
								</option>
								<option value="3">Mars
								</option>
								<option value="4">Prill
								</option>
								<option value="5">Maj
								</option>
								<option value="6">Qeshor
								</option>
								<option value="7">Korrik
								</option>
								<option value="8">Gusht
								</option>
								<option value="9">Shtator
								</option>
								<option value="10">Tetor
								</option>
								<option value="11">Nentor
								</option>
								<option value="12">Dhjetor
								</option>
							</select>
							<input class="year" type="text" size="4" placeholder="1989" maxlength="4" name="viti"/>
						</p>
						<p></P>
						<div class="infobox" style="color:gray"><h4>Informata Ndihmese</h4>
                                                        <?php
                                                        $filename = "tmp.txt";//ky duhet te ruhet afer fajlli punues 
                                                        $file = fopen( $filename, "r" );

                                                        if( $file == false ) {
                                                               echo ( "Error ne leximin e fajllit" );
                                                               exit();
                                                        }

                                                        $filesize = filesize( $filename );
                                                        $filetext = fread( $file, $filesize );
                                                        fclose( $file );
                                                        echo ( "<p style='Color:gray' >$filetext</p>" );
                                                        echo ( "Madhesia e fajllit : $filesize bytes" );
                                                        
                                                       ?>                                                    
						</div>
					</fieldset>
					<fieldset class="row4">
						<legend style="color:#1cfe10">Terms of Policy
						</legend>
						<p class="agreement">
							<input name="unepranoj" type="checkbox" value=""/>
							<label>*  Une pranoj <a href="#">Terms and Conditions</a></label>
						</p>
						<p class="agreement">
							<input name="unedeshiroj" type="checkbox" value=""/>
							<label>Une deshiroje te pranoj ofertat tuaja</label>
						</p>
					</fieldset>
					<div style="padding-left:650px; padding-top:400px;"><button value="Submit" name="regjistro" class="button" style="background-color:#1cfe10">Regjistrohu &raquo;</button></div>
				</form>
      <div class="footer" style="padding-top:60px;padding-bottom:1px">
        <nav class="footer-nav" style="height:15px;">
          <ul>
			<li><a href="aboutus.php">Rreth nesh</li>
                        <li><a href="kontakt_email.php">Na kontakto</li>
			<li><a href="privacyp.html">Privacy Policy</li>
		  </ul>
        </nav>
        <p class="copy">Copyright &copy; 2016 <span>|</span> RISHIKinO. Design by Grupi 4</p>
      </div>
    </div>
  </div>
</div>
</body>
</html>