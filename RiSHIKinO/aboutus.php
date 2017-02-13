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
                  class Anetari
                {
                    public $emri;
                    public $mbiemri;
                    private $mosha = array();
                    public $gjinia;
                    public $email;
                    public $useri;
                    
                    public function __set($msh,$vl)         //pa kete nuk mund tju qasemi parametrave privat
                    {
                        $this->mosha[$msh] = $vl;
                    }
                    public function __get($msh)
                    {
                        return $this->mosha[$msh];
                    }
                }
                
                class TeDhenat extends Anetari
                {
                    public $fakulteti;
                    public $drejtimi;
                    public $viti;
                    
                    public function __construct()
                    {
                        $this->fakulteti = "Fakulteti i Inxhinierise Elektrike dhe Kompjuterike";
                        $this->drejtimi= "Kompjuterike";
                        $this->viti= "Viti i dyte";
                    }
                }
                
                $Anetari1 = new Anetari;
                $Anetari1->emri = "Arton";
                $Anetari1->mbiemri = "Hoti";
                $Anetari1->mosha = 22;
                $Anetari1->gjinia = "Mashkull";
                $Anetari1->email = "arti._3@hotmail.com";
                $Anetari1->useri = "ah";

				//-   user: au, gk,mk, ma
                
                $teDhenat = new TeDhenat;
      ?>  
<!DOCTYPE html>
<html>
<head>
    <style>.anetar{margin-top:5px;border-radius:50px}
        img{border-radius:100px;}
        
        </style>
<title>RISHIKinO</title>
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
        <section class="content" style="width:100%">
          <!-- post -->
          <div class="post">
            <!-- post-inner -->
            <div class="post-inner" >
              
              <div class="img-holder" > 
                  <h1> <center> Administratori i faqes </center> </h1>
                  <div class="anetar" style="width:100%; height:200px; border:1px white solid; align:left; display: inline-block;">
                       <table  style="width:100%">
                            <tr>
                              <td style="width:150px">
                                  <img style="width:150px;height:150px; border:1px white dotted; align:left;margin:5px;" src="css/images/ah.jpg"></td>
                                      <td  style="text-align:left;padding-left:40px">
                                  <p>
                                      Emri: <?php echo $Anetari1->emri;?> <br/>
                                      Mbiemri: <?php echo $Anetari1->mbiemri;?> <br/>
                                      Mosha: <?php echo $Anetari1->mosha;?> <br/>
                                      Gjinia: <?php echo $Anetari1->gjinia;?> <br/>
                                      Email: <?php echo $Anetari1->email;?> <br/>
                                      Fakulteti: <?php echo $teDhenat->fakulteti;?> <br/>
                                      Drejtimi: <?php echo $teDhenat->drejtimi;?> <br/>
                                      Viti: <?php echo $teDhenat->viti;?> <br/>					  
									                                     
                                  </p></td>
                            </tr>
                            <tr>
                              <td><pre>          <?php echo $Anetari1->useri; ?> </pre></td>
                              <td></td>
                            </tr>
                          </table> 
                  </div>   
                  
                  
         
            </div>
            <!-- post-inner -->
          </div>
          
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
        <p class="copy"><?php echo "Koha: " . date("h:i:sa");?><span>|</span> Copyright &copy; 2016-<?php echo date("Y");?> <span>|</span> RISHIKinO. Design by Grupi 4</p>
      </div>
    </div>
    <!-- end of shell -->
  </div>
</div>
<!-- end of wrapper -->
</body>
</html>