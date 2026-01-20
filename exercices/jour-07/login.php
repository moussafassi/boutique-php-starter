<?php
session_start();
$error = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $userName = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    if (empty($userName) || empty($password)) {
        $error = "remplir tout les champs";
    } elseif ($userName === "admin" && $password == "1234") {
        $_SESSION["user"] = $userName;
        header("location: dashboard.php");
        exit();
    } else {
        $error = "Identifiants incorrects";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=œ, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <div class="contact-password">
        <?php if (isset($_POST[""])): ?>
            <p style="color:red"><?= $error ?></p>
        <?php endif; ?>
        <form action="dashboard.php" method="POST">
            <input type="text" id="name" name="username" class="form-input" placeholder="Votre nom">
            <input type="text" id="name" name="password" class="form-input" placeholder="Votre mot de passe">
            <button type="submit" class="btn btn--primary btn--lg">
                Envoyer le message
            </button>
        </form>
    </div>
</body>

</html>