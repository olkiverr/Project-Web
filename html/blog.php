<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Lien vers les styles CSS généraux et spécifiques au blog -->
    <link rel="stylesheet" href="../css/template.css">
    <link rel="stylesheet" href="../css/blog-style.css">
    <!-- Icône du site -->
    <link rel="shortcut icon" href="../img/MangaMuse_White-Book.png" type="image/x-icon">
    <title>MangaMuse - Blog</title>
</head>
<body>
    <!-- Header du site avec le logo et la barre de navigation -->
    <header>
        <div class="div-logo">
            <!-- Lien vers la page d'accueil -->
            <a href="../index.php"><img src="../img/MangaMuse_White.png" alt="Logo MangaMuse"></a>
        </div>
        <div class="logo-right">
            <!-- Navigation supérieure avec barre de recherche et liens -->
            <div class="topnav">
                <div class="div-search">
                    <input type="search" placeholder="Search">
                </div>
                <div class="other-stuff">
                    <a href="login.php">Login</a>
                    <a href="contact.php">Contact</a>
                </div>
            </div>
            <!-- Barre de navigation principale -->
            <div class="nav-bar">
                <a href="#favorite">Favorite</a>
                <a href="#trending">Trending</a>
                <a href="#upcoming">Upcoming</a>
                <a href="blog.php">Blog</a> <!-- Lien vers la page Blog -->
                <a href="faq.php">FAQ</a>
            </div>
        </div>
    </header>

    <main>
        <!-- Conteneur principal pour le blog -->
        <div class="blog-container">
            <h1>Blog - Latest Anime News & Reviews</h1>

            <!-- Premier article du blog -->
            <div class="blog-post">
                <img src="../anime_img/DanDaDan.webp" alt="Dan Da Dan" class="blog-img">
                <h2>Review of Dan Da Dan - A New Fan Favorite</h2>
                <p>Dan Da Dan has taken the anime world by storm with its exciting plot and lovable characters...</p>
                <a href="#post1">Read more</a> <!-- Lien vers l'article complet -->
            </div>

            <!-- Deuxième article du blog -->
            <div class="blog-post">
                <img src="../anime_img/sword_art_online.jpg" alt="Sword Art Online" class="blog-img">
                <h2>Sword Art Online Season 4 - Is it worth the wait?</h2>
                <p>Sword Art Online fans have been eagerly anticipating the return of the series. But does season 4 live up to the hype? Let's dive into the details...</p>
                <a href="#post2">Read more</a> <!-- Lien vers l'article complet -->
            </div>

            <!-- Troisième article du blog -->
            <div class="blog-post">
                <img src="../anime_img/Detective_Conan.webp" alt="Detective Conan" class="blog-img">
                <h2>The Mystery Behind Detective Conan - A Timeless Classic</h2>
                <p>Detective Conan has been one of the longest-running anime series in history. What makes it so timeless? Let's explore the evolution of this iconic show...</p>
                <a href="#post3">Read more</a> <!-- Lien vers l'article complet -->
            </div>
        </div>
    </main>

    <!-- Footer avec informations de contact -->
    <footer>
        <div class="contact-info">
            <h2>Informations de contact</h2>
            <p>Email : <a href="mailto:o.zielinski.3032@gmail.com">o.zielinski.3032@gmail.com</a></p>
            <p>Téléphone : <a href="tel:+0123456789">+01 23 45 67 89</a></p>
            <p>Adresse : 123 Rue des Mangas, 75000 Paris, France</p>
        </div>
        <p>Copyright &copy; Zielinski Olivier</p>
    </footer>

    <!-- Lien vers les scripts JavaScript pour le fonctionnement du site -->
    <script src="../js/slide_arrows.js"></script>
    <script src="../js/login_snackbar.js"></script>
</body>
</html>
