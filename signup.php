<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lashes Please</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="signup_style.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
    <!-- Navbar Section-->
    <nav class="navbar">
        <div class="navbar__container">
            <a href="/LashesPlease" id="navbar__logo">Lashes Please</a>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar__menu">
                <li class="navbar_item">
                    <a href="/" class="navbar__links">O mnie</a>
                </li>
                <li class="navbar_item">
                    <a href="/" class="navbar__links">Galeria</a>
                </li>
                <li class="navbar_item">
                    <a href="/" class="navbar__links">Kontakt</a>
                </li>
                <li class="navbar_btn">
                    <a href="signup.html" class="button">Zapisz się</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="message">
        <div class="message__container">
            <div class="message__title">
                Napisz do nas.
            </div>
            <div class="message__text">
                Umów swój termin już dziś.
            </div>
            <form method="POST">
                <div class="message__names">
                    <input type="text" id="names" name="names" placeholder="Imię i nazwisko" maxlength="35">
                </div>
                <div class="message__mail">
                    <input type="email" id="email" name="email" placeholder="E-mail" maxlength="30">
                </div>
                <div class="message__area">
                    <textarea id="message-content" name="message-content" placeholder="Wiadomość..."></textarea>
                </div>
                <div class="message__sub">
                    <input id="send-button" type="submit" name="submit" value="Wyślij">
                </div>
            </form>
        </div>
    </div>
    <?php
        if(isset($_POST['submit'])){
            $destination= "xjake17@gmail.com";
            $userName = $_POST["names"];
            $userEmail = $_POST["email"];
            $userMessage = $_POST["message-content"];
            $subject = "Rezerwacja terminu na rzęsy";
            $message = $userName . " Napisał/a: /n/n" . $userMessage;
            $headers =  "Od: " . $userName . " - " . $userEmail;

            mail($destination, $subject, $message, $headers);

            echo "Wiadomość wysłano, dziękujemy.";
        }
    ?>
    <script src="app.js"></script>
    <div class="footer">Lashes Please &copy Jakub Brożek 2021</div>
</body>
</html>