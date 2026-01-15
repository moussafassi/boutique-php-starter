
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>
<div class="contact-layout">
    <?php if (isset($_POST[""])): ?>
        <p><?= $name = htmlspecialchars($_POST["name"]) ?></p>
        <p><?= $email = htmlspecialchars($_POST["email"]) ?></p>
        <p><?= $message = htmlspecialchars($_POST["message"]) ?></p>
    <?php endif; ?>

    <div class="contact-form">


        <h2 class="contact-form__title">Envoyez-nous un message</h2>

        <!-- JOUR 6 : action="contact.php" method="POST" -->
        <form action="recup-contact.php" method="POST">

            <div class="form-group">
                *<label for="name" class="form-label form-label--required">Nom complet</label>
                <!-- JOUR 6 : value="<?= htmlspecialchars($_POST['name'] ?? '') ?>" -->
                <!-- JOUR 7 : Si connecté, préremplir avec $_SESSION['user']['username'] -->
                <input type="text" id="name" name="name" class="form-input" placeholder="Votre nom" 
                    minlength="2">
                <!-- JOUR 6 : Afficher erreur si invalide -->
                <!-- <p class="form-error">Veuillez entrer votre nom</p> -->
            </div>

            <div class="form-group">
                *<label for="email" class="form-label form-label--required">Email</label>
                <!-- JOUR 6 : value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" -->
                <!-- JOUR 7 : Si connecté, préremplir avec $_SESSION['user']['email'] -->
                <input type ="email" id="email" name="email" class="form-input" placeholder="votre@email.com" >
                <!-- JOUR 6 : Afficher erreur si invalide -->
                <!-- <p class="form-error">Veuillez entrer un email valide</p> -->
            </div>


            <div class="form-group">
                *<label for="message" class="form-label form-label--required">Message</label>
                <!-- JOUR 6 : <?= htmlspecialchars($_POST['message'] ?? '') ?> -->
                <textarea id="message" name="message" class="form-textarea" placeholder="Décrivez votre demande..."
                     minlength="10" rows="6"></textarea>
                <p class="form-hint">Minimum 10 caractères</p>
                <!-- JOUR 6 : Afficher erreur si invalide -->
                <!-- <p class="form-error">Votre message doit contenir au moins 10 caractères</p> -->
            </div>

            <button type="submit" class="btn btn--primary btn--lg">
                Envoyer le message
            </button>
            
        </form>
    </div>

    <aside class="contact-info">
        <h3 class="contact-info__title">Informations</h3>

        <div class="contact-info__item">
            <div class="contact-info__icon">📍</div>
            <div>
                <div class="contact-info__label">Adresse</div>
                <div class="contact-info__value">
                    123 Rue du Commerce<br>
                    75001 Paris, France
                </div>
            </div>
        </div>

        <div class="contact-info__item">
            <div class="contact-info__icon">📧</div>
            <div>
                <div class="contact-info__label">Email</div>
                <div class="contact-info__value">
                    contact@maboutique.fr
                </div>
            </div>
        </div>

        <div class="contact-info__item">
            <div class="contact-info__icon">📞</div>
            <div>
                <div class="contact-info__label">Téléphone</div>
                <div class="contact-info__value">
                    01 23 45 67 89
                </div>
            </div>
        </div>

        <div class="contact-info__item">
            <div class="contact-info__icon">🕐</div>
            <div>
                <div class="contact-info__label">Horaires</div>
                <div class="contact-info__value">
                    Lun - Ven : 9h - 18h<br>
                    Sam : 10h - 16h
                </div>
            </div>
        </div>
    </aside>
</div>

</div>
</main>