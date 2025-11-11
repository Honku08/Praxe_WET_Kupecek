<?php include "includes/menu.php" ?>
    
<?php

session_start();

if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_POST['add_to_cart'])) {
    $id = $_POST['product_id'];
    $name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $image = $_POST['product_image'];
    $quantity = 1;

    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity']++;
    } else {
        $_SESSION['cart'][$id] = [
            'name' => $name,
            'price' => $price,
            'image' => $image,
            'quantity' => $quantity
        ];
    }
}

?>
    <section class="products">


        <div class="products-header">
            <h2>Naše produkty</h2>
            <button id="filterBtn">Filtruj</button>
        </div>

        <div class="products-grid" id="productsGrid">

            <a href="" class="product-card" data-type="energy">
                <img src="images/testneco.jpg" alt="Produkt 1">
                <h3>Energy Boost</h3>
                <p class="price">100 Kč</p>
                <p>Doplň energii pro náročný den.</p>
                <form method="post">
                    <input type="hidden" name="product_id" value="1">
                    <input type="hidden" name="product_name" value="Energy Boost">
                    <input type="hidden" name="product_price" value="100">
                    <input type="hidden" name="product_image" value="images/testneco.jpg">
                    <button type="submit" name="add_to_cart">Přidat do košíku</button>
                </form>
            </a>

            <a href="" class="product-card" data-type="vitamin">
                <img src="images/testneco.jpg" alt="Vitamin C">
                <h3>Vitamin C</h3>
                <p class="price">150 Kč</p>
                <p>Podpoř imunitu a zdraví.</p>
                <form method="post">
                    <input type="hidden" name="product_id" value="2">
                    <input type="hidden" name="product_name" value="Vitamin C">
                    <input type="hidden" name="product_price" value="150">
                    <input type="hidden" name="product_image" value="images/testneco.jpg">
                    <button type="submit" name="add_to_cart">Přidat do košíku</button>
                </form>
            </a>

            <a href="" class="product-card" data-type="protein">
                <img src="images/testneco.jpg" alt="Protein Shake">
                <h3>Protein Shake</h3>
                <p class="price">200 Kč</p>
                <p>Ideální doplněk po tréninku.</p>
                <form method="post" action="eshop.php">
                    <input type="hidden" name="product_name" value="Protein Shake">
                    <input type="hidden" name="product_price" value="200">
                    <button type="submit" name="add_to_cart">Přidat do košíku</button>
                </form>
            </a>

            <a href="" class="product-card" data-type="sirup">
                <img src="images/testneco.jpg" alt="Produkt 5">
                <h3>Vita Sirup</h3>
                <p class="price">250 Kč</p>
                <p>Posiluje imunitu s ovocnou chutí.</p>
                <form method="post">
                    <input type="hidden" name="product_name" value="Vita Sirup">
                    <input type="hidden" name="product_price" value="250">
                    <button type="submit" name="add_to_cart">Přidat do košíku</button>
                </form>
            </a>

        </div>
    </section>

    <div class="filter-overlay" id="filterOverlay">
        <div class="filter-content">
            <h3>Filtrovat produkty</h3>
            <button class="close-filter" id="closeFilter">&times;</button>

            <div class="filter-options">
                <label><input type="checkbox" value="energy"> Energy</label>
                <label><input type="checkbox" value="imunita"> Imunita</label>
                <label><input type="checkbox" value="protein"> Proteiny</label>
                <label><input type="checkbox" value="detox"> Detox</label>
                <label><input type="checkbox" value="sirup"> Sirupy</label>
            </div>

            <button class="apply-filter" id="applyFilter">Použít filtr</button>
        </div>
    </div>

    <script src="js/filter.js"></script>

<?php include "includes/footer.php" ?>