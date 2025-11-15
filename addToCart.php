<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Neplatný požadavek']);
    exit;
}

// načtení dat z formuláře
$id = $_POST['product_id'] ?? null;
$name = $_POST['product_name'] ?? '';
$price = $_POST['product_price'] ?? '';
$image = $_POST['product_image'] ?? '';

// inicializace košíku, pokud neexistuje
if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// najdeme produkt v košíku
$found = false;
foreach ($_SESSION['cart'] as &$item) {
    if ($item['id'] == $id) {
        // zvýšení quantity o 1
        $item['quantity'] = ($item['quantity'] ?? 1) + 1;
        $found = true;
        break;
    }
}
unset($item);

// pokud produkt ještě není v košíku, přidáme nový
if (!$found) {
    $_SESSION['cart'][] = [
        'id' => $id,
        'name' => $name,
        'price' => $price,
        'image' => $image,
        'quantity' => 1
    ];
}

// spočítáme celkový počet položek
$cart_count = 0;
if (!empty($_SESSION['cart'])) {
    $cart_count = array_sum(array_column($_SESSION['cart'], 'quantity'));
}

// odešleme JSON odpověď
echo json_encode([
    'status' => 'success',
    'message' => 'Produkt přidán do košíku',
    'cart_count' => $cart_count
]);
exit;
?>