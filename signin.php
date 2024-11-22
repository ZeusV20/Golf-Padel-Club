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
    <title >Iniciar Sesión</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class= "flex justify-center items-center h-screen h-14 bg-gradient-to-r from-violet-500 to-fuchsia-500">
    <div class= "w-96 p-6 shadow-lg bg-white rounded-md">
      <h1 class="text-3xl block text-center font-semibold"><i class="fa-solid fa-user"></i> Iniciar Sesión</h1>
      <hr class="mt-3">
         <form method="post">
          <div class="mt-3">
            <label for="username" class="block text-base mb-2">Usuario</label>
        <input class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600" type="text" name="username" placeholder="Ingrese su usuario..."
        required>
          </div>
        <div class="mt-3">
          <label for="password" class="block text-base mb-2">Contraseña</label>
          <input class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600" type="password" name="password" placeholder="Ingrese su contraseña"
        required>
        </div> 
        <div class="mt-3">
          <button type="submit" class="border-2 border-indigo-700 bg-indigo-700 text-white py-1 w-full rounded-md hover:bg-transparent hover:text-indigo-700 font-semibold"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;&nbsp;> Iniciar sesión</button>
        </div>
        <div>
          <a href="createA.php" class="text-indigo-800 font-semibold">Registrar</a>
        </div>
        <?php if (isset($_SESSION['message'])): ?>
        <p><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></p>
    <?php endif; ?>
    </form>
    </div> 
  </div>
</body>
</html>