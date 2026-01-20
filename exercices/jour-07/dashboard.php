<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}

$userName = $_SESSION["user"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>

<body>
    <h2>Bonjour <?= htmlspecialchars($username) ?> !</h2>
    <p>Bienvenue sur votre dashboard.</p>
    <a href="logout.php">Se déconnecter</a>
</body>

</html>