<?php
$dbhost = 'localhost';
$dbuser = 'user';
$dbpass = 'user';
$db = 'projektiv1';
try
{
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
}
catch (Exception $e) {
    echo 'Nuk mund te lidhet me databaze: ',  $e->getMessage(), "\n";
}
//echo 'Connected successfully';
//echo "<br>";

//-----------------------------Krijimi i databazes -------------
//$sql = 'CREATE Database projektiv1';
//$retval = mysqli_query( $conn, $sql );
//if(! $retval )
//{
//die('Could not create database: ' . mysqli_connect_error());
//}
//echo "Database projektiv1 created successfully\n";
//echo "<br>";


//----------------------------Zhanri ---------------------------
//$sql = 'CREATE TABLE Zhandrri (
//IDZ integer auto_increment,
//Tipi varchar(30) NOT NULL,
//primary key (IDZ))';
//$retval = mysqli_query( $conn, $sql );
//if(! $retval )
//{
//die('Could not create table: ' . mysqli_connect_error());
//}
//echo "Table Zhandrri was created successfully\n";


//----------------------------FILMAT ---------------------------
//$sql = 'CREATE TABLE filmat(
//        IDF integer auto_increment,
//        Titulli varchar(100) NOT NULL,
//        Foto varchar(200) NOT NULL,
//        Trailer varchar(200),
//        Pershkrimi varchar(200) NOT NULL,
//        Fitimet float,
//        Nota float,
//        NrKomenteve integer,
//        Lansimi date,
//        ZhandrriNje integer,
//        ZhandrriDy integer,
//        foreign key (ZhandrriNje) references Zhandrri(IDZ),
//        foreign key (ZhandrriDy) references Zhandrri(IDZ),
//        primary key (IDF))';
//$retval = mysqli_query( $conn, $sql );
//if(! $retval )
//{
//die('Could not create table: ' . mysqli_connect_error());
//}
//echo "Table filmat was created successfully\n";
//echo "<br>";
//ALTER TABLE `filmat` CHANGE `Fitimet` `Fitimet` FLOAT NULL DEFAULT '0'; -------NOTA FILLESTARE ME QENE 0 -----
//ALTER TABLE `filmat` CHANGE `NrKomenteve` `NrKomenteve` INT(11) NULL DEFAULT '0'; ---Nr komenteve me qene zero ------

// -------------------Grupi i perdoruesve -------------------
//$sql = 'CREATE TABLE GrPerdoruesit(
//        IDGR integer auto_increment,
//        Lloji varchar(30) NOT NULL,
//        primary key (IDGR))';
//$retval = mysqli_query( $conn, $sql );
//if(! $retval )
//{
//die('Could not create table: ' . mysqli_connect_error());
//}
//echo "Table GrPerdoruesit was created successfully\n";
//echo "<br>";

//-------------------Perdoruesit ----------------------------
//$sql = 'CREATE TABLE Perdoruesit(
//        username varchar(30) NOT NULL,
//        Emri varchar(30) NOT NULL,
//        Mbiemri varchar(30) NOT NULL,
//        Password varchar(30) NOT NULL,
//        Email varchar(50) NOT NULL,
//        Grupi integer NOT NULL,
//        Data_reg date,
//        foreign key (Grupi) references GrPerdoruesit(IDGR),
//        primary key (username))';
//$retval = mysqli_query( $conn, $sql );
//if(! $retval )
//{
//die('Could not create table: ' . mysqli_connect_error());
//}
//echo "Table Perdoruesit was created successfully\n";
//echo "<br>";
//ALTER TABLE `perdoruesit` CHANGE `Data_reg` `Data_reg` DATE NOT NULL; ---PER DATE TE REGJISTRIMIT-----
//ALTER TABLE `perdoruesit` ADD `Ditelindja` DATE NOT NULL AFTER `Data_reg`; ----PER DITELINDJE --------
//ALTER TABLE `perdoruesit` ADD `Gjinia` VARCHAR(10) NOT NULL AFTER `Ditelindja`; --PER GJINI ----------

