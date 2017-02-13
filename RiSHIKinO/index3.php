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
        <section class="content">
         
          <!-- post -->
          <?php   
          require 'lidhjamedb.php';
          
            $sql = "SELECT * FROM filmat order by Lansimi";
            $retval = mysqli_query($conn, $sql);
            while ($row=mysqli_fetch_array($retval))
                {
                    
                    $sql1 = "SELECT Tipi FROM zhandrri where IDZ=".$row["ZhandrriNje"];
                    $retval1 = mysqli_query($conn, $sql1);
                    while ($row1=mysqli_fetch_assoc($retval1))
                    {
                    $tipi = $row1["Tipi"];
                    }
                    $sql2 = "SELECT Tipi FROM zhandrri where IDZ=".$row["ZhandrriDy"];
                    $retval2 = mysqli_query($conn, $sql2);
                    while ($row2=mysqli_fetch_assoc($retval2))
                    {
                    $tipi2 = $row2["Tipi"];
                    }
                     
          echo "<div class='post'>
            <!-- post-inner -->
            <div class='post-inner'>
              <header>
                  <h2><a href='1film.php?id=".$row["IDF"]."'>". $row["Titulli"] . "</a></h2>
                <p class='tags'><a href='#'>".$tipi."</a> <a href='#'>".$tipi2."</a></p>
                <div class='cl'>&nbsp;</div>
              </header>
              <div class='img-holder'> <a href='1film.php?id=".$row["IDF"]."'><img src='css/images/".$row["Foto"]."'></a> <a href='css/images/".$row["Foto"]."' class='btn-full-image popup'><span>FULL IMAGE</span></a> </div>
              <!-- meta -->
              <div class='meta'>
                <p class='date' style='font-size:14px;'>Data e lansimit: ".$row['Lansimi']. "</p>
                <div class='right'>
                  <div class='rating-holder'>
                    <p>RATING</p>
                    <div class='rating'> <span style='width: 50%;'></span> </div>
                  </div>
                  <a href='#' class='comments'>Komente: ".$row["NrKomenteve"]. "</a> </div>
                <div class='cl'>&nbsp;</div>
              </div>
              <!-- end of meta -->
              <!-- post-cnt -->
              <div class='post-cnt'>
                <p>".$row["Pershkrimi"]." </p>
                <a href='1film.php?id='".$row["IDF"]." class='more'>ME SHUME</a> </div>
              <!-- end of post-cnt -->
            </div>
            <!-- post-inner -->
          </div>
          <!-- end of post -->
          <!-- post -->
          ";}
            
          ?>
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
            <h3 id="dy" class="widgettitle" onclick="loadDocument()">Te fundit:</h3>
            <ul id="nje">
            <script>
                    function loadDocument() {
                    var xhttp;
                     try{
                        // per Opera 8.0+, Firefox, Safari 
                        xhttp = new XMLHttpRequest();
                     }
                     catch (e){
                        // Per internet explorer :
                            try{
                           xhttp = new ActiveXObject("Msxml2.XMLHTTP");
                            }
                            catch (e) {
                                try{
                                xhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                }
                                catch (e){
                                    //
                                    alert("Ka ndodhur gabim me shfletuesin tuaj!");
                                    return false;
                                 }
                        }
                    }
                      xhttp.onreadystatechange=function() {
                        if (xhttp.readyState == 4 && xhttp.status == 200) {
                          document.getElementById("nje").innerHTML = xhttp.responseText;
                          document.getElementById("dy").innerHTML = "Me te vleresuarit:"
                        }
                      };
                      xhttp.open("GET", "user1.php", true);
                      xhttp.send();
                    }
                </script> 
                
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