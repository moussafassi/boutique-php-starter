<?php
session_start();//TOUJOURS en premier ligne
$_SESSION["user"]= "mousse";//écrire sur la page 
echo $_SESSION["user"];//lecture de de la super global
echo"<br>";
// unset($_SESSION["user"]);//supprimer une clé
// session_destroy();// tout détruire
//réinitialisation du compteur si on clique sur le lien
if(isset($_GET["reset"])){
    $_SESSION["visits"]=0;
}
//Création ou Incrémentation du compteur
if(!isset($_SESSION["visits"])){
    $_SESSION["visits"]= 1;
}else{
    $_SESSION["visits"]++;
}
//affichage
echo"Vous avez visité cette page". $_SESSION["visits"] ." fois";
echo "<br>";
// Lien de réinitialisation
echo'<a href="?reset=1">Réinitialiser</a>';
?>