<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="teretana";
$con = mysqli_connect($host,$user,$pass,$db);
$c_ime = $_SESSION['c_ime'];
$niz=array();



print "
    <link rel='stylesheet' href='CSS/topbar.css'>
    <ul>
        <li><p class='active'>Clan:$c_ime</p></li>
        <li class='odjava'><a href='prijava.html'>Odjava</a></form></li>
        <li class='nazad'><a href='izbortermina.php'>Teretana</a></li>

    </ul>
";





if(ISSET($_POST['rb_termina'])){
    foreach($_POST['rb_termina'] as $rb_termina){
        $rb_termina;
    }
    $rb_termina=mysqli_real_escape_string($con,$rb_termina);
    $_SESSION['rb_termina']=$rb_termina;
    $upit="SELECT * FROM termin WHERE rb_termina=$rb_termina";
    $rez=mysqli_query($con,$upit);
    if(mysqli_num_rows($rez)>0){
        print"<center><table>"
            . "<tr>"
                    . "<td><center><h4>rb_termina</h4></center></td>"
                    . "<td><center><h4>dan</h4></center></td>"
                    . "<td><center><h4>vreme</h4></center></td>"
            . "</tr>";
        while($row= mysqli_fetch_array($rez)){
            $rb_termina=$row[0];
            $dan=$row[1];
            $vreme=$row[2];
            print"<tr>"
               . "<td>$rb_termina</td>"
               . "<td>$dan</td>"
               . "<td>$vreme</td>"
               . "</tr>";
        }
        print"</table></center>";
    }
    print"<form action='rezervacija.php' method='POST'>"
    . "<BR>"
    . "<center><input type='submit' name='potvrdi' value='Potvrdi'></center>"
    . "<form>";
    
}
?>
<html>
    <head>
        <style>

        table, th, td{
	border: 1px solid black;
	padding: 5px;
}
        </style>
        <link rel="stylesheet" href="CSS/pocetna.css">
        <title> Potvrda rezervacije </title>
    </head>
</html>
