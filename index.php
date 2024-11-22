






<!DOCTYPE html>
<html lang="en">
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
    <!-- Botones con subrayado animado -->
    <a href="#" class="relative text-white px-4 py-2 transition duration-300 hover:text-gray-300">
      INICIO
      <span class="absolute inset-x-0 bottom-0 h-0.5 bg-yellow-400 scale-x-0 origin-center transition-transform duration-300 hover:scale-x-100"></span>
    </a>
    <a href="#" class="relative text-white px-4 py-2 transition duration-300 hover:text-gray-300">
      PRODUCTOS
      <span class="absolute inset-x-0 bottom-0 h-0.5 bg-yellow-400 scale-x-0 origin-center transition-transform duration-300 hover:scale-x-100"></span>
    </a>
    <a href="#">
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
     <a href="">
       <button>
         <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white hover:text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 10-14 0 7 7 0 0014 0z" />
         </svg>
       </button>
     </a>
    <!-- Iniciar sesión -->
     <a href="signin.php">
       <button>
         <svg viewBox="0 0 25.00 25.00" class="h-6 w-6 text-white hover:text-gray-400" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.014 8.46835C14.7204 8.17619 14.2455 8.17737 13.9533 8.47099C13.6612 8.76462 13.6624 9.23949 13.956 9.53165L15.014 8.46835ZM16.971 12.5317C17.2646 12.8238 17.7395 12.8226 18.0317 12.529C18.3238 12.2354 18.3226 11.7605 18.029 11.4683L16.971 12.5317ZM18.029 12.5317C18.3226 12.2395 18.3238 11.7646 18.0317 11.471C17.7395 11.1774 17.2646 11.1762 16.971 11.4683L18.029 12.5317ZM13.956 14.4683C13.6624 14.7605 13.6612 15.2354 13.9533 15.529C14.2455 15.8226 14.7204 15.8238 15.014 15.5317L13.956 14.4683ZM17.5 12.75C17.9142 12.75 18.25 12.4142 18.25 12C18.25 11.5858 17.9142 11.25 17.5 11.25V12.75ZM3.5 11.25C3.08579 11.25 2.75 11.5858 2.75 12C2.75 12.4142 3.08579 12.75 3.5 12.75V11.25ZM13.956 9.53165L16.971 12.5317L18.029 11.4683L15.014 8.46835L13.956 9.53165ZM16.971 11.4683L13.956 14.4683L15.014 15.5317L18.029 12.5317L16.971 11.4683ZM17.5 11.25H3.5V12.75H17.5V11.25Z" fill="#ffffff"></path> <path d="M9.5 15C9.5 17.2091 11.2909 19 13.5 19H17.5C19.7091 19 21.5 17.2091 21.5 15V9C21.5 6.79086 19.7091 5 17.5 5H13.5C11.2909 5 9.5 6.79086 9.5 9" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M15.014 8.46835C14.7204 8.17619 14.2455 8.17737 13.9533 8.47099C13.6612 8.76462 13.6624 9.23949 13.956 9.53165L15.014 8.46835ZM16.971 12.5317C17.2646 12.8238 17.7395 12.8226 18.0317 12.529C18.3238 12.2354 18.3226 11.7605 18.029 11.4683L16.971 12.5317ZM18.029 12.5317C18.3226 12.2395 18.3238 11.7646 18.0317 11.471C17.7395 11.1774 17.2646 11.1762 16.971 11.4683L18.029 12.5317ZM13.956 14.4683C13.6624 14.7605 13.6612 15.2354 13.9533 15.529C14.2455 15.8226 14.7204 15.8238 15.014 15.5317L13.956 14.4683ZM17.5 12.75C17.9142 12.75 18.25 12.4142 18.25 12C18.25 11.5858 17.9142 11.25 17.5 11.25V12.75ZM3.5 11.25C3.08579 11.25 2.75 11.5858 2.75 12C2.75 12.4142 3.08579 12.75 3.5 12.75V11.25ZM13.956 9.53165L16.971 12.5317L18.029 11.4683L15.014 8.46835L13.956 9.53165ZM16.971 11.4683L13.956 14.4683L15.014 15.5317L18.029 12.5317L16.971 11.4683ZM17.5 11.25H3.5V12.75H17.5V11.25Z" fill="#ffffff"></path> <path d="M9.5 15C9.5 17.2091 11.2909 19 13.5 19H17.5C19.7091 19 21.5 17.2091 21.5 15V9C21.5 6.79086 19.7091 5 17.5 5H13.5C11.2909 5 9.5 6.79086 9.5 9" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
       </button>
     </a>
    <!-- Carrito de compras -->
     <a href="">
       <button>
         <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white hover:text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 7M7 13h10a3 3 0 100 6H7a3 3 0 100-6z" />
         </svg>
       </button>
     </a>
  </div>
</nav>

