<?php 
session_start();
        require ('lidhjamedb.php');
        function ErroriIm($errno, $errstr, $errfile, $errline)  
	{
		if (!(error_reporting() & $errno)) {
			// ky error nuk hyn ne kod
			return;
		}
		$errstr="Keni vendosur nje pershkrim shume te gjate ";
		switch ($errno) {
		case E_USER_ERROR:
			echo "<b>Errori Im</b> [$errno] $errstr<br />\n";
			echo "   Gabim fatal ne rreshtin $errline ne fajlin $errfile";
			echo ", PHP " . PHP_VERSION . " (" . PHP_OS . ")<br />\n";
			echo "Po Mbyllet...<br />\n";
			exit(1);
			break;

		case E_USER_WARNING:
			echo "<b>Verejtje Ime </b> [$errno] $errstr<br />\n";
			break;
		case E_USER_NOTICE:
			echo "<b>Kujdes</b> [$errno] $errstr<br />\n";
			break;
		default:
			echo "Kete lloj gabimi nuk e njohim: [$errno] $errstr<br />\n";
			break;
		}

		/* Don't execute PHP internal error handler */
		return true;
	}
	 set_error_handler('ErroriIm');
        
        $limit=200;
         if(isset($_POST['shtofilm']))
         { 
             if(strlen($_POST['Pershkrimi'])>$limit) {              
                 throw new ErroriIm();                
           }         
         }
         if (isset($_SESSION['username']))
    {
        $linku1 = "#";
        $id1 = "";
        $var1 = "Shkycja";
        $linku2 = "admini.php";
        $var2 = "Profili juaj";
        $dukja = "visible";
        $dukja2 = "hidden";
        
//        if(isset($_SESSION['numerimi']))
//        {$_SESSION['numerimi']+=1;}
//        else
//        {$_SESSION['numerimi']=1;}
    }
    else
    {
        $linku1 = "#";
        $id1 = "show_login";
        $var1 = "Kycja";
        $linku2 = "regjistro.php";
        $var2 = "Regjistrohu";
        $dukja = "hidden";
        $dukja2 = "visible";
        
//        if(isset($_SESSION['numerimi']))
//        {$_SESSION['numerimi']+=1;}
//        else
//        {$_SESSION['numerimi']=1;}
    }
    
    if(isset($_POST['fshij'])){
            require ('lidhjamedb.php');
            
            $idfilm = addslashes($_POST['idf']);
            
            
            
            $sql = "SELECT * FROM filmat where IDF=$idfilm";
                        $retval = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($retval) > 0) {
                        while ($row=mysqli_fetch_assoc($retval))
                            {
                                $sql1="DELETE from filmat WHERE IDF=$idfilm";
                                $retval1 = mysqli_query($conn, $sql1);
                          }
            }}
            
            if(isset($_POST['shtofilm'])){
            $titulli = $_POST['Titulli'];        //validon per injection
            $foto =  $_POST['FotoShtegu'];
            $trailer =  $_POST['TrailerShtegu'];
            $pershkrimi =  $_POST['Pershkrimi'];
            $fitimet =  $_POST['Fitimet'];
            $lansimi =  $_POST['Lansimi'];
            $zhanri =  $_POST['Zhanri'];


            $sql = "INSERT INTO filmat(Titulli,Foto,Trailer,Pershkrimi,Fitimet,Lansimi,ZhandrriNje)
            VALUES ('$titulli','$foto','$trailer','$pershkrimi',$fitimet,'$lansimi',$zhanri)";
            $retval = mysqli_query( $conn, $sql );
            if(! $retval )
            {
            die('Nuk mund te shtoni kete film! ' . mysqli_connect_error());
            }
            else{
                
            }
            }
    require ('lidhjamedb.php');
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Administro - RISHIKinO</title>
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
<style>
.inTextSelect {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	font-size:12px;
}
label{font-size:12px;}
input[type=text]:focus {
    background-color: lightgreen;
}

.inSubmit {
    width: 100%;
	height:30px;
    background-color: #45a049;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover{
    background-color: #1cff61;
}

