<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="teretana";
$con = mysqli_connect($host,$user,$pass,$db);

if(!empty(filter_input(INPUT_POST, 'c_ime') && filter_input(INPUT_POST, 'c_sifra'))){ 
    $c_ime=mysqli_real_escape_string($con,filter_input(INPUT_POST, 'c_ime'));
    $c_sifra=mysqli_real_escape_string($con,filter_input(INPUT_POST, 'c_sifra'));
    $_SESSION['c_ime']=$c_ime;
    $_SESSION['c_sifra']=$c_sifra;
    $upit = "SELECT * 
             FROM clan
             WHERE c_ime='$c_ime' AND c_sifra='$c_sifra'";
    $rez=mysqli_query($con,$upit);
    if(mysqli_num_rows($rez)==1){
        header("Location: izbortermina.php");
    }

    else{
        print"<center>Pogresno ste uneli ime clana i/ili sifru</center>"
        . "<BR>";
    }
    
}
?>
<html>
    <head>
        <link rel="stylesheet" href="CSS/izgled.css">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
            <form action='prijava.html' method='POST'>
                <center><input type='submit' name='nazad' value='Pokusaj ponovo'></center>
            </form>
    </body>
</html>

