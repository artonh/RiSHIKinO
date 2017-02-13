<?php 
session_start();
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
     $errstr="Keni mbushur komentin me me shume se 200 karaktere";
     $errcontext="Gabim ne mbushje te komentit. Mbusheni edhe njehere me me pak se 200karaktere";
	 function errorHandler( $errno, $errstr, $errfile, $errline, $errcontext) 
	 { 
             global $errstr;
            global $errcontext;
	   echo"\n\n---ErrNr---\n". $errno.
	   "\n\n---ErrFjalia---\n". $errstr.
	   "\n\n---ErrFile---\n".$errfile.
	   "\n\n---ErrRreshti---\n".$errline.
	   "\n\n---ErrKonteksti---\n".$errcontext."\n";
	 }
         set_error_handler('errorHandler');
         
         $limit=200;
         if(isset($_POST['dergo']) && (strlen($_POST['comment'])>$limit)) {             
                 throw new errorHandler();                
         }
         
if(isset($_POST['dergo'])&& !empty($_POST) && isset($_SESSION))
{
    require 'lidhjamedb.php';
$komenti = $_POST["comment"];
$id = $_SESSION['username'];
$idf = $_GET["id"];
$nota = $_POST["nota"];

$sql = "INSERT INTO komentet(username,IDF,Komenti,Data,Vleresimi)
VALUES ('$id','$idf','$komenti',NOW(),'$nota')";
$retval = mysqli_query( $conn, $sql );
    if(!$retval )
    {
    die('Ju tashme keni shkruar nje koment ose nuk jeni te lloguar ' . mysqli_connect_error());
    }
    else{
        echo "<script>
                alert('Falemnderit per komentin tuaj');
                </script>";
}}
    
 ?>
