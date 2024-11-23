<?php
require 'assets/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    // Procesar imagen
    $imagePath = null;
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $imagePath = 'uploads/' . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
    }

    // Insertar datos en la base de datos
    $stmt = $pdo->prepare("INSERT INTO products (name, description, price, stock, image) VALUES (?, ?, ?, ?, ?)");
    try {
        $stmt->execute([$name, $description, $price, $stock, $imagePath]);
        header("Location: inventary.php");
        exit;
    } catch (PDOException $e) {
        die("Error al guardar el producto: " . $e->getMessage());
    }
}
?>
