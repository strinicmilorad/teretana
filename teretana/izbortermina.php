<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="teretana";
$con = mysqli_connect($host,$user,$pass,$db);
$c_sifra=$_SESSION['c_sifra'];
$c_ime = $_SESSION['c_ime'];


print "
    <ul>
        <li><p class='active'>Clan:$c_ime</p></li>
        <li class='odjava'><a href='prijava.html'>Odjava</a></form></li>

    </ul>
";
$upit4="SELECT * FROM termin";
$rez4=mysqli_query($con,$upit4);
if(mysqli_num_rows($rez4)>0){
    print "<form action='potvrdarezervacije.php' method='POST'>";
    print"<center>
                    <table>
                        <tr>
                            <td><center><h3>rb_termina</h3></center></td>
                            <td><center><h3>dan</h3></center></td>
                            <td><center><h3>vreme</h3></center></td>
                            <td><center><h3>dostupnost</h3></center></td>
                            <td><center><h3>*</h3></center></td>
                        </tr>";
}
while($row=mysqli_fetch_array($rez4)){
    $rb_termina=$row[0];
    $dan=$row[1];
    $vreme=$row[2];
    $dostupnost=$row[3];
    if($dostupnost=='dostupno'){
    print"<tr>
            <td><center>$rb_termina</center></td>
            <td><center>$dan</center></td>
            <td><center>$vreme</center></td>
            <td><center>dostupno</center></td>
            <td><center><input type='radio' name='rb_termina[]' value='$rb_termina'></center></td>
        </tr>";
    }
    else{
        print"<tr>
            <td><center>$rb_termina</center></td>
            <td><center>$dan</center></td>
            <td><center>$vreme</center></td>
            <td><center>nedostupno</center></td>
            <td><center>X</center></td>
        </tr>";
    }
}

print"</table></center>";
print"<center>
    <BR>
    <button type='submit' name='izaberi' value='izaberi'>Izaberi</button>
    </center></form>"
?>
  <html>
    <head>

        <link rel="stylesheet" href="CSS/pocetna.css">
        <link rel="stylesheet" href="CSS/topbar.css">
        <title>Izbor termina</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body></body></html>
        
