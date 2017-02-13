<?php
if(isset($_POST['shtofilm']))
{
$dbhost = 'localhost';
$dbuser = 'user';
$dbpass = 'user';
$db = 'projektiv1';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
if(! $conn )
{
die('Nuk mund te lidhet me databaze: ' . mysqli_connect_error());
}


$titulli = addslashes($_POST['Titulli']);        //validon per injection
$foto =  addslashes($_POST['FotoShtegu']);
$trailer =  addslashes($_POST['TrailerShtegu']);
$pershkrimi =  addslashes($_POST['Pershkrimi']);
$fitimet =  addslashes($_POST['Fitimet']);
$lansimi =  addslashes($_POST['Lansimi']);
$zhanri =  addslashes($_POST['Zhanri']);


$sql = "INSERT INTO filmat(Titulli,Foto,Trailer,Pershkrimi,Fitimet,ZhandrriNje)
VALUES ('$titulli','$foto','$trailer','$pershkrimi',$fitimet,$zhanri)";
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
die('Could not enter data: ' . mysqli_connect_error());
}
else
{
//header('Location: index.php');
 echo "<script>
alert('Te dhenat jane ruajtuar me sukses!');
window.location.href='index.php';
</script>";

}

mysqli_close($conn);

}
?>