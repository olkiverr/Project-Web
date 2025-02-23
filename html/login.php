<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta-information pour l'encodage des caractères et la gestion de la mise en page responsive -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Liens vers les fichiers CSS externes pour les styles généraux et spécifiques à la page de connexion -->
    <link rel="stylesheet" href="../css/template.css">
    <link rel="stylesheet" href="../css/login-style.css">
    
    <!-- Icône du site -->
    <link rel="shortcut icon" href="../img/MangaMuse_White-Book.png" type="image/x-icon">
    
    <!-- Titre de la page -->
    <title>MangaMuse</title>
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
        <!-- Conteneur principal pour le formulaire de connexion -->
        <div class="login-container">
            <h2>Login to MangaMuse</h2>
            
            <!-- Formulaire de connexion avec méthode POST pour envoyer les données au fichier login_action.php -->
            <form action="../php/login_action.php" method="POST">
                <!-- Champ pour le nom d'utilisateur -->
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required placeholder="Enter your username">
                </div>
                
                <!-- Champ pour le mot de passe -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Enter your password">
                </div>
                
                <!-- Bouton pour soumettre le formulaire de connexion -->
                <div class="form-group">
                    <button type="submit" class="login-btn">Login</button>
                </div>
            </form>
            
            <!-- Lien vers la page d'inscription si l'utilisateur n'a pas encore de compte -->
            <p class="signup-link">Don't have an account? <a href="signup.php">Create an account</a></p>
        </div>
    </main>

    <footer>
        <!-- Informations de contact du site -->
        <div class="contact-info">
            <h2>Contact Information</h2>
            <p>Email : <a href="mailto:o.zielinski.3032@gmail.com">o.zielinski.3032@gmail.com</a></p>
            <p>Phone : <a href="tel:+0123456789">+01 23 45 67 89</a></p>
            <p>Address : 123 Rue des Mangas, 75000 Paris, France</p>
        </div>
        
        <!-- Copyright du site -->
        <p>Copyright &copy; Zielinski Olivier</p>
    </footer>

    <!-- Inclusion d'un fichier JavaScript pour la gestion de la notification snackbar lors de la connexion -->
    <script src="../js/login_snackbar.js"></script>  <!-- Assurez-vous que le chemin du JS est correct -->
</body>
</html>
