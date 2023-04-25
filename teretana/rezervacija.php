<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="teretana";
$con = mysqli_connect($host,$user,$pass,$db);
$c_sifra=mysqli_real_escape_string($con,$_SESSION['c_sifra']);
$rb_termina=mysqli_real_escape_string($con,$_SESSION['rb_termina']);
if(ISSET($_POST['potvrdi'])){
        $upit="INSERT INTO trening(sifra_clana,rb_termina)"
                . "VALUES ('$c_sifra', '$rb_termina')";
        $rez=mysqli_query($con,$upit);
        $upit1="UPDATE termin SET dostupnost='nedostupno' WHERE rb_termina = '$rb_termina'";
        $rez1=mysqli_query($con,$upit1);
    }
    if($rez and $rez1){
        echo "<script> alert('Rezervacija je potvrdjenja');</script>";
        header("refresh:0.2, url = izbortermina.php");
    }
?>

