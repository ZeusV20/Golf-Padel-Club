<?php
session_start();
require('assets/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO usuario (username, password) VALUES (?, ?)");
    try {
        $stmt->execute([$username, $password]);
        $_SESSION['message'] = "Registro exitoso. Ahora puedes iniciar sesión.";
        header("Location: signin.php");
        exit;
    } catch (PDOException $e) {
        $_SESSION['message'] = "El nombre de usuario ya está en uso.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="flex justify-center items-center h-screen h-14 bg-gradient-to-r from-violet-500 to-fuchsia-500">
    <div class="w-96 p-6 shadow-lg bg-white rounded-md">
      <h1 class="text-3xl block text-center font-semibold"><i class="fa-solid fa-user"></i> Registro</h1>
      <hr class="mt-3">
      <form method="post">
        <div class="mt-3">
          <label for="username" class="block text-base mb-2">Usuario</label>
          <input type="text" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600" name="username" placeholder="Nombre de usuario" required>
        </div>
        <div class="mt-3">
          <label for="username" class="block text-base mb-2">Contraseña</label>
          <input type="password" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600" name="password" placeholder="Contraseña" required>
        </div>
        <div class="mt-3">
          <button type="submit" class="border-2 border-indigo-700 bg-indigo-700 text-white py-1 w-full rounded-md hover:bg-transparent hover:text-indigo-700 font-semibold"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;&nbsp;> Registrar</button>
        </div>
        <div>
          <a href="login.php" class="text-indigo-800 font-semibold">Ya tengo cuenta</a>
        </div>
        <?php if (isset($_SESSION['message'])): ?>
        <p><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></p>
    <?php endif; ?>
      </form>
    </div>
  </div>
</body>
</html>