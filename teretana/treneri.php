<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="teretana";
$con = mysqli_connect($host,$user,$pass,$db);
$c_sifra2=$_SESSION['c_sifra2'];

?>
<html>
    <head>
        <link rel="stylesheet" href="CSS/izgled.css">

        <meta charset="UTF-8">
            <title>Izbor trenera</title>
    </head>
    <body>

        <form action="izbortrenera.php" method="POST">
            <center>
                <h1>Izaberite trenera</h1>
                <input type="radio" name="trener" value="trener1" /> Mirko Savić<BR>
                <input type="radio" name="trener" value="trener2" /> Neven Bošković<BR>
                <input type="radio" name="trener" value="trener3" /> Anđela Petrović<BR>
                <input type="radio" name="trener" value="trener4" /> Velimir Veljković<BR>
  <BR>
  <BR>
                <button type="submit" name="izaberi"  class="button"> Izaberi </button>
            </center>
</form>

        <br>



    </body>
</html>