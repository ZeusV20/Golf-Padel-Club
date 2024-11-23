<?php
require 'assets/db.php';

$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de productos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="flex justify-center items-center h-screen bg-gradient-to-r from-sky-500 to-indigo-500">
    <div class="w-96 p-6 shadow-lg bg-white rounded-md">
      <h1 class="text-2xl block text-center font-semibold text-indigo-700">
        <i class="fa-brands fa-product-hunt"></i> Registro de productos
      </h1>
      <hr class="mt-3">
      <form method="post" action="add_product.php" enctype="multipart/form-data">
        <!-- Nombre del producto -->
        <div class="mt-3">
          <label for="name" class="block text-base mb-2 font-medium text-gray-700">Nombre del producto</label>
          <input 
            type="text" 
            name="name" 
            class="block w-full rounded-md border-0 py-1.5 pl-4 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
            placeholder="Ingrese un producto..." 
            required>
        </div>
        
        <!-- Descripción -->
        <div class="mt-3">
          <label for="description" class="block text-base mb-2 font-medium text-gray-700">Descripción del producto</label>
          <input 
            type="text" 
            name="description" 
            class="block w-full rounded-md border-0 py-1.5 pl-4 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
            placeholder="Descripción..." 
            required>
        </div>
        
        <!-- Precio -->
        <div class="mt-3">
          <label for="price" class="block text-base mb-2 font-medium text-gray-700">Precio</label>
          <div class="relative rounded-md shadow-sm">
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
              <span class="text-gray-500 sm:text-sm">$</span>
            </div>
            <input 
              type="text" 
              name="price" 
              id="price" 
              class="block w-full rounded-md border-0 py-1.5 pl-7 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
              placeholder="0.00">
            <div class="absolute inset-y-0 right-0 flex items-center">
              <select id="currency" name="currency" class="h-full rounded-md border-0 bg-transparent py-0 pl-2 pr-7 text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                <option>MXN</option>
                <option>USD</option>
                <option>EUR</option>
              </select>
            </div>
          </div>
        </div>
        
        <!-- Stock -->
        <div class="mt-3">
          <label for="stock" class="block text-base mb-2 font-medium text-gray-700">Stock</label>
          <input 
            type="text" 
            name="stock" 
            class="block w-full rounded-md border-0 py-1.5 pl-4 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
            placeholder="Ingrese el stock..." 
            required>
        </div>
        
        <!-- Imagen -->
        <div class="mt-3">
          <label for="image" class="block text-base mb-2 font-medium text-gray-700">Imagen del producto</label>
          <input 
            type="file" 
            name="image" 
            id="image" 
            accept="image/*"
            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-md cursor-pointer bg-gray-50 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-600">
          <p class="mt-1 text-sm text-gray-500">Formatos permitidos: JPG, PNG, GIF</p>
        </div>
        
        <!-- Botón de enviar -->
        <div class="mt-5">
          <button 
            type="submit" 
            class="w-full py-2 bg-indigo-700 text-white font-semibold rounded-md hover:bg-indigo-500 hover:text-white focus:ring-2 focus:ring-indigo-600">
            Registrar
          </button>
        </div>

        <!-- Mensaje de sesión -->
        <?php if (isset($_SESSION['message'])): ?>
          <p class="mt-3 text-center text-red-500 font-medium">
            <?php echo $_SESSION['message']; unset($_SESSION['message']); ?>
          </p>
        <?php endif; ?>
      </form>
    </div>
  </div>
</body>
</html>


