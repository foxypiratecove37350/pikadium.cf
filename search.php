<?php

if(isset($_GET['q']) AND !empty($_GET['q'])) {
    $query = htmlspecialchars($_GET['q']);
} else {
    header("Location: http://pikadium/wiki.php");
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($query)){ echo $query; } ?> - Recherche Pikadium Wiki</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="icon" type="image/svg+xml" href="./images/icons-logos/icon.svg">
    <link rel="stylesheet" href="./styles/search.css">
</head>
<body>
    <header>
        <ul>
            <li>
                <a href="./index.php">
                    <img src="./images/icons-logos/icon.svg" alt="Pikadium Icon">
                </a>
            </li>
            <li>
                <a href="./news.php">
                    <p>News</p>
                </a>
            </li>
            <li>
                <a href="./support.php">
                    <p>Support</p>
                </a>
            </li>
            <li>
                <a href="./wiki.php">
                    <p>Wiki</p>
                </a>
            </li>
            <li>
                <a href="./store.php">
                    <p>Boutique</p>
                </a>
            </li>
            <li>
                <a href="./mini-games.php">
                    <p>Mini-Jeux</p>
                </a>
            </li>
            <li>
                <a href="./play.php">
                    <button>
                        Jouer
                    </button>
                </a>
            </li>
        </ul>
    </header>
    <div class="container">
        <h1><u-i-b><?php if(isset($query)){ echo $query; } ?></u-i-b> - Recherche Pikadium Wiki</h1>
        <div class="search">
            <form action="./search.php" method="get">
                <input type="search" name="q" placeholder="Rechercher..." value="<?php if(isset($query)){ echo $query; } ?>">
                <button type="submit">
                    <img src="./images/icons-logos/search.svg" alt="Rechercher">
                </button>
                <button type="reset">
                    <img src="./images/icons-logos/clear.svg" alt="Effacer">
                </button>
            </form>
        </div>
        <p>
            Pikadium est un serveur de Pvp/Faction Français qui vous propose une aventure exclusive sur Minecraft !
        </p>
        <h2>Commencez Votre Aventure !</h2>
        <p>REJOIGNEZ PIKADIUM</p>
    </div>
</body>
</html>