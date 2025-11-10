<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForHealth - doplňky stravy pro všechny</title>
    <link rel="stylesheet" href="css/style.css? <?php echo time(); ?> " type="text/css">
</head>
<body>

    <header class="menu">
        <a class="menu--logo" href="index.php"><img src="images/ForHealth_logo.png" alt="ForHealth logo" class="FHlogo"></a>

        <input id="search--input" class="search--input" type="text">
        <button id="search--button" class="search--button">
            <img class="search--img icon" src="images/search.png">
        </button>

            <span class="menu--rozdelovac rozdelovac--maly"></span>

        <nav class="menu__odkazy">
            <a href="produkty.php">Produkty</a>

                <span class="menu--rozdelovac rozdelovac--maly"></span>

            <a href="#"><img src="images/user.png" class="user--img icon"></a>

                <span class="menu--rozdelovac rozdelovac--velky"></span>

            <a href="kosik.php"><img src="images/cart.png" class="cart--img icon"></a>

            <span class="menu--rozdelovac rozdelovac--maly"></span>
        </nav>

        <button class="hamburgerBtn" id="hamburgerBtn">☰</button>
            <nav class="menu__odkazy--hamburger" id="menu__odkazy--hamburger">
            
                <a href="index.php">Domů</a>
                <a href="onas.php">O nás</a>
                <a href="kosik.php">Košík</a>
            </nav>
    </header>