<!DOCTYPE html>
<html>
<head>
<title>RISHIKinO</title> <p>
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
.inSubmit {
    width: 100%;
	height:30px;
    background-color: #45a049;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }

input[type=text]:focus {
    background-color: lightgreen;
    
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
            <a style="visibility: <?php echo $dukja;?>" href="logout.php"  id="<?php $id1 ?>"><b><?php echo $var1; ?></b> </a>
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
        <section class="content">
          <!-- post -->
          
          <div class="post">
            <!-- post-inner -->
            <div class="post-inner">
              <header>
                <h2><a href="#">
                    <?php 
                     require 'lidhjamedb.php';
                       $sql = 'SELECT * FROM filmat where IDF='.$_GET["id"];
                        $retval = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($retval) > 0) {
                        while ($row=mysqli_fetch_assoc($retval))
                            {
                            echo $row["Titulli"];
                            }
                            $sqlkomanda = "SELECT * FROM komentet";
            $retvalkomanda = mysqli_query($conn, $sqlkomanda);
            $rowkomanda=mysqli_fetch_array($retvalkomanda);
            $sqlkomanda2= "SELECT AVG(Vleresimi) as Nota from komentet where IDF=".$rowkomanda['IDF'];
                $retvalkomanda2 = mysqli_query($conn, $sqlkomanda2);
                while ($row5=mysqli_fetch_array($retvalkomanda2))
                {
                   $nota1 = $row5["Nota"];
                   if($nota1>1 && $nota1 <2 )  {  $notafoto="rating1.png"; }  
                    else if($nota1>=2 && $nota1 <4 )  {  $notafoto="rating2.png"; }  
                    else if($nota1>=4 && $nota1 <6 )  {  $notafoto="rating3.png"; }                  
                    else if($nota1>=6 && $nota1 <8 )  {  $notafoto="rating4.png"; }                
                    else if($nota1>=8 && $nota1 <10 )  {  $notafoto="rating5.png"; }
                    else { $notafoto="rating1.png"; }
                }
                        }
                    ?>
                    </a></h2>
                <p class="tags"><a href="#"><?php 
                    $sql = "SELECT Tipi FROM zhandrri where IDZ=(select ZhandrriNje from filmat where IDF=".$_GET["id"].")";
                    $retval = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($retval) > 0) {
                    while ($row=mysqli_fetch_assoc($retval))
                    {
                    echo $row["Tipi"];
                    }}
                ?></a> <a href="#"><?php 
                    $sql = "SELECT Tipi FROM zhandrri where IDZ=(select ZhandrriDy from filmat where IDF=".$_GET["id"].")";
                    $retval = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($retval) > 0) {
                    while ($row=mysqli_fetch_assoc($retval))
                    {
                    echo $row["Tipi"];
                    }}
                ?></a></p>
                <div class="cl">&nbsp;</div>
              </header>
              <div class="img-holder"> <a href="#"><img src="css/images/<?php 
               $sql = 'SELECT * FROM filmat where IDF='.$_GET["id"];
                        $retval = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($retval) > 0) {
                        while ($row=mysqli_fetch_assoc($retval))
                            {
                            echo $row['Foto'];
                            }
                        }?>"></a> <a href="css/images/<?php 
               $sql = 'SELECT * FROM filmat where IDF='.$_GET["id"];
                        $retval = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($retval) > 0) {
                        while ($row=mysqli_fetch_assoc($retval))
                            {
                            echo $row['Foto'];
                            }
                        }?>" class="btn-full-image popup"><span>FULL IMAGE</span></a> </div>
              <!-- meta -->
              <div class="meta">
                <p class="date">Data e lansimit: <?php 
               $sql = 'SELECT * FROM filmat where IDF='.$_GET["id"];
                        $retval = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($retval) > 0) {
                        while ($row=mysqli_fetch_assoc($retval))
                            {
                            echo $row['Lansimi'];
                            }
                        }?></p>
                <div class="right">
                  <div class="rating-holder">
                    <p>RATING</p>
                    <div> <img src='css/images/<?php echo $notafoto;?>'/><?php echo $nota1; ?></div>
                  </div>
                  <a href="#" class="comments">Komente :<?php 
                        $sql = 'SELECT * FROM filmat where IDF='.$_GET["id"];
                        $retval = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($retval) > 0) {
                        while ($row=mysqli_fetch_assoc($retval))
                            {
                            echo $row['NrKomenteve'];
                            }
                        }?></a> </div>
                <div class="cl">&nbsp;</div>
              </div>
              <!-- post-cnt -->
              <div class="post-cnt" style="border:1px solid green; border-radius: 4px;" >
                  <h3 align="center" style="margin-top: 5px"> Pershkrimi i filmit </h3><br>
                  <p style="margin-left: 20px;">
                      <?php 
                        $sql = 'SELECT * FROM filmat where IDF='.$_GET["id"];
                        $retval = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($retval) > 0) {
                        while ($row=mysqli_fetch_assoc($retval))
                            {
                            echo $row['Pershkrimi'];
                            }
                        }?>
                  </p>
                  <br>
              </div>
              <!-- end of post-cnt -->
              <div style="border:1px solid green; border-radius: 4px;" >
                  <h3 align="center"  style="margin-top: 5px"> Komentet e filmit </h3>
                  <br>
                <form name=""  action="" method="post" style="font-size:14px;">
                    <?php
                        require 'lidhjamedb.php';
                        $sql = "SELECT * FROM komentet where IDF='".$_GET['id']."'";
                        $retval = mysqli_query($conn, $sql);
                        while ($row=mysqli_fetch_array($retval))
                        {
                
                echo "<table  width=625px >
                    <tr>
                    <td style='padding-left:18px; background:url(css/images/navigation-border.png);background-size: 98px 110px;background-repeat: no-repeat;' width=80px>".$row['username']."</td> 
                    <td height=105px><textarea style='font-size:14pt; resize: none; width:100%; height:100%' disabled name='comment' >".$row["Komenti"] ."</textarea></td>
                    </tr>
                    </table>
                 ";}
                 ?>
                </form>
                <br>
                <form name=""  action="<?php $_PHP_SELF ?>" method="post" style="font-size:14px;">
                    <table  width=625px >
                        <tr>
                          <td style="padding-left:18px; background:url(css/images/navigation-border.png);background-size: 98px 110px;background-repeat: no-repeat;" width=80px>Komento:</td> 
                          <td height=105px><textarea style="font-size:14pt; resize: none; width:100%; height:100%" name="comment" > </textarea></td>
                        </tr>
                        <tr><td style="padding-left:18px;">Nota: </td>
                        <td><select name="nota">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            </select></td>
                        </tr>
                    </table>
                    <input class="inSubmit" type="submit" value="Komento" name="dergo" >
                </form>
              </div>
            </div>
            <!-- post-inner -->
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
          <div class="widget">
            <h3 class="widgettitle">Opening This Week</h3>
            <ul>
                <?php require 'lidhjamedb.php' ;
                $sql = "SELECT * FROM filmat order by Lansimi limit 5";
                $retval = mysqli_query($conn, $sql);
                while ($row=mysqli_fetch_array($retval))
                {
                    echo '<li><a href="#">'.$row["Titulli"].'</a></li>';
                }?>
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
			<li><a href="#">About Us</li>
			<li><a href="#">Privacy Policy</li>
		  </ul>
        </nav>
        <p class="copy"><?php echo "Koha: " . date("h:i:sa");?><span>|</span> Copyright &copy; <?php $copy_date = "1999";
   $copy_date = preg_replace("([0-9]+)", "2016", $copy_date);
   
   print $copy_date; ?> <span>|</span> RISHIKinO. Design by Grupi 4</p>
      </div>
    </div>
    <!-- end of shell -->
  </div>
</div>
<!-- end of wrapper -->
</body>
</html>