</style>
<body>
<!-- wrapper -->
<div id="wrapper">
  <div class="light-bg">
    <!-- shell -->
    <div class="shell">
      <!-- header -->
      <div class="header">
        
		<!-- socials -->
        <div class="socials" style="width:500px;left:450px;"> 
            <a href="logout.php" id="<?php $id1 ?>"><b><?php echo $var1; ?></b> </a>
            
            
         <div id = "loginform"> 
        
            <form method = "post" action = "<?php $_PHP_SELF ?>">
                <input type = "text" id = "login" placeholder = "filan.fisteku" name = "userid">
                <input type = "password" id = "password" name = "userpass" placeholder = "password">
                <input type = "submit" id = "dologin" value = "Login" name="add" >
            </form>
        </div>
                
                <a href="<?php echo $linku2; ?>" class="regjistrimi"><b><?php echo $var2?></b></a>
		<a href="#" class="facebook-ico"><img src="css/images/fb.png"></a>
		<a href="#" class="twitter-ico"><img src="css/images/twitter.png"></a>
		</div>
        <!-- end of socials -->
        
		<h1 id="logo"><a href="index.php" alt="RISHIKinO" width="272px;" height="75px;">RISHIKinO</a></h1>
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
        <section class="content">
          <!-- post -->
          <div class="post">
            <!-- Pjesa ku admini sheh formen -->
            <div class="post-inner">
              <h3 align="center">I N S E R T O </h3><br>
             <form method="post" action="<?php $_PHP_SELF ?>">  
				<label for="fTitulli" id="abc">Emri i filmit</label>
				<input class="inTextSelect" type="text" id="fTitulli" name="Titulli">

				<label for="fotoShtegu">Shtegu i fotos s&euml; filmit</label>
				<input class="inTextSelect" type="text" id="fotoShtegu" name="FotoShtegu">
				
				<label for="fShtegu">Shtegu i trailerit</label>
				<input class="inTextSelect" type="text" id="fShtegu" name="TrailerShtegu">
				
				<label for="fPershkrimi">P&euml;rshkrimi i filmit</label>
				<input class="inTextSelect" type="text" id="fPershkrimi" name="Pershkrimi">
				
				<label for="fFitimet">Fitimet e filmit</label>
				<input class="inTextSelect" type="text" id="fFitimet" name="Fitimet">
				
				<label for="fLansimi">Lansimi i filmit</label>
				<input class="inTextSelect" type="text" id="fLansimi" name="Lansimi">				
				
				<label for="fZhanri">Zhanri i filmit</label>
				<select class="inTextSelect" id="fZhanri" name="Zhanri">
                                    <option value="1000">Aksion</option>
                                    <option value="1001">Komedi</a></li>
                                    <option value="1002">Familjare</a></li>
                                    <option value="1003">Histori</a></li>
                                    <option value="1004">Mister</a></li>
                                    <option value="1005">Fanta-Shkenc&euml;</a></li>
                                    <option value="1006">Luft&euml;</a></li>
                                    <option value="1007">Dram&euml;</a></li>
                                    <option value="1008">Aventur&euml;</a></li>
                                    <option value="1009">Krim</a></li>
                                    <option value="1010">Fantazi</a></li>
                                    <option value="1011">Horror</a></li>
                                    <option value="1012">Thriller</a></li>
				</select>
				 <p></p>
				<input class="inSubmit" type="submit" value="INSERTO" name="shtofilm">
			  </form>
			  <br></br>
              <h3 align="center"> F S H I J </h3><br>
			  <form method="post" action="<?php $_PHP_SELF ?>">  
				<label for="fTitulli" id="abc">ID E FILMIT:</label>
				<input class="inTextSelect" type="text" id="fTitulli" name="idf">
				<p></p>
				<input class="inSubmit" type="submit" value="FSHIJ" name="fshij">
			  </form>
              
              
			</div>
            <!-- Pjesa ku admini sheh formen -->
          </div>
          <!-- end of post -->
          
        </section>
        <!-- end of content -->
        <!-- sidebar -->
        <aside class="sidebar">
          <div class="widget">
            <h3 class="widgettitle">Kategorit&euml;</h3>
            <ul>
                <li><a href="index4.php?id=1000">Aksion</a></li>
              <li><a href="index4.php?id=1001">Komedi</a></li>
              <li><a href="index4.php?id=1002">Familjare</a></li>
              <li><a href="index4.php?id=1003">Histori</a></li>
              <li><a href="index4.php?id=1004">Mister</a></li>
              <li><a href="index4.php?id=1005">Fanta-Shkenc&euml;</a></li>
              <li><a href="index4.php?id=1006">Luft&euml;</a></li>
              <li><a href="index4.php?id=1007">Dram&euml;</a></li>
              <li><a href="index4.php?id=1008">Aventur&euml;</a></li>
              <li><a href="index4.php?id=1009">Krim</a></li>
              <li><a href="index4.php?id=1010">Fantazi</a></li>
              <li><a href="index4.php?id=1011">Horror</a></li>
              <li><a href="index4.php?id=1012">Thriller</a></li>
            </ul>
          </div>
          <div class="widget socials-widget">
            <h3 class="widgettitle">Get Connected</h3>
            <ul>
              <li><a href="#" class="facebook-ico">Facebook</a></li>
              <li><a href="#" class="twitter-ico">Twitter</a></li>
              <li><a href="#" class="you-tube-ico">Youtube</a></li>
            </ul>
          </div>
        </aside>
        <!-- end of sidebar -->
        <div class="cl">&nbsp;</div>
      </div>
      <!-- end of main -->
      <div class="footer">
        <nav class="footer-nav">
          <ul>
			<li><a href="aboutus.php">Rreth nesh</li>
                        <li><a href="kontakt_email.php">Na kontakto</li>
                        <li><a href="privacyp.html">Privacy Policy</li></a>
                        
		  </ul>
        </nav>
        <p class="copy"><?php echo "Koha: " . date("h:i:sa");?><span>|</span> Copyright &copy; <?php $copy_date = "1999";
   $copy_date = preg_replace("([0-9]+)", "2016", $copy_date);
   
   print $copy_date;?> <span>|</span> RISHIKinO. Design by Grupi 4</p>
      </div>
    </div>
    <!-- end of shell -->
  </div>
</div>
<!-- end of wrapper -->
</body>
</html>