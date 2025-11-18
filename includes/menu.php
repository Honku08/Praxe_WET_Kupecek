<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForHealth - doplňky stravy pro všechny</title>
    <link rel="stylesheet" href="css/style.css? <?php echo time(); ?> " type="text/css">
</head>
<body>

    <?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $cart_count = 0;
    if (!empty($_SESSION['cart']) && is_array($_SESSION['cart'])) {
        $quantities = array_column($_SESSION['cart'], 'quantity');
        $cart_count = is_array($quantities) ? array_sum($quantities) : 0;
    }
    ?>

    <header class="menu">
        <a class="menu--logo" href="index.php"><img src="images/ForHealth_logo.png" alt="ForHealth logo" class="FHlogo"></a>

            <span class="menu--rozdelovac"></span>

        <nav class="menu__odkazy">

            <a href="onas.php" class="menu__odkazy--produkty--text">O nás</a>

                <span class="menu--rozdelovac"></span>

            <a href="produkty.php" class="menu__odkazy--produkty--text">Produkty</a>

                <span class="menu--rozdelovac"></span>

            <a href="kontakt.php" class="menu__odkazy--kontakt--text">Kontakt</a>

                <span class="menu--rozdelovac"></span>

            <a href="kosik.php" class="cart-link">
                <img src="images/cart.png" class="cart--icon icon">
                <span id="cartCount" class="<?php echo ($cart_count > 0) ? '' : 'hidden'; ?>">
                    <?php echo $cart_count; ?>
                </span>
            </a>

            <span class="menu--rozdelovac"></span>
        </nav>

        <button class="hamburgerBtn" id="hamburgerBtn">☰</button>
            <nav class="menu__odkazy--hamburger" id="menu__odkazy--hamburger">
            
                <a href="index.php">Domů</a>
                <a href="onas.php">O nás</a>
                <a href="produkty.php">Produkty</a>
                <a href="kontakt.php">Kontakt</a>
                <a href="kosik.php">Košík</a>
            </nav>
    </header>