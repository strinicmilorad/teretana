<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="teretana";
$con = mysqli_connect($host,$user,$pass,$db);
if(!empty(filter_input(INPUT_POST, 'c_ime') && filter_input(INPUT_POST, 'c_sifra1') && filter_input(INPUT_POST, 'c_sifra2') && filter_input(INPUT_POST, 'c_adresa') && filter_input(INPUT_POST, 'c_telefon'))){
    $c_ime=mysqli_real_escape_string($con,filter_input(INPUT_POST, 'c_ime'));
    $c_sifra1=mysqli_real_escape_string($con,filter_input(INPUT_POST, 'c_sifra1'));
    $c_sifra2=mysqli_real_escape_string($con,filter_input(INPUT_POST, 'c_sifra2'));
    $_SESSION['c_sifra2']=$c_sifra2;
    $c_adresa=mysqli_real_escape_string($con,filter_input(INPUT_POST, 'c_adresa'));
    $c_telefon=mysqli_real_escape_string($con,filter_input(INPUT_POST, 'c_telefon'));
        $upit="SELECT * FROM clan
              WHERE c_sifra='$c_sifra1'";
        $rez=mysqli_query($con,$upit);
        if(mysqli_num_rows($rez)==0){
            $upit1="INSERT INTO clan (c_sifra,c_ime,c_adresa,c_telefon) VALUES ('$c_sifra1','$c_ime','$c_adresa','$c_telefon')";
            $rez1=mysqli_query($con,$upit1);
            if($rez1){
                echo '<script> alert("Uspesno ste kreirali nalog") </script>';
                header("refresh:0.2, url = treneri.php");
            }
        }
        else{print"Unesite drugu lozinku!";}
}
?>

