<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['product_id'];
    $name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $image = $_POST['product_image'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $found = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['id'] == $id) {
            $item['quantity']++;
            $found = true;
            break;
        }
    }

    if (!$found) {
        $_SESSION['cart'][] = [
            'id' => $id,
            'name' => $name,
            'price' => $price,
            'image' => $image,
            'quantity' => 1
        ];
    }

    $cart_count = 0;
    foreach ($_SESSION['cart'] as $item) {
        $cart_count += $item['quantity'];
    }

    header('Content-Type: application/json');
    echo json_encode([
        'status' => 'success',
        'message' => 'Produkt přidán do košíku!',
        'cartCount' => $cart_count
    ]);
    exit;
}
?>