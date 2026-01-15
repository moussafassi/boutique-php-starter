<?php
session_start();
function afficheMessage($name = null, $age = null)
{
    if ($name && $name !== "") {
        $name = htmlspecialchars($name);
    } else {
        $name = "visiteur";

    }
    if ($age && $age !== "") {
        $age = htmlspecialchars($age);
        return "Bonjours $name, vous avez $age !";
    } else {
        return "Bonjour $name !";
    }
}
$name= null;
$age = null;
if(isset($_GET["name"])) {
    $name = $_GET["name"];
}
if(isset($_GET["age"])) {
    $age = $_GET["age"];
}
echo afficheMessage($_GET["name"] , $_GET["age"] );

?>