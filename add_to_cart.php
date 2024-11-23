<?php
session_start();
header('Content-Type: application/json');

// Leer datos de la solicitud
$data = json_decode(file_get_contents('php://input'), true);

$productId = $data['productId'];
$productName = $data['productName'];
$productPrice = $data['productPrice'];
$quantity = 1; // Cantidad inicial de producto

// Inicializar el carrito si no existe
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Si el producto ya está en el carrito, incrementar la cantidad
if (isset($_SESSION['cart'][$productId])) {
    $_SESSION['cart'][$productId]['quantity'] += $quantity;
} else {
    // Si no, agregarlo al carrito
    $_SESSION['cart'][$productId] = [
        'name' => $productName,
        'price' => $productPrice,
        'quantity' => $quantity
    ];
}

// Contar total de productos en el carrito
$cartCount = array_sum(array_column($_SESSION['cart'], 'quantity'));

echo json_encode(['success' => true, 'cartCount' => $cartCount]);
