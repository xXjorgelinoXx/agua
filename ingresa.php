<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header>
    <a href="index.html"><img src="Logo-proy.png" alt="Logo"></a>
    <div class="alinear">
        <button><a href="ingresa.php">Ingresar</a></button>
        <button><a href="registrate.php">Registrate</a></button>    
    </div>
</header>

    <form action="ingresa.php" method="post">
    <h1>Acceder</h1>
    <h4>Correo</h4>
        <input type="text" name="email" placeholder="Ingresa tu correo">
    <h4>Contraseña</h4>
        <input type="password" name="password" placeholder="Ingresa tu contraseña">
        <input type="submit" value="Ingresar">
    </form>
</body>
</html>