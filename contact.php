<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="img/logo_02.png">
  <title>Contacto</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="styles/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
<nav class="flex items-center justify-between bg-green-700 p-4">
  <!-- Espacio vacío en la izquierda (puedes usarlo o eliminarlo) -->
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

  <!-- Íconos a la derecha -->
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

<section class="relative py-16 bg-cover bg-center" style="background-image: url('img/fondo01.jpg');">
  <div class="absolute inset-0 bg-green-900 bg-opacity-60"></div>
  <div class="relative container mx-auto px-6 lg:px-20 text-white">
    <h2 class="text-4xl font-extrabold text-center mb-12">Contáctanos</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
      <!-- Información de contacto -->
      <div>
        <h3 class="text-2xl font-semibold mb-4">Oficinas</h3>
        <p class="text-lg leading-relaxed">
          Golf & Padel Club<br>
          Avenida Club Campestre, No. 987<br>
          Coatzacoalcos, Veracruz, C.P. 96536
        </p>
      </div>
      <div>
        <h3 class="text-2xl font-semibold mb-4">Teléfonos</h3>
        <p class="text-lg">
          <a href="tel:+1234567890" class="hover:text-yellow-400 transition">+565 983 9953</a><br>
          <a href="tel:+0987654321" class="hover:text-yellow-400 transition">+921 116 6549</a>
        </p>
      </div>
      <div>
        <h3 class="text-2xl font-semibold mb-4">Correo Electrónico</h3>
        <p class="text-lg">
          <a href="mailto:info@golfpadelclub.com" class="hover:text-yellow-400 transition">informacion@golfpadelclub.com</a>
        </p>
      </div>
    </div>

    <!-- Mapa y formulario -->
    <div class="mt-16 grid grid-cols-1 md:grid-cols-2 gap-12">
      <!-- Mapa -->
      <div>
        <h3 class="text-2xl font-semibold mb-4">Encuéntranos</h3>
        <iframe 
        style="border:0;" 
          allowfullscreen="" 
          loading="lazy"
          class="w-full h-64 rounded-lg shadow-lg"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1004.2503862952035!2d-94.48510573428806!3d18.138833713416986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85e9847e0ffceff9%3A0x87fce34f46a475a3!2sUniversity%20American%20Isthmus!5e0!3m2!1sen!2smx!4v1732336082747!5m2!1sen!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <!-- Formulario -->
      <div>
        <h3 class="text-2xl font-semibold mb-4">Envíanos un mensaje</h3>
        <form action="#" method="POST" class="space-y-4">
          <input 
            type="text" 
            name="name" 
            placeholder="Nombre Completo" 
            class="w-full px-4 py-2 rounded-md bg-gray-100 text-gray-700 focus:ring-2 focus:ring-yellow-400 outline-none">
          <input 
            type="email" 
            name="email" 
            placeholder="Correo Electrónico" 
            class="w-full px-4 py-2 rounded-md bg-gray-100 text-gray-700 focus:ring-2 focus:ring-yellow-400 outline-none">
          <textarea 
            name="message" 
            rows="5" 
            placeholder="Tu Mensaje" 
            class="w-full px-4 py-2 rounded-md bg-gray-100 text-gray-700 focus:ring-2 focus:ring-yellow-400 outline-none"></textarea>
          <button 
            type="submit" 
            class="bg-yellow-400 text-green-900 font-bold py-2 px-6 rounded-md hover:bg-yellow-300 transition">
            Enviar Mensaje
          </button>
        </form>
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


<!-- Script de JavaScript para el control del cambio automático -->
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