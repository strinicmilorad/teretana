<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="teretana";
$con = mysqli_connect($host,$user,$pass,$db);
$trener=mysqli_real_escape_string($con,filter_input(INPUT_POST, 'trener'));
$c_sifra2=$_SESSION['c_sifra2'];

    $upit="INSERT INTO clan_trener(c_sifra,sifra_trenera)
           VALUES ('$c_sifra2','$trener')";
    $rez=mysqli_query($con,$upit);
    if($rez){
        echo '<script> alert("Uspesno ste izabrali trenera") </script>';
        header("refresh:0.2, url = prijava.html");
    }



?>
