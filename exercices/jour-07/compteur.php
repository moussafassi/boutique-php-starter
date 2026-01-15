<?php
session_start();//TOUJOURS en premier ligne
$_SESSION["user"]= "mousse";//écrire sur la page 
echo $_SESSION["user"];//lecture de de la super global
echo"<br>";
// unset($_SESSION["user"]);//supprimer une clé
// session_destroy();// tout détruire
$_SESSION["visits"]= "Vous avez visité cette page X fois";
echo"".$_SESSION["visits"]."";