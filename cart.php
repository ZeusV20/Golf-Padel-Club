<?php
session_start();
require 'assets/db.php';

// Obtener productos de la base de datos
$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="styles/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
<nav class="flex items-center justify-between bg-green-700 p-4">
  <!-- Elementos del lado izquierdo -->
  <div></div> <!-- Espacio vacío para balancear -->

  <!-- Navegación centrada -->
  <div class="flex items-center space-x-8">
    <a href="indexU.php" class="relative text-white px-4 py-2 transition duration-300 hover:text-gray-300">
      INICIO
      <span class="absolute inset-x-0 bottom-0 h-0.5 bg-yellow-400 scale-x-0 origin-center transition-transform duration-300 hover:scale-x-100"></span>
    </a>
    <a href="product.php" class="relative text-white px-4 py-2 transition duration-300 hover:text-gray-300">
      PRODUCTOS
      <span class="absolute inset-x-0 bottom-0 h-0.5 bg-yellow-400 scale-x-0 origin-center transition-transform duration-300 hover:scale-x-100"></span>
    </a>
    <a href="indexU.php">
      <img src="img/logo_01.png" alt="Golf & Padel Club" class="h-10">
    </a>
    <a href="#" class="relative text-white px-4 py-2 transition duration-300 hover:text-gray-300">
      Servicios
      <span class="absolute inset-x-0 bottom-0 h-0.5 bg-yellow-400 scale-x-0 origin-center transition-transform duration-300 hover:scale-x-100"></span>
    </a>
    <a href="#" class="relative text-white px-4 py-2 transition duration-300 hover:text-gray-300">
      Contacto
      <span class="absolute inset-x-0 bottom-0 h-0.5 bg-yellow-400 scale-x-0 origin-center transition-transform duration-300 hover:scale-x-100"></span>
    </a>
  </div>

  <!-- Íconos a la derecha -->
  <div class="flex items-center space-x-6">
    <!-- Búsqueda -->
    <a href="#" id="searchIcon">
      <button>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white hover:text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 10-14 0 7 7 0 0014 0z" />
        </svg>
      </button>
    </a>

    <!-- Formulario de búsqueda oculto -->
    <form action="product.php" method="GET" class="hidden" id="searchForm">
      <input 
          type="text" 
          name="search" 
          placeholder="Buscar productos..." 
          class="border p-2 rounded-l-md"
          id="searchInput"
      >
      <button 
          type="submit" 
          class="bg-green-600 text-white p-2 rounded-r-md hover:bg-green-700"
      >
        Buscar
      </button>
    </form>

    <!-- Iniciar sesión actualizado -->
    <a href="signin.php">
      <button class="flex items-center text-white hover:text-gray-400">
        <span class="mr-2">Cerrar sesión</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M10 15l5-5-5-5"></path>
          <path d="M20 4v16"></path>
        </svg>
      </button>
    </a>
    <!-- Carrito de compras -->
    <a href="#">
      <button>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white hover:text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 7M7 13h10a3 3 0 100 6H7a3 3 0 100-6z" />
        </svg>
      </button>
    </a>
  </div>
</nav>

    <!-- Contenedor principal del carrito -->
    <div class="container mx-auto px-6 py-10">
        <h1 class="text-4xl font-bold text-center text-green-600 mb-8">Tu Carrito</h1>

        <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
            <div class="cart bg-white p-6 rounded-lg shadow-lg">
                <ul class="space-y-4">
                    <?php 
                    $total = 0;
                    foreach ($_SESSION['cart'] as $productId => $item): 
                        $subtotal = $item['price'] * $item['quantity'];
                        $total += $subtotal;
                    ?>
                        <li class="flex items-center space-x-4">
                            <!-- Detalles del producto -->
                            <div class="flex flex-col flex-grow">
                                <span class="font-semibold text-lg"><?= $item['name']; ?></span>
                                <span class="text-sm text-gray-600"><?= $item['quantity']; ?> x $<?= $item['price']; ?></span>
                            </div>

                            <!-- Subtotal -->
                            <span class="text-green-600 font-semibold">$<?= $subtotal; ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <!-- Total -->
                <div class="mt-6 flex justify-between items-center">
                    <h3 class="text-xl font-semibold">Total: </h3>
                    <span class="text-2xl text-green-600 font-bold">$<?= number_format($total, 2); ?></span>
                </div>

                <!-- Botón para proceder a la compra -->
                <div class="mt-8 text-center">
                    <button 
                        class="bg-green-600 text-white py-2 px-6 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 w-full md:w-auto"
                        onclick="window.location.href='checkout.php'">
                        Proceder a la compra
                    </button>
                </div>
            </div>
        <?php else: ?>
            <p class="text-center text-lg text-gray-700">No tienes productos en tu carrito.</p>
        <?php endif; ?>
    </div>

    <script>
  let currentIndex = 0;
  const items = document.querySelectorAll('.carousel-item');
  const carousel = document.getElementById('carousel');

  function moveToNext() {
    currentIndex = (currentIndex + 1) % items.length;
    carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
  }

  setInterval(moveToNext, 5000);  // Cambiar cada 5 segundos

  

  // Animacion para texto de vision y mision
  document.addEventListener("DOMContentLoaded", () => {
  const elements = document.querySelectorAll("[data-scroll]");
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("opacity-100", "translate-x-0");
          observer.unobserve(entry.target); // Desactiva la observación después de animar
        }
      });
    },
    { threshold: 0.60 } // Se activa cuando el 20% del elemento es visible
  );

  elements.forEach((el) => observer.observe(el));
});

// Agregar el desplazamiento suave y más lento al hacer clic
const arrowButton = document.querySelector('a[href="#top"]');
  
  arrowButton.addEventListener('click', (e) => {
    e.preventDefault(); // Evita que el enlace se ejecute de manera predeterminada

    // Función personalizada para desplazamiento suave y controlado
    function smoothScrollToTop() {
      const start = window.scrollY;
      const distance = start;
      const duration = 1000; // Duración en milisegundos (más alto = más lento)
      let startTime = null;

      function scrollAnimation(currentTime) {
        if (startTime === null) startTime = currentTime;
        const timeElapsed = currentTime - startTime;
        const progress = Math.min(timeElapsed / duration, 1); // Control de progreso

        // Calcula el nuevo desplazamiento
        window.scrollTo(0, start - distance * progress);

        if (progress < 1) {
          requestAnimationFrame(scrollAnimation); // Sigue animando
        }
      }

      // Inicia la animación
      requestAnimationFrame(scrollAnimation);
    }

    smoothScrollToTop();
  });

   // Mostrar y ocultar el formulario de búsqueda al hacer clic en el ícono
   document.getElementById('searchIcon').addEventListener('click', function() {
      var searchForm = document.getElementById('searchForm');
      searchForm.classList.toggle('hidden'); 
      document.getElementById('searchInput').focus(); 
  });
</script>
</body>


</html>
