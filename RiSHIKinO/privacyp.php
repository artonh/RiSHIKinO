<?php
session_start();
$_SESSION['Mesazhi'] = "Keni vizituar faqen tone ";
    if( isset( $_SESSION['numeruesi'] ) )
        {
        $_SESSION['numeruesi'] += 1;
        }
        else
        {
        $_SESSION['numeruesi'] = 1;
     }
    
    if(isset($_POST['add']) && !empty($_POST['userid']) && !empty($_POST['userpass']))
            {
            require ('lidhjamedb.php');

            $id = addslashes($_POST['userid']);
            $pass = addslashes($_POST['userpass']);

            $sql = "SELECT username,Password FROM perdoruesit where username='$id' and Password='$pass'";
            $retval = mysqli_query($conn, $sql);
            if (mysqli_num_rows($retval) ==1){
                {
                    
                    echo "<script>
                        alert('Jeni loguar me sukses!');
                        </script>";
                    $_SESSION['username'] = $id;
                    $_SESSION["prsh"] = '
                    <?php
                    function test(){
                    echo "'.$id.'";}
                    ?>';
                }
                
                
            }
            else
            {
            $rezultati = "Usernami ose passwordi eshte gabim!";
            echo "<script>
                    alert('Keni shkruar username ose passwordin gabim');
                    </script>";
            }} 
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
        $linku1 = "#";
        $id1 = "show_login";
        $var1 = "Kycja";
        $linku2 = "regjistro.php";
        $var2 = "Regjistrohu";
        $dukja = "hidden";
        $dukja2 = "visible";
        $profili = "#";
        $teksti = "Kycja";
     }   
        //perdorimi i referencave
     	 $emrfaqes = 'RISHIK';       //TE PRIVACY POLICY 
	 $detajet = array('Filmat', 'Toutorialet');  
	 //lidhja e anetareve te vektorit me reference  
	 $arr = array(&$emrfaqes, &$detajet[0], &$detajet[1]);  
	 $arr[0]=$arr[0]."inO";  
	 $arr[1]=$arr[1]." me te ri";   
	 $arr[2]=$arr[2]." me te shikuara";  
	
         //i foneve me refernec
         $var = 0;  $nr = NULL;  
	 function &Shembull()
	 {   
		 $var =&$GLOBALS["var"]; # i qasemi variables globale $var;   
		 $var++;   
		 return $var; 
	 }  
	 $nr = &Shembull();  	 
//	 unset($var);
//	 unset($nr);	//dhe ne fund e kemi liru  memorien
	
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Privacy Policy</title>
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
#ppBody
{
    font-size:11pt;
	margin-left:100px;
	
    text-align:justify;
}

#ppHeader
{
    font-family:verdana;
    font-size:21pt;
}

.ppConsistencies
{
    display:none;
}