<div class="relative w-full overflow-hidden">
  <!-- Carrusel con imágenes -->
  <div class="carousel w-full aspect-[3440/1440] flex transition-all duration-700 ease-in-out" id="carousel">
    <!-- Imagen 1 y texto -->
    <div class="carousel-item w-full flex-shrink-0 relative">
      <img src="img/cancha_01.jpg" class="w-full h-full object-cover" alt="Imagen del club">
      <div class="absolute top-1/2 left-0 w-full text-center transform -translate-y-1/2 text-white font-serif text-5xl p-6">
        <p class="transition-all duration-1000">Bienvenidos al Golf & Padel Club.</p>
      </div>
    </div>
    <!-- Imagen 2 y texto -->
    <div class="carousel-item w-full flex-shrink-0 relative">
      <img src="img/cancha_02.jpg" class="w-full h-full object-cover" alt="Imagen del club">
      <div class="absolute top-1/2 left-0 w-full text-center transform -translate-y-1/2 text-white font-serif text-5xl p-6">
        <p class="transition-all duration-1000">Disfruta de un ambiente relajante y exclusivo.</p>
      </div>
    </div>
    <!-- Imagen 3 y texto -->
    <div class="carousel-item w-full flex-shrink-0 relative">
      <img src="img/cancha_03.jpg" class="w-full h-full object-cover" alt="Imagen del club">
      <div class="absolute top-1/2 left-0 w-full text-center transform -translate-y-1/2 text-white font-serif text-5xl p-6">
        <p class="transition-all duration-1000">Vive una experiencia única en nuestras instalaciones.</p>
      </div>
    </div>

    <div class="carousel-item w-full flex-shrink-0 relative">
      <img src="img/cancha_04.jpg" class="w-full h-full object-cover" alt="Imagen del club">
      <div class="absolute top-1/2 left-0 w-full text-center transform -translate-y-1/2 text-white font-serif text-5xl p-6">
        <p class="transition-all duration-1000">Vive una experiencia única en nuestras instalaciones.</p>
      </div>
  </div>
</div>

<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16 font-serif">
    <!-- Misión -->
    <div
      class="opacity-0 transform -translate-x-10 transition duration-700 ease-out"
      data-scroll
    >
      <h2 class="text-3xl mb-4">Misión</h2>
      <p class="text-gray-700 text-2xl">
        Crear un espacio donde el deporte se encuentra con la excelencia y la comunidad, ofreciendo experiencias únicas en pádel, golf y productos de alta calidad.
      </p>
    </div>
    <hr>
    <!-- Visión -->
    <div
      class="opacity-0 transform -translate-x-10 transition duration-700 ease-out font-serif"
      data-scroll
    >
      <h2 class="text-3xl mb-4">Visión</h2>
      <p class="text-gray-700 text-2xl">
        Ser reconocidos como el club líder en pádel y golf, combinando innovación y compromiso con la sostenibilidad para promover un estilo de vida saludable.
      </p>
    </div>
    <hr>
    <!-- Valores -->
    <div
      class="opacity-0 transform -translate-x-10 transition duration-700 ease-out font-serif"
      data-scroll
    >
      <h2 class="text-3xl mb-4">Valores</h2>
      <ul class="list-disc pl-5 text-gray-700 text-2xl space-y-2">
        <li>Excelencia</li>
        <li>Innovación</li>
        <li>Sustentabilidad</li>
        <li>Integridad</li>
        <li>Comunidad</li>
        <li>Pasión por el deporte</li>
      </ul>
    </div>
  </div>
</section>

<section class="relative w-full h-screen bg-cover bg-center" style="background-image: url('img/hero.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-30"></div>
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white">
      <h1 class="text-4xl sm:text-6xl font-serif font-bold mb-4">
      Golf, Padel y Estilo: Vive la Experiencia, Juega con Pasión, Compra con Distinción
      </h1>
      <p class="text-xl sm:text-2xl font-light">
        ...en un ambiente sano, ecológico y con responsabilidad social...
      </p>
    </div>
  </section>

  <footer class="flex items-center justify-center bg-green-700 p-4">
  <!-- Contenedor centrado -->
  <div class="flex items-center justify-center space-x-8">
    <!-- Enlace INICIO -->
    <a href="#" class="relative text-white px-4 py-2 transition duration-300 hover:text-gray-300">
      INICIO
      <span class="absolute inset-x-0 bottom-0 h-0.5 bg-yellow-400 scale-x-0 origin-center transition-transform duration-300 hover:scale-x-100"></span>
    </a>

    <!-- Enlace PRODUCTOS -->
    <a href="#" class="relative text-white px-4 py-2 transition duration-300 hover:text-gray-300">
      PRODUCTOS
      <span class="absolute inset-x-0 bottom-0 h-0.5 bg-yellow-400 scale-x-0 origin-center transition-transform duration-300 hover:scale-x-100"></span>
    </a>

    <!-- Logo en el centro -->
    <a href="#">
      <img src="img/logo_01.png" alt="Golf & Padel Club" class="h-20">
    </a>

    <!-- Enlace Servicios -->
    <a href="#" class="relative text-white px-4 py-2 transition duration-300 hover:text-gray-300">
      Servicios
      <span class="absolute inset-x-0 bottom-0 h-0.5 bg-yellow-400 scale-x-0 origin-center transition-transform duration-300 hover:scale-x-100"></span>
    </a>

    <!-- Enlace Contacto -->
    <a href="#" class="relative text-white px-4 py-2 transition duration-300 hover:text-gray-300">
      Contacto
      <span class="absolute inset-x-0 bottom-0 h-0.5 bg-yellow-400 scale-x-0 origin-center transition-transform duration-300 hover:scale-x-100"></span>
    </a>
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
</script>






    
</body>
</html>