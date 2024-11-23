<?php
session_start();
require('assets/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM usuario WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: indexU.php");
        exit;
    } else {
        $_SESSION['message'] = "Nombre de usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="img/logo_02.png">
  <title>Iniciar Sesión</title>
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
    <a href="index.php" class="relative text-white px-4 py-2 transition duration-300 hover:text-gray-300">
      INICIO
      <span class="absolute inset-x-0 bottom-0 h-0.5 bg-yellow-400 scale-x-0 origin-center transition-transform duration-300 hover:scale-x-100"></span>
    </a>
    <a href="signin.php" class="relative text-white px-4 py-2 transition duration-300 hover:text-gray-300">
      PRODUCTOS
      <span class="absolute inset-x-0 bottom-0 h-0.5 bg-yellow-400 scale-x-0 origin-center transition-transform duration-300 hover:scale-x-100"></span>
    </a>
    <a href="index.php" class="hidden md:block">
      <img src="img/logo_01.png" alt="Golf & Padel Club" class="h-10">
    </a>
    <a href="signin.php" class="relative text-white px-4 py-2 transition duration-300 hover:text-gray-300">
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
       <button>
         <svg viewBox="0 0 25.00 25.00" class="h-6 w-6 text-white hover:text-gray-400" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.014 8.46835C14.7204 8.17619 14.2455 8.17737 13.9533 8.47099C13.6612 8.76462 13.6624 9.23949 13.956 9.53165L15.014 8.46835ZM16.971 12.5317C17.2646 12.8238 17.7395 12.8226 18.0317 12.529C18.3238 12.2354 18.3226 11.7605 18.029 11.4683L16.971 12.5317ZM18.029 12.5317C18.3226 12.2395 18.3238 11.7646 18.0317 11.471C17.7395 11.1774 17.2646 11.1762 16.971 11.4683L18.029 12.5317ZM13.956 14.4683C13.6624 14.7605 13.6612 15.2354 13.9533 15.529C14.2455 15.8226 14.7204 15.8238 15.014 15.5317L13.956 14.4683ZM17.5 12.75C17.9142 12.75 18.25 12.4142 18.25 12C18.25 11.5858 17.9142 11.25 17.5 11.25V12.75ZM3.5 11.25C3.08579 11.25 2.75 11.5858 2.75 12C2.75 12.4142 3.08579 12.75 3.5 12.75V11.25ZM13.956 9.53165L16.971 12.5317L18.029 11.4683L15.014 8.46835L13.956 9.53165ZM16.971 11.4683L13.956 14.4683L15.014 15.5317L18.029 12.5317L16.971 11.4683ZM17.5 11.25H3.5V12.75H17.5V11.25Z" fill="#ffffff"></path> <path d="M9.5 15C9.5 17.2091 11.2909 19 13.5 19H17.5C19.7091 19 21.5 17.2091 21.5 15V9C21.5 6.79086 19.7091 5 17.5 5H13.5C11.2909 5 9.5 6.79086 9.5 9" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M15.014 8.46835C14.7204 8.17619 14.2455 8.17737 13.9533 8.47099C13.6612 8.76462 13.6624 9.23949 13.956 9.53165L15.014 8.46835ZM16.971 12.5317C17.2646 12.8238 17.7395 12.8226 18.0317 12.529C18.3238 12.2354 18.3226 11.7605 18.029 11.4683L16.971 12.5317ZM18.029 12.5317C18.3226 12.2395 18.3238 11.7646 18.0317 11.471C17.7395 11.1774 17.2646 11.1762 16.971 11.4683L18.029 12.5317ZM13.956 14.4683C13.6624 14.7605 13.6612 15.2354 13.9533 15.529C14.2455 15.8226 14.7204 15.8238 15.014 15.5317L13.956 14.4683ZM17.5 12.75C17.9142 12.75 18.25 12.4142 18.25 12C18.25 11.5858 17.9142 11.25 17.5 11.25V12.75ZM3.5 11.25C3.08579 11.25 2.75 11.5858 2.75 12C2.75 12.4142 3.08579 12.75 3.5 12.75V11.25ZM13.956 9.53165L16.971 12.5317L18.029 11.4683L15.014 8.46835L13.956 9.53165ZM16.971 11.4683L13.956 14.4683L15.014 15.5317L18.029 12.5317L16.971 11.4683ZM17.5 11.25H3.5V12.75H17.5V11.25Z" fill="#ffffff"></path> <path d="M9.5 15C9.5 17.2091 11.2909 19 13.5 19H17.5C19.7091 19 21.5 17.2091 21.5 15V9C21.5 6.79086 19.7091 5 17.5 5H13.5C11.2909 5 9.5 6.79086 9.5 9" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
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

<div class="flex justify-center items-center h-screen bg-cover bg-center relative" style="background-image: url('img/login-fondo.jpg');">
    <div class="absolute inset-0 bg-black opacity-50"></div>

    <div class="w-96 p-6 shadow-lg bg-white rounded-md relative z-10">
        <h1 class="text-3xl block text-center font-semibold">
            <i class="fa-solid fa-user"></i> Iniciar Sesión
        </h1>
        <hr class="mt-3">
        <form method="post">
            <div class="mt-3">
                <label for="username" class="block text-base mb-2">Usuario</label>
                <input class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600" type="text" name="username" placeholder="Ingrese su usuario..." required>
            </div>
            <div class="mt-3">
                <label for="password" class="block text-base mb-2">Contraseña</label>
                <input class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600" type="password" name="password" placeholder="Ingrese su contraseña" required>
            </div>
            <div class="mt-3">
                <button type="submit" class="border-2 border-green-700 bg-green-700 text-white py-1 w-full rounded-md hover:bg-transparent hover:text-green-700 font-semibold">
                    <i class="fa-solid fa-right-to-bracket"></i>&nbsp;&nbsp; Iniciar sesión
                </button>
            </div>
            <div class="mt-2">
                <a href="createA.php" class="text-yellow-600 font-semibold">Registrar</a>
            </div>
            <?php if (isset($_SESSION['message'])): ?>
                <p class="mt-3 text-red-500"><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></p>
            <?php endif; ?>
        </form>
    </div>
</div>

<footer class="flex flex-col md:flex-row items-center justify-center bg-green-700 p-4">
  <div class="flex flex-col md:flex-row items-center justify-center space-y-4 md:space-x-8 md:space-y-0">
    <!-- Enlaces -->
    <a href="index.php" class="relative text-white px-4 py-2 transition duration-300 hover:text-gray-300">INICIO</a>
    <a href="signin.php" class="relative text-white px-4 py-2 transition duration-300 hover:text-gray-300">PRODUCTOS</a>
    <a href="index.php">
      <img src="img/logo_01.png" alt="Golf & Padel Club" class="h-20">
    </a>
    <a href="signin.php" class="relative text-white px-4 py-2 transition duration-300 hover:text-gray-300">SERVICIOS</a>
    <a href="contact.php" class="relative text-white px-4 py-2 transition duration-300 hover:text-gray-300">CONTACTO</a>
  </div>
  
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

  setInterval(moveToNext, 5000);

  

  document.addEventListener("DOMContentLoaded", () => {
  const elements = document.querySelectorAll("[data-scroll]");
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("opacity-100", "translate-x-0");
          observer.unobserve(entry.target); 
        }
      });
    },
    { threshold: 0.60 } 
  );

  elements.forEach((el) => observer.observe(el));
});

const arrowButton = document.querySelector('a[href="#top"]');
  
  arrowButton.addEventListener('click', (e) => {
    e.preventDefault(); 

    function smoothScrollToTop() {
      const start = window.scrollY;
      const distance = start;
      const duration = 1000; 
      let startTime = null;

      function scrollAnimation(currentTime) {
        if (startTime === null) startTime = currentTime;
        const timeElapsed = currentTime - startTime;
        const progress = Math.min(timeElapsed / duration, 1); 

        window.scrollTo(0, start - distance * progress);

        if (progress < 1) {
          requestAnimationFrame(scrollAnimation); 
        }
      }

      
      requestAnimationFrame(scrollAnimation);
    }

    smoothScrollToTop();
  });

  const menuToggle = document.getElementById('menuToggle');
  const menu = document.getElementById('menu');

  menuToggle.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
</script>
</body>
</html>