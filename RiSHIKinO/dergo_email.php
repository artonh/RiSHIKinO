<?php
 
if(isset($_POST['dergo'])) 
{ 
	 
    function clean_string($string) { 
      $bad = array("content-type","bcc:","to:","cc:","href"); 
      return str_replace($bad,"",$string); 
    }
	
    function died($error) { 
        // your error code can go here 
        echo "Na vjen keq, kodi ka gabime gjate dergimit. "; 
        echo "Kto errore do te shfaqen me poshte.<br /><br />"; 
        echo $error."<br /><br />"; 
        echo "Ju lutemi, shkoni prapa dhe provoni prape mbushni formen.<br /><br />"; 
        die(); 
    }     
 
    // validimi nese te dhenat ekzistojn
    if( !isset($_POST['email']) || 
        !isset($_POST['subject']) ||
		!isset($_POST['emailNga']) || 	
		!isset($_POST['passNga']) ||
		!isset($_POST['emri']) || 		
        !isset($_POST['comment'])) 
		{        died('Na vjen keq, dicka shkoi gabim.');    }
 
	$name=$_POST['emri'];
	$email = $_POST['emailNga']; //
	$msg = $_POST['comment']; // required
	$to = $_POST['email']; //
    $from = $email; 		//ktu vendosim var e imelles perkatese  required 
	$subject = $_POST['subject']; // not required 
	$mailcontent='Emri i derguesit: '.$name."\n".'Email-i i derguesit: '.clean_string($email)."\n"."Komenti i derguesit: \n".clean_string($msg)."\n";
	$host="ssl://smtp.gmail.com";
	$port="465";
	$username= $from;
	$password = $_POST['passNga']; 
	 
    
	$cc = $_POST['cc'];  
    $error_message = ""; 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$from)) { 
    $error_message .= 'Email nuk eshte valide.<br />'; 
  }
  if(!preg_match($email_exp,$to)) { 
    $error_message .= 'Email nuk eshte valide.<br />'; 
  }
 
  if(strlen($msg) < 2) { 
    $error_message .= 'Ju keni shkruajtur nje mesazh shume te shkurter (<2)<br />'; 
  }
 
  if(strlen($error_message) > 0) { 
    died($error_message); 
  } 
  
	$headers=array('From' => clean_string($from), 'To' => clean_string($to), 'Subject' => $subject);
	$mail=$smtp->send($to, $headers, $mailcontent);
	if($mail){echo "Emaili u dergua me sukses!";}
				else echo "Dergimi i emailit deshtoi!";   
    // $email_message = "";      
  
    // $email_message .= "Email: ".clean_string($email_from)."\n"; 
    // $email_message .= "Comments: ".clean_string($comments)."\n";    
      
 
// // create email headers
 
// $headers = 'From: '.$email_from."\r\n"."CC:".$cc."\r\n". 
// 'Reply-To: '.$email_from."\r\n" .'X-Mailer: PHP/' . phpversion();
 
// if(mail($email_to, $email_subject, $email_message, $headers)) { //ne localhost nuk dergohhet, por kur eshte ONLINE
      // echo "Emaili u dergua me sukses";}
// else echo "Dergimi i emailit ka deshtuar!";
?>
<!-- nese ka sukses atehere --> 
Faleminderit!
<?php 
} 
?>