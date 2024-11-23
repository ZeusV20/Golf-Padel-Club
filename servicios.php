<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="img/logo_02.png">
  <title>Servicios</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="styles/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
<nav class="flex items-center justify-between bg-green-700 p-4">
  <div></div>

  <!-- Botón de menú hamburguesa -->
  <button id="menuToggle" class="block md:hidden text-white focus:outline-none z-20">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
    </svg>
  </button>

  <!-- Menú principal -->
  <div id="menu" class="hidden md:flex flex-col md:flex-row items-center space-x-8 z-10">
    <a href="indexU.php" class="relative text-white px-4 py-2 transition duration-300 hover:text-gray-300">
      INICIO
      <span class="absolute inset-x-0 bottom-0 h-0.5 bg-yellow-400 scale-x-0 origin-center transition-transform duration-300 hover:scale-x-100"></span>
    </a>
    <a href="product.php" class="relative text-white px-4 py-2 transition duration-300 hover:text-gray-300">
      PRODUCTOS
      <span class="absolute inset-x-0 bottom-0 h-0.5 bg-yellow-400 scale-x-0 origin-center transition-transform duration-300 hover:scale-x-100"></span>
    </a>
    <a href="indexU.php" class="hidden md:block">
      <img src="img/logo_01.png" alt="Golf & Padel Club" class="h-10">
    </a>
    <a href="servicios.php" class="relative text-white px-4 py-2 transition duration-300 hover:text-gray-300">
      SERVICIOS
      <span class="absolute inset-x-0 bottom-0 h-0.5 bg-yellow-400 scale-x-0 origin-center transition-transform duration-300 hover:scale-x-100"></span>
    </a>
    <a href="contact.php" class="relative text-white px-4 py-2 transition duration-300 hover:text-gray-300">
      CONTACTO
      <span class="absolute inset-x-0 bottom-0 h-0.5 bg-yellow-400 scale-x-0 origin-center transition-transform duration-300 hover:scale-x-100"></span>
    </a>
  </div>

  <div class="flex items-center space-x-6">
    <a href="#" id="searchIcon">
      <button>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white hover:text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 10-14 0 7 7 0 0014 0z" />
        </svg>
      </button>
    </a>

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

    <a href="signin.php">
      <button class="flex items-center text-white hover:text-gray-400">
        <span class="mr-2">Cerrar sesión</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M10 15l5-5-5-5"></path>
          <path d="M20 4v16"></path>
        </svg>
      </button>
    </a>

    <a href="cart.php">
      <button>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white hover:text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 7M7 13h10a3 3 0 100 6H7a3 3 0 100-6z" />
        </svg>
        <span id="cart-count" class="cart-count">0</span>
      </button>
    </a>
  </div>
</nav>

<section class="relative w-full h-screen bg-cover bg-center" style="background-image: url('img/hero2.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-30"></div>
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white">
      <h1 class="text-4xl sm:text-6xl font-serif font-bold mb-4">
      " Brindamos a los socios y a sus familias servicios e instalaciones de calidad " 
      </h1>
    </div>
  </section>

  
  <hr>

  <section class="bg-gray-50 py-16">
  <div class="container mx-auto px-6 lg:px-20 font-serif">
    <h2 class="text-4xl font-extrabold text-center text-green-700 mb-12">Casa Club</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
      <!-- Texto descriptivo -->
      <div>
        <p class="text-lg text-gray-700 leading-relaxed mb-6">
          En Casa Club contamos con las siguientes instalaciones y servicios para tu comodidad y disfrute:
        </p>
        <ul class="list-disc list-inside text-lg text-gray-800 space-y-3">
          <li><strong>Vestidores</strong> con sauna y vapor para damas y caballeros</li>
          <li><strong>Gym</strong> con vista panorámica del campo</li>
          <li><strong>Alberca y chapoteadero</strong> al aire libre con agua templada</li>
          <li>4 canchas de tenis: 2 con pasto sintético y 2 canchas duras</li>
          <li><strong>Ludoteca</strong> para los más pequeños</li>
        </ul>
      </div>
      <!-- Imagen destacada -->
      <div>
        <div class="relative">
          <img 
            src="img/casa_club01.jpg" 
            alt="Imagen de la Casa Club" 
            class="w-full h-auto rounded-lg shadow-lg"
          >
          <div class="absolute inset-0 bg-gradient-to-t from-green-800 to-transparent opacity-50 rounded-lg"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="flex flex-col md:flex-row items-center justify-center bg-green-700 p-4">
  <!-- Contenedor centrado -->
  <div class="flex flex-col md:flex-row items-center justify-center space-y-4 md:space-x-8 md:space-y-0">
    <!-- Enlaces -->
    <a href="index.php" class="relative text-white px-4 py-2 transition duration-300 hover:text-gray-300">INICIO</a>
    <a href="product.php" class="relative text-white px-4 py-2 transition duration-300 hover:text-gray-300">PRODUCTOS</a>
    <a href="index.php">
      <img src="img/logo_01.png" alt="Golf & Padel Club" class="h-20">
    </a>
    <a href="servicios.php" class="relative text-white px-4 py-2 transition duration-300 hover:text-gray-300">SERVICIOS</a>
    <a href="contact.php" class="relative text-white px-4 py-2 transition duration-300 hover:text-gray-300">CONTACTO</a>
  </div>
  
  <!-- Flecha para subir al inicio -->
  <a href="#top" class="flex items-center justify-center mt-4 p-2 text-white rounded-full hover:text-gray-300 transition-all transform hover:translate-y-[-5px] fixed bottom-6 right-6">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
      <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 8.707a1 1 0 01-1.414-1.414l4-4A1 1 0 0110 3z" clip-rule="evenodd" />
    </svg>
  </a>
</footer>

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

  // Toggle del menú en dispositivos pequeños
  const menuToggle = document.getElementById('menuToggle');
  const menu = document.getElementById('menu');

  menuToggle.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
</script>


    
</body>
</html>