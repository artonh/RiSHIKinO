<?php // inicializojme variablat ne null
$emri="";
$mbiemri="";
$email="";
$username="";
$konfirmoPassword="";
$password="";
$gjinia="";
$viti="";
$unepranoj="";




// Ne rastin kur shtypim Regjistro fillon ex i funk
if(isset($_POST['regjistro'])){
    
    if (empty($_POST["emri"])) 
    {
     echo "<script>
            alert('Emri duhet te plotesohet');
            </script>";
    } else 
    {
    $emri = test_input($_POST["emri"]);
    // shikojme nese emri permban vetem shkronja dhe hapesira
    if (!preg_match("/^[a-zA-Z ]*$/",$emri))
    {
         echo "<script>
            alert('Vetem Shkronjat e medha dhe hapsirat lejohen');
            </script>";
    }
    }

    if (empty($_POST["mbiemri"])) 
    {
          echo "<script>
            alert('Mbiemri duhet te plotesohet');
            </script>";
    } else 
    {
        $mbiemri = test_input($_POST["mbiemri"]);
        // shikojme nese mbiemri permban vetem shkronja dhe hapesira
        if (!preg_match("/^[a-zA-Z ]*$/",$mbiemri))
        {
             echo "<script>
            alert('Vetem Shkronjat e medha/vogela dhe hapsirat lejohen');
            </script>";
        }
    }

    if (empty($_POST["email"])) 
    {
        echo "<script>
            alert('Duhet te jepni Emailin');
            </script>";
    } else
    {
        $email = test_input($_POST["email"]);
        // shikojme nese email adresa eshte valide
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
        {
             echo "<script>
            alert('Forma e emailit nuk eshte valide');
            </script>";
        }
    }

    if (empty($_POST["username"])) 
    {
        echo "<script>
            alert('Username duhet te plotesohet');
            </script>";
    } else
    {
        $username = test_input($_POST["username"]);
        // shikojme nese username eshte valid
        if (!preg_match("/^[a-zA-Z ]*$/",$username))
            {
            echo "<script>
            alert('Username nuk eshte valid');
            </script>";
            }
    }
	
	if($_POST["password"]!=$_POST["konfirmoPassword"]){
		echo "<script>
            alert('Passwordet duhet te pershtaten!');
            </script>";
	}

    if (empty($_POST["password"])) 
    {
        echo "<script>
            alert('Jepni Passwordin tuaj');
            </script>";
    } else
    {
        $password = test_input($_POST["password"]);
        // shikojme nese passwordi eshte valid
        if (strlen($_POST["password"])<8)
        { echo "<script>
            alert('Password duhet te kete te pakten 8 karaktere');
            </script>";
        }
    }
   

    if (empty($_POST["gjinia"])) 
    {
         echo "<script>
            alert('Gjinia eshte obligative');
            </script>";
    } else 
    {
    $gjinia = test_input($_POST["gjinia"]);
    }

    if (empty($_POST["viti"])) 
    {
            echo "<script>
            alert('Jepni vitin');
            </script>";
    } else 
    {
    $viti = test_input($_POST["viti"]);
    }

    if (!isset($_POST["unepranoj"])) 
    {
        echo "<script>
            alert('Ju duhet te pranoni Terms of Policy');
            </script>";
    } else 
    {
    $unepranoj = test_input($_POST["unepranoj"]);    
    }

}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
