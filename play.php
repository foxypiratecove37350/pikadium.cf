<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/play.css">
    <link rel="icon" href="./images/icons-logos/icon.svg">
    <title>Jouez à Pikadium</title>
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
        <h1>Rejoignez Pikadium</h1>
        <div id="downloadForm">
            <div id="system">
                <div name="select">
                    <p>Selectionner votre système d'exploitation</p>
                    <img src="./images/icons-logos/chevron-down.svg" alt="Féche Bas du Menu Déroulant">
                    <border></border>
                </div>
                <p value="windows" id="Windows">Windows<border></border><border-1></border-1></p>
                <p value="mac" id="macOS">macOS<border></border></p>
            </div>
            <img height="100px" width="100px" id="system">
            <a id="download"></a>
        </div>
    </div>
    <script src="./javascript/os-select.js"></script>
</body>
</html>