//--------------------Komentet -------------------------------
//$sql = 'CREATE TABLE Komentet(
//        username varchar(30) NOT NULL,
//        IDF integer NOT NULL,
//        Komenti varchar(300),
//        Vleresimi integer,
//        foreign key (username) references Perdoruesit(username),
//        foreign key (IDF) references filmat(IDF),
//        primary key (username,IDF))';
//$retval = mysqli_query( $conn, $sql );
//if(! $retval )
//{
//die('Could not create table: ' . mysqli_connect_error());
//}
//echo "Table Komentet was created successfully\n";
//echo "<br>";
//ALTER TABLE `komentet` ADD `Data` DATETIME NOT NULL AFTER `Vleresimi`; ----Shtimi i dates ne komente----


//--------------------INSERTIMI------------------------------
//$sql = "INSERT INTO grperdoruesit(IDGR,Lloji) values(1,'Admin')";
//$retval = mysqli_query( $conn, $sql );
//if(! $retval )
//{
//die('Could not enter data: ' . mysqli_connect_error());
//}
//else
//echo "Te dhenat u regjistruan me sukses\n";
//
//$sql = "INSERT INTO grperdoruesit(IDGR,Lloji) values(2,'Perdorues')";
//$retval = mysqli_query( $conn, $sql );
//if(! $retval )
//{
//die('Could not enter data: ' . mysqli_connect_error());
//}
//else
//echo "Te dhenat u regjistruan me sukses\n";



//$sql = "INSERT INTO zhandrri(IDZ,Tipi) values(1000,'Aksion')";
//$retval = mysqli_query( $conn, $sql );
//if(! $retval )
//{
//die('Could not enter data: ' . mysqli_connect_error());
//}
//else
//echo "Te dhenat u regjistruan me sukses\n";
//$sql = "INSERT INTO zhandrri(Tipi) values('Komedi')";
//$retval = mysqli_query( $conn, $sql );
//if(! $retval )
//{
//die('Could not enter data: ' . mysqli_connect_error());
//}
//else
//echo "Te dhenat u regjistruan me sukses\n";

//$sql = "INSERT INTO zhandrri(Tipi) values('Familjare')";
//$retval = mysqli_query( $conn, $sql );
//if(! $retval )
//{
//die('Could not enter data: ' . mysqli_connect_error());
//}
//else
//echo "Te dhenat u regjistruan me sukses\n";

//$sql = "INSERT INTO zhandrri(Tipi) values('Histori')";
//$retval = mysqli_query( $conn, $sql );
//if(! $retval )
//{
//die('Could not enter data: ' . mysqli_connect_error());
//}
//else
//echo "Te dhenat u regjistruan me sukses\n";
//$sql = "INSERT INTO zhandrri(Tipi) values('Mister')";
//$retval = mysqli_query( $conn, $sql );
//if(! $retval )
//{
//die('Could not enter data: ' . mysqli_connect_error());
//}
//else
//echo "Te dhenat u regjistruan me sukses\n";

//$sql = "INSERT INTO zhandrri(Tipi) values('Fanta-Shkence')";
//$retval = mysqli_query( $conn, $sql );
//if(! $retval )
//{
//die('Could not enter data: ' . mysqli_connect_error());
//}
//else
//echo "Te dhenat u regjistruan me sukses\n";

//$sql = "INSERT INTO zhandrri(Tipi) values('Lufte')";
//$retval = mysqli_query( $conn, $sql );
//if(! $retval )
//{
//die('Could not enter data: ' . mysqli_connect_error());
//}
//else
//echo "Te dhenat u regjistruan me sukses\n";

//$sql = "INSERT INTO zhandrri(Tipi) values('Drame')";
//$retval = mysqli_query( $conn, $sql );
//if(! $retval )
//{
//die('Could not enter data: ' . mysqli_connect_error());
//}
//else
//echo "Te dhenat u regjistruan me sukses\n";

//$sql = "INSERT INTO zhandrri(Tipi) values('Aventure')";
//$retval = mysqli_query( $conn, $sql );
//if(! $retval )
//{
//die('Could not enter data: ' . mysqli_connect_error());
//}
//else
//echo "Te dhenat u regjistruan me sukses\n";

