<?php
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
    if (empty($name)) {
        echo "le champ name est obligatoire !","<br>";
    }
if (empty($email)) {
        echo "email address $email in invalidate.","<br>";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "email address $email in invalidate.","<br>";
    }
    
  if (empty($message)) {
        echo "need to write a message","<br>";
    }
    elseif (strlen($message > 10)) {
        echo "message $message is not send because need more caractere !","<br>";
    }
  
}

?>