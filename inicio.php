<?php

    session_start();

    if (!isset($_SESSION['loggedin'])) {
        
        header('Location: index.html');
        exit();
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class = 'loggedin'>
    <nav clas = "navtop">
        <h1>Sistema de login basico ConfiguroWeb</h1>
        <a href="perfil.php"><i class = "fas fa-user-circle"></i>Informacion del usuario</a>
        <a href="cerrar-sesion.php"><i class = "fas fa-sign-out-alt"></i>Cerrar sesion</a>
    </nav>

    <div class ="content">
    <h2>Pagina de incio</h2>
    <p>Hola de nuevo, <?=  $_SESSION['name']?> !!!</p>
    </div>

</body>
</html>