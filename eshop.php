<?php include "includes/menu.php" ?>
    
<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $product = [
        'id' => $_POST['product_id'],
        'name' => $_POST['product_name'],
        'price' => $_POST['product_price'],
        'image' => $_POST['product_image']
    ];

    $_SESSION['cart'][] = $product;

    echo json_encode([
        'status' => 'success',
        'message' => 'Produkt přidán do košíku!',
        'cart_count' => count($_SESSION['cart'])
    ]);
    exit;
}


?>
    <section class="products">


        <div class="products--header">
            <h2>Naše produkty</h2>
            <button id="filterBtn">Filtr</button>
        </div>

        <div class="products--grid" id="productsGrid">

            
            <?php include "includes/products/vitaminy.php" ?>
            <?php include "includes/products/detox.php" ?>
            <?php include "includes/products/energy.php" ?>
            <?php include "includes/products/protein.php" ?>
            <?php include "includes/products/sirup.php" ?>

        </div>
        <div class="product-modal">
            <div class="product-modal-content">
                <span class="close">&times;</span>
                <img src="" alt="" class="modal-img">
                <h2 class="modal-title"></h2>
                <p class="modal-price"></p>
                <p class="modal-desc"></p>
            </div>
        </div>
    </section>

    
    
    <div class="filter--overlay" id="filterOverlay">
        <div class="filter--content">
            <h3>Filtrovat produkty</h3>
            <button class="close--filter" id="closeFilter">&times;</button>

            <div class="filter--options">
                <label><input type="checkbox" value="energy"> Energy</label>
                <label><input type="checkbox" value="vitamin"> Vitamín</label>
                <label><input type="checkbox" value="protein"> Proteiny</label>
                <label><input type="checkbox" value="detox"> Detox</label>
                <label><input type="checkbox" value="sirup"> Sirupy</label>
            </div>

            <button class="apply--filter" id="applyFilter">Použít filtr</button>
        </div>
    </div>

    
    <script src="js/filter.js"></script>
    <script src="js/productModal.js"></script>
    <script src="js/productAddToCart.js"></script>
<?php include "includes/footer.php" ?>