</style>
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
        <div class="socials" style="width:500px;left:450px;"> 
            <a style="visibility: <?php echo $dukja;?>" href="logout.php" id="<?php $id1 ?>"><b><?php echo $var1; ?></b> </a>
            <a href="<?php echo $profili; ?>" id="<?php echo $id1;?>"><b><?php echo $teksti;; ?></b> </a>
            
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
        <section  stytle="width:1002px">
          <!-- post -->
          <div class="post">
            <!-- post-inner -->
            <div class="post-inner" id='ppHeader'> <?php echo $emrfaqes;?>.com <br> Privacy Policy</br>
				<div style="font-size:12px"><br></br>
				<div class='innerText'>Kjo politike privacy eshte hartuar per te sherbyer me mire ata te cilet jane te shqetesuar me 
				menyren se si eshte duke u perdorur 'informacion personalisht te identifikueshme 'e tyre (PII) online. 
				PII, si&ccedil; perdoret ne ligjin e privatesise amerikane dhe te sigurise se informacionit, eshte informacioni 
				qe mund te perdoren me vete, ose me te dhena te tjera per te identifikuar, kontakt, ose te gjetur nje person te vetem, 
				ose per identifikimin e nje individi ne kontekstin. Ju lutem lexoni privacy policy tone me kujdes per te marre nje kuptim 
				te qarte se si ne mbledhim, perdorim, te mbrojtur ose ndryshe te trajtoje informacionin tuaj personalisht identifikueshme 
				ne perputhje me faqen tone te internetit.<br></div><span id='infoCo'></span><br><div class='grayText'><strong>&Ccedil;fare 
				informacioni personal ne mbledhim nga njerezit qe vizitojne blog tone, website ose app?</strong></div><br />
                                <div class='innerText'>Kur urdheron ose regjistrimit ne faqen tone, sipas rastit, ju mund te kerkohet te shkruani emrin tuaj, adrese e-mail, numrin e telefonit apo te dhena te tjera per te ju ndihmoje me pervojen tuaj.</div><br><div class='grayText'><strong>Kur ne mbledhim informacion?</strong></div><br /><div class='innerText'>Kur urdheron ose regjistrimit ne faqen tone, sipas rastit, ju mund te kerkohet te shkruani emrin tuaj, adrese e-mail, numrin e telefonit apo te dhena te tjera per te ju ndihmoje me pervojen tuaj.</div><br> <span id='infoUs'></span><br><div class='grayText'><strong>Si mund te perdorim ne informacionin tuaj? </strong>
                                </div><br /><div class='innerText'> Ne mund te perdorim informacionin qe ne mbledhim nga ju kur ju regjistroheni, beni nje blerje, per t'iu pergjigjur nje studim ose te nje marketingut te komunikimit, shfletoj faqen e internetit, ose nese permban njeren nga menyrat e meposhtme:<br><br></div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Per te personalizoni pervojen perdoruesit dhe per te na lejoje per te ofruar llojin e permbajtjes dhe produkt ofertat ne te cilen ju jeni me te interesuar. </div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Per te permiresuar faqen tone te internetit ne menyre qe te sherbeje me mire ju.</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Qe te na lejoje ne te ju sherbejme sa me mire ne baze te kerkesave tuaja.</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Per te procesuar me shpejt  transaksionet tuaja. </div>
                                <div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Per te kerkuar per vleresimet dhe kritikat e sherbimeve ose produkteve</div><span id='infoPro'></span><br><div class='grayText'><strong>Si I mbrojme ne informatat e vizitoreve?</strong></div><br /><div class='innerText'>Ne nuk perdorim vulnerability scanning and/or scanning to PCI standards.</div><div class='innerText'>Ne nuk mbledhim informacione per credit kartela.</div><div class='innerText'>Ne nuk perdorim Malware Scanning.<br><br></div><span id='coUs'></span><br><div class='grayText'>
                                    <?php
                                    
                                        $vitet = array("Aksion"=>35, "Komedi"=> "33", "Horror"=>"30");
                                        echo"Gjate vitit 2015-2016 sipas statistikave kemi pasur <br>";
                                            arsort($vitet);
                                            foreach ($vitet as $key => $value) {
                                                 echo "Per Zhandrin: ".$key.", Kemi pasur kaq ".$value." filma<br>";
                                            }
                                            echo "<br>";                                            
                                    
                                            ?>
                                    <strong>A perdorim ne 'cookies'?</strong></div><br /><div class='innerText'>Po. Cookies jane fajlla te vegjel te cilat sajti ose sherbimi shperndares I transferon ne hard drive te kompjuterit tuaj perms nje web shfletuesi(nese ju e lejoni) te cilat lejojne sistemet e sajtit apo service provider te njohin shfletuesin tuaj dhe te mbajne ne mend disa prej kerkimeve tuaja te fundit.Ato ne gjithashtu I perdorim per te na ndihmuar te kuptojme preferencat tuaja duke u bazuar ne kerkimet dhe aktivitete tuaja ne sajtin tone qe na ndihmon ne poashtu tju sherbejme sa me cilesisht.</div>
                                <div class='innerText'><br><strong>Ne perdorim cookies per:</strong></div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><?php echo $nr; ?></strong>. Per te kuptuar dhe ruajtur preferencat e shfytezuesit per viziten e tij te ardhshme.</div>
                                <div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><?php Shembull(); echo $nr; unset($nr); unset($var);?></strong>.  Per te mbajtur ne hap marketingun.</div><div class='innerText'><br>Ju mund te zgjidhni te keni kompjuterin tuaj ju terhequr verejtjen &ccedil;do here nje cookie eshte derguar, ose ju mund te zgjidhni per te fikur te gjitha cookies. Ju beni kete nepermjet shfletuesit tuaj (si Internet Explorer) settings. &ccedil;do shfletues eshte pak me ndryshe, keshtu qe shikoni ne browser's Help menu tuaj per te mesuar menyren korrekte per te modifikuar cookies tuaj.<br></div><br><div class='innerText'>Nese ju &ccedil;aktivizoni cookies off, disa karakteristika do te jete me aftesi te kufizuara nuk do te ndikoje ne pervojen e perdoruesit qe e bejne pervoja faqen tuaj me te efektshme dhe disa nga sherbimet tona nuk do te funksionoje si duhet.</div><br><br><span id='trDi'></span><br>
                                <div class='grayText'><strong> <?php echo "<br>Ne kete faqe mund te gjeni:<br>".$detajet[0] ."<br>".$detajet[1] ."<br><br>";?>Ne nuk e shesim, tregtojme, ose  transferojme per palet jashte informacionin tuaj personal.</strong></div><br /><span id='trLi'></span><div class='blueText'><strong>Kontaktoni me ne</strong></div><br /><div class='innerText'>Nese keni ndonje pyetje ne lidhje me kete privacy policy ju mund te na kontaktoni neve duke shfytezuar informatat e meposhtme.<br><br></div><div class='innerText'>www.rishikino.com</div><div class='innerText'>rishikino</div>Pr, Ks 10000 
				<div class='innerText'>Kosovo,Prishtina</div>
				<div class='innerText'>rishikino@rishikino.com</div>
				</div>
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
                        <li><a href="privacyp.php">Privacy Policy</li></a>
                        <li style="color:white"><?php if(isset($_SESSION['Mesazhi']))
                        {echo $_SESSION['Mesazhi']. $_SESSION['numeruesi']. "</b> here gjate ketij sesioni";}
                        else { echo "";}
                        ?></li>
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