<?php
    header('Location: /commandes-closed'); // redirection
?>
<html>
    <head>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="/css/commun.css">
        <link rel="stylesheet" href="/css/menu.css">
        <link rel="stylesheet" href="index.css">
        
        <link rel="icon" href="logo.png">
        <title>L'artiste Du Web | Commandes</title>
     <!-- Primary Meta Tags -->
        <meta name="title" content="L'artiste Du Web">
        <meta name="description" content="Découvre toutes les créations de L'artiste Du Web depuis le début ! Et parle avec des gens qui sont dans le meme pays que toi dans un tchat en direct !">
        
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://lartiste-du-web.fr">
        <meta property="og:title" content="L'artiste Du Web">
        <meta property="og:description" content="Contact L'artiste Du Web pour avoir ta propre photo de profil ou logo ! Et parle avec des gens qui sont dans le meme pays que toi dans un tchat en direct !">
        <meta property="og:image" content="https://i.ibb.co/CJRFHFr/logo.png">
        
        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://lartiste-du-web.fr">
        <meta property="twitter:title" content="L'artiste Du Web">
        <meta property="twitter:description" content="Contact L'artiste Du Web pour avoir ta propre photo de profil ou logo ! Et parle avec des gens qui sont dans le meme pays que toi dans un tchat en direct !">
        <meta property="twitter:image" content="https://i.ibb.co/CJRFHFr/logo.png">
    </head>
    <header>
        <div class="align">
            <h1 class="titre">L'artiste Du Web</h1>
            <nav role='navigation'>
              <div id="menuToggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
                <ul id="menu">
                  <a href="https://lartiste-du-web.fr"><li>Accueil</li></a>
                  <a href="https://lartiste-du-web.fr/tchat"><li>Tchat en direct</li></a>
                  <a href="https://lartiste-du-web.fr/creations"><li>Mes créations</li></a>
                  <a href="https://lartiste-du-web.fr/contact"><li>Me contacter</li></a>
                  <a href="https://lartiste-du-web.fr/commandes"><li>Passer commande</li></a>
                  <a href="https://lartiste-du-web.fr/don"><li>Faire un don</li></a>
                </ul>
              </div>
            </nav>
            <div class="container">
            </div>
        </div>
    </header>
    <body>
            <h1 class="commander">
                Commander
            </h1>
            <div class="div-form">
                <form target="blank" action="https://formsubmit.co/commandes@lartiste-du-web.fr" method="POST">
                     <input class="input-contact" type="email" name="Email" required placeholder="Votre adresse mail">
                     <br>
                     <input class="input-name-project" type="text" name="Nom du projet" required placeholder="Nom de votre projet">
                     <br>
                     <textarea class="input-contact-message" type="text" name="Description de la commande" required placeholder="Description de la commande" autocomplete="off"></textarea>
                     <input type="hidden" name="_subject" value="Nouvelle Commande !">
                     <br>
                     <button class="envoyer" type="submit">Envoyer</button>
                </form>
            </div>
        </div>
        <script src="commun.js"></script>
    </body>
    <script>
        function redirection(){
          document.location.href="https://lartiste-du-web.fr/commandes-closed"; 
        }
    </script>
    <footer>
        <div class="contact">
            <span>Contact :</span>
            <br>
            <a target="blank" href="mailto:contact@lartiste-du-web.fr">--> Mail</a>
        </div>
        <div class="liens-utiles">
            <span>Liens utiles :</span>
            <br>
            <a href="https://lartiste-du-web.fr">--> Accueil</a>
            <br>
            <a href="https://lartiste-du-web.fr/creations">--> Mes créations</a>
            <br>
            <a href="https://lartiste-du-web.fr/tchat">--> Tchat en direct</a>
            <br>
            <a href="https://lartiste-du-web.fr/contact">--> Me contacter</a>
            <br>
            <a href="https://lartiste-du-web.fr/commandes">--> Passer commande</a>
            <br>
            <a href="https://lartiste-du-web.fr/don">--> Faire un don</a>
        </div>
        <div class="copyright">
            <center><span>© Copyright 2022 - Toutes reproductions interdites - Développé par L'artiste Du Web</span></center>
        </div>
        <br>
        <br>
    </footer>
</html>