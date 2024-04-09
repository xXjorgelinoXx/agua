<?php

require 'database.php';

$message = '';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO user (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
        $message = 'Creaste un usuario correctamente';
    } else {
        $message = 'Perdon hay un problema con tu contraseña';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php if (!empty($message)): ?>
    <p> <?php $message ?></p>
<?php endif; ?>



<header>
    <a href="index.html"><img src="Logo-proy.png" alt="Logo"></a>
    <div class="alinear">
        <button><a href="ingresa.php">Ingresar</a></button>
        <button><a href="index.html">Cerrar</a></button>    
    </div>
</header>


<form action="registrate.php" method="post">
    <h1>Registrate</h1>
    <h4>Correo</h4>
        <input type="text" name="email" placeholder="Ingresa tu correo">
    <h4>Contraseña</h4>
        <input type="password" name="password" placeholder="Ingresa tu contraseña">
    
    <input type="submit" value="Registrar">
    </form>
</body>
</html>