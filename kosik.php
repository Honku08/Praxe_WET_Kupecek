<?php
session_start();
include "includes/menu.php";

// zpracování změny množství
if (isset($_POST['change_qty'])) {
    $id = $_POST['product_id'];
    $change = intval($_POST['change_qty']);
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity'] = intval($_SESSION['cart'][$id]['quantity']) + $change;
        if ($_SESSION['cart'][$id]['quantity'] <= 0) {
            unset($_SESSION['cart'][$id]); 
        }
    }
    header("Location: kosik.php");
    exit();
}

// zpracování odebrání položky
if (isset($_GET['remove'])) {
    $id = $_GET['remove'];
    unset($_SESSION['cart'][$id]);
    header("Location: kosik.php");
    exit();
}

// výpočet subtotal a total
$subtotal = 0.0;
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $price = floatval($item['price'] ?? 0);
        $quantity = intval($item['quantity'] ?? 0);
        $subtotal += $price * $quantity;
    }
}

$doprava = 49.0;
$total = $subtotal + $doprava;

?>

<main class="cart--container">
    <section class="cart--items">
        <table class="cart--table">
            <thead>
                <tr>
                    <th class="cart--product--th">Položka</th>
                    <th class="cart--desc--th">Popis</th>
                    <th class="cart--price--th">Cena</th>
                    <th class="cart--qty--th">Množství</th>
                    <th class="cart--subtotal--th">Mezisoučet</th>
                    <th class="cart--deleteIcon--th"></th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($_SESSION['cart'])): ?>
                    <?php foreach ($_SESSION['cart'] as $id => $item): ?>
                        <?php 
                            $price = floatval($item['price'] ?? 0);
                            $quantity = intval($item['quantity'] ?? 0);
                            $item_subtotal = $price * $quantity;
                        ?>
                        <tr>
                            <td class="cart--product">
                                <img src="<?= htmlspecialchars($item['image'] ?? '') ?>" alt="Produkt" class="cart--img">
                            </td>
                            <td class="cart--desc">
                                <strong><?= htmlspecialchars($item['name'] ?? '') ?></strong>
                            </td>
                            <td class="cart--price"><?= number_format($price, 2, ',', ' ') ?> Kč</td>
                            <td class="cart--qty">
                                <form method="post" class="qty--form">
                                    <input type="hidden" name="product_id" value="<?= htmlspecialchars($id) ?>">
                                    <button type="submit" name="change_qty" value="-1" class="qty--btn">−</button>
                                    <span><?= $quantity ?></span>
                                    <button type="submit" name="change_qty" value="1" class="qty--btn">+</button>
                                </form>
                            </td>
                            <td class="cart--subtotal"><?= number_format($item_subtotal, 2, ',', ' ') ?> Kč</td>
                            <td class="cart--deleteIcon">
                                <a href="kosik.php?remove=<?= urlencode($id) ?>" class="remove--item">🗑</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="6" style="text-align:center;">Košík je prázdný</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </section>

    <aside class="cart--summary">
        <h3>Shrnutí objednávky</h3>
        <div class="summary--row">
            <p>Mezisoučet:</p>
            <span><?= number_format($subtotal, 2, ',', ' ') ?> Kč</span>
        </div>
        <div class="summary--row">
            <p>Doručení:</p>
            <span><?= number_format($doprava, 2, ',', ' ') ?> Kč</span>
        </div>
        <hr>
        <div class="summary--total">
            <p>K úhradě:</p>
            <span><?= number_format($total, 2, ',', ' ') ?> Kč</span>
        </div>
        <button class="checkout--btn">Přejít k pokladně</button>
    </aside>
</main>

<?php include "includes/footer.php"; ?>
