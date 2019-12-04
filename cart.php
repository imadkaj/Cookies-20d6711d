<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>

        <!-- maak hier de opdracht -->
<div>


       <br><br><form action="userinput.php" method="get" target="_blank">
        keuze: <input type="text" name="keuze">

        <input type="submit" name="submit" value="Verzenden">
        <p> <bold> *Druk op Verzenden* </bold> </p>


<?php
session_start();
if(isset($_GET['submit']))
{
  $cookie_name = "gebruikerinput";
  $cookie_value = $_GET['keuze'];
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // opslaan voor 1 dag


}
?>




 ?>
</div>


    </body>
</html>