//$sql = "INSERT INTO zhandrri(Tipi) values('Krim')";
//$retval = mysqli_query( $conn, $sql );
//if(! $retval )
//{
//die('Could not enter data: ' . mysqli_connect_error());
//}
//else
//echo "Te dhenat u regjistruan me sukses\n";

//$sql = "INSERT INTO zhandrri(Tipi) values('Fantazi')";
//$retval = mysqli_query( $conn, $sql );
//if(! $retval )
//{
//die('Could not enter data: ' . mysqli_connect_error());
//}
//else
//echo "Te dhenat u regjistruan me sukses\n";

//$sql = "INSERT INTO zhandrri(Tipi) values('Horror')";
//$retval = mysqli_query( $conn, $sql );
//if(! $retval )
//{
//die('Could not enter data: ' . mysqli_connect_error());
//}
//else
//echo "Te dhenat u regjistruan me sukses\n";

//$sql = "INSERT INTO zhandrri(Tipi) values('Thriller')";
//$retval = mysqli_query( $conn, $sql );
//if(! $retval )
//{
//die('Could not enter data: ' . mysqli_connect_error());
//}
//else
//echo "Te dhenat u regjistruan me sukses\n";
//mysqli_close($conn);


//$sql = "INSERT INTO perdoruesit(username,Emri,Mbiemri,Password,Email,Grupi,Data_reg) "
//        ."values('au','Armend','Ukehaxhaj','admin','armendd.u@hotmail.com',1,NOW())";
//$retval = mysqli_query( $conn, $sql );
//if(! $retval )
//{
//die('Could not enter data: ' . mysqli_connect_error());
//}
//else
//echo "Te dhenat u regjistruan me sukses\n";
//$sql = "INSERT INTO perdoruesit(username,Emri,Mbiemri,Password,Email,Grupi,Data_reg) "
//        ."values('gk','Gresa','Krasniqi','admin','gtkrasniqi@gmail.com',1,NOW())";
//$retval = mysqli_query( $conn, $sql );
//if(! $retval )
//{
//die('Could not enter data: ' . mysqli_connect_error());
//}
//else
//echo "Te dhenat u regjistruan me sukses\n";
//$sql = "INSERT INTO perdoruesit(username,Emri,Mbiemri,Password,Email,Grupi,Data_reg) "
//        ."values('ah','Arton','Hoti','admin','arti._3@hotmail.com',1,NOW())";
//$retval = mysqli_query( $conn, $sql );
//if(! $retval )
//{
//die('Could not enter data: ' . mysqli_connect_error());
//}
//else
//echo "Te dhenat u regjistruan me sukses\n";
//$sql = "INSERT INTO perdoruesit(username,Emri,Mbiemri,Password,Email,Grupi,Data_reg) "
//        ."values('mk','Mal','Kurteshi','admin','malkurteshi@gmail.com',1,NOW())";
//$retval = mysqli_query( $conn, $sql );
//if(! $retval )
//{
//die('Could not enter data: ' . mysqli_connect_error());
//}
//else
//echo "Te dhenat u regjistruan me sukses\n";
//$sql = "INSERT INTO perdoruesit(username,Emri,Mbiemri,Password,Email,Grupi,Data_reg) "
//        ."values('ma','Mendim','Arifaj','admin','mendmania@gmail.com',1,NOW())";
//$retval = mysqli_query( $conn, $sql );
//if(! $retval )
//{
//die('Could not enter data: ' . mysqli_connect_error());
//}
//else
//echo "Te dhenat u regjistruan me sukses\n";

//$sql = "INSERT INTO filmat(IDF,Titulli,Foto,Trailer,Pershkrimi,Fitimet,Nota,NrKomenteve,Lansimi,ZhandrriNje,ZhandrriDy) "
//        ."values('1','The Jungle Book','junglebook.jpg','socials.png','Pershkrim',120,0,0,'2016-05-07',1000,1001)";
//$retval = mysqli_query( $conn, $sql );
//if(! $retval )
//{
//die('Could not enter data: ' . mysqli_connect_error());
//}
//else
//echo "Te dhenat u regjistruan me sukses\n";







?>