<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta-information pour l'encodage des caractères et la gestion de la mise en page responsive -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Liens vers les fichiers CSS externes pour les styles généraux et spécifiques à la page de contact -->
    <link rel="stylesheet" href="../css/contact-style.css">
    <link rel="stylesheet" href="../css/template.css">
    
    <!-- Icône du site -->
    <link rel="shortcut icon" href="../img/MangaMuse_White-Book.png" type="image/x-icon">
    
    <!-- Titre de la page -->
    <title>Contact - MangaMuse</title>
</head>
<body>
    <header>
        <!-- Logo du site avec un lien vers la page d'accueil -->
        <div class="div-logo">
            <a href="../index.php"><img src="../img/MangaMuse_White.png" alt="Logo MangaMuse"></a>
        </div>
        
        <div class="logo-right">
            <!-- Barre de navigation supérieure avec le champ de recherche et les liens de connexion/contact -->
            <div class="topnav">
                <!-- Champ de recherche -->
                <div class="div-search">
                    <input type="search" placeholder="Search">
                </div>
                
                <!-- Liens pour la connexion et le contact -->
                <div class="other-stuff">
                    <a href="login.php">Login</a>
                    <a href="contact.php">Contact</a>
                </div>
            </div>

            <!-- Barre de navigation principale avec des liens vers différentes sections -->
            <div class="nav-bar">
                <a href="#favorite">Favorite</a>
                <a href="#trending">Trending</a>
                <a href="#upcoming">Upcoming</a>
                <a href="blog.php">Blog</a>
                <a href="faq.php">FAQ</a>
            </div>
        </div>
    </header>

    <main>
        <!-- Conteneur principal pour la section de contact -->
        <div class="contact-container">
            <h1>Contact-Us</h1>
            <p>If you have any questions or suggestions, please don't hesitate to contact us by filling out the form below.</p>
            
            <!-- Formulaire de contact -->
            <form class="contact-form">
                <!-- Champ pour le nom -->
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required placeholder="Your name">

                <!-- Champ pour l'email -->
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required placeholder="Your email">

                <!-- Champ pour le message -->
                <label for="message">Message :</label>
                <textarea id="message" name="message" rows="6" required placeholder="Your message..."></textarea>

                <!-- Bouton pour envoyer le message -->
                <button type="submit">Send</button>
            </form>
        </div>
    </main>

    <footer>
        <!-- Informations de contact -->
        <div class="contact-info">
            <h2>Contact Information</h2>
            <p>Email : <a href="mailto:o.zielinski.3032@gmail.com">o.zielinski.3032@gmail.com</a></p>
            <p>Phone : <a href="tel:+0123456789">+01 23 45 67 89</a></p>
            <p>Address : 123 Rue des Mangas, 75000 Paris, France</p>
        </div>
        
        <!-- Copyright du site -->
        <p>Copyright &copy; Zielinski Olivier</p>
    </footer>

    <!-- Inclusion d'un fichier JavaScript pour la gestion de la notification snackbar lors de la soumission du formulaire -->
    <script src="js/login_snackbar.js"></script>
</body>
</html>
