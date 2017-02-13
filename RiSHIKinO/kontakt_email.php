<!DOCTYPE html>

				
<html>
<head>
<title>Dergo Email</title>
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
 
    <?php 
    require ('lidhjamedb.php');
          
    ?>
<!-- wrapper -->
<div id="wrapper">
  <div class="light-bg">
    <!-- shell -->
    <div class="shell">
      <!-- header -->
      <div class="header">
        <!-- socials -->
        <div class="socials"> 
            <a href="<?php echo $linku;?>" id="<?php echo $nje; ?>"><b><?php echo $dy; ?></b> </a>
            
         <div id = "loginform"> 
        
            <form method = "post" action = "<?php $_PHP_SELF ?>">
                <input type = "text" id = "login" placeholder = "filan.fisteku@shembull.com" name = "userid">
                <input type = "password" id = "password" name = "userpass" placeholder = "password">
                <input type = "submit" id = "dologin" value = "Login" name="add" >
            </form>
        </div>
                
		<a href="<?php echo $linku2; ?>" class="regjistrimi"><b><?php echo $tre;?></b></a>
		<a href="#" class="facebook-ico"><img src="css/images/fb.png"></a>
		<a href="#" class="twitter-ico"><img src="css/images/twitter.png"></a>
		</div>
        <!-- end of socials -->
        
		<h1 id="logo"><a href="#" alt="RISHIKinO" width="272px;" height="75px;">RISHIKinO</a></h1>
        <!-- navigation -->
        <nav id="navigation">
          <ul>
            <li><a href="index.php">HOME</a></li>
			<li><a href="#">SHOW ALL</a></li>
            <li><a href="#">LATEST MOVIES <span>20</span></a></li>
            <li><a href="#">TOP RATED</a></li>
          </ul>
        </nav>
        <!-- end of navigation -->
        <div class="cl">&nbsp;</div>
      </div>
      <!-- end of header -->
      <!-- main -->
      <div class="main">
        <!-- content -->
        <section  stytle="width:602px">
          <!-- post -->
          <div class="post">
            <!-- post-inner -->
            <div class="post-inner">
              <header>
               <div class="cl">&nbsp;</div>
              </header>
              <!-- post-cnt -->
              <div class="post-cnt" style="margin-left:100px;">
                <p><H1>Dergo email </h1></p>	
				<?php require 'dergo_email.php';
				// if(isset($_POST['dergo'])) 
				// { 
				 // if(mail($email_to, $email_subject, $email_message, $headers)) { //ne localhost nuk dergohhet, por kur eshte ONLINE
					   // echo "Emaili u dergua me sukses";}
				 // else echo "Dergimi i emailit ka deshtuar!";				
				// }
				?>
               <form name="contactform"  action="<?php $_Php_Self ?>" method="post" style="font-size:14px;">
				  <table  width=700px style="border:1px solid">
					<tr >
					  <td style="padding-left:18px; background:url(css/images/navigation-border.png);">Emri:</td> 
					  <td><input type="text" style="font-size:14pt;width:100%" placeholder="Emri juaj" name="emri"> </input></td>
					</tr>
					<tr >
					  <td style="padding-left:18px; background:url(css/images/navigation-border.png);">Nga:</td> 
					  <td><input type="text" style="font-size:14pt;width:100%" placeholder="Emaili juaj" name="emailNga"> </input></td>
					</tr>
					<tr >
					  <td style="padding-left:18px; background:url(css/images/navigation-border.png);">Pass:</td>
					  <td><input type="password" style="font-size:14pt;width:100%" placeholder="Passwordi juaj" name="passNga"> </input></td></tr>
					<tr >
					  <td style="padding-left:18px; background:url(css/images/navigation-border.png);">Te:</td> 
					  <td><input type="text" style="font-size:14pt;width:100%" placeholder="Destinacioni" name="email"> </input></td>
					</tr>
					<tr>
					  <td style="padding-left:18px; background:url(css/images/navigation-border.png);">Subjekti:</td> 
					  <td><input type="text" style="font-size:14pt;width:100%" placeholder="Titulli i mesazhit" name="subject"> </input></td>
					</tr>
					<tr>
					  <td style="padding-left:18px; background:url(css/images/navigation-border.png);">Cc:</td> 
					  <td><input type="text" style="font-size:14pt;width:100%" placeholder="Cc:" name="cc"> </input></td>
					</tr>
					<tr>
					  <td style="padding-left:18px; background:url(css/images/navigation-border.png);background-size: 98px 205px;background-repeat: no-repeat;" width=80px>Komenti:</td> 
					  <td height=200px><textarea style="font-size:14pt; resize: none; width:100%; height:100%" name="comment" > </textarea></td>
					</tr>
				  </table>
				  <input type="submit" value="Dergo" name="dergo" style="margin-left:598px;width:100px"></input>
				</form>
				
              <!-- end of post-cnt -->
			  
			  
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
			<li><a href="aboutus.php">Rreth nesh</li>
            <li><a href="kontakt_email.php">Na kontakto</li>
			<li><a href="privacyp.html">Privacy Policy</li>
		  </ul>
        </nav>
        <p class="copy">Copyright &copy;<?php echo date("Y");?> <span>|</span> RISHIKinO. Design by Grupi 4</p>
      </div>
    </div>
    <!-- end of shell -->
  </div>
</div>
<!-- end of wrapper -->
</body>
</html>