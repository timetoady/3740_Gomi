<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Piazzolla:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <title> <?php echo($title); ?> </title>
</head>

<body>

    <div id="headerWrapper">
        <header>

            <nav class="mainMenu">
                <div class="aContainer">
                    <div>
                        <ion-icon id="menuIcon" name="menu"></ion-icon>
                    </div>
                    <div id="searchDiv">
                        <input id="searchBox" type="search">
                        <button>
                            <ion-icon id="searchIcon" name="search"></ion-icon>
                        </button>
                    </div>
                    <div class="menuLinks default">
                        <ul>
                            <li><a href="index.php" class="homeLink">HOME</a></li>
                            <li><a href="cruises.php">CRUISES</a></li>
                            <li><a class="agentSubLink" href="#">AGENTS►</a>
                                <ul class="agentSubMenu close">
                                    <li><a href="agent1.php">CHRISTINE</a> </li>
                                    <li><a href="agent2.php">ROSENCRAYONS</a> </li>
                                </ul>
                            </li>
                            <li><a href="booking.php">BOOK</a></li>
                        </ul>
                    </div>

                </div>

            </nav>

            <div class="logo">
                <div class="logoBox">
                    <a href="index.php">
                    <img srcset="./assets/images/cabotCruises1.png,
                        ./assets/images/cabotCruises@2x.png 2x,
                        ./assets/images/cabotCruises@3x.png 3x" src="./assets/images/cabotCruises1.png"
                        alt="Cabot Cruises Logo">
                    </a>

                </div>


                <div id="numberDiv">
                    <a href="tel:1-800-555-1234">1-800-555-1234</a>
                </div>

            </div>

        </header>

    </div>

    <main>