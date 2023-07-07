<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "login-php";


    $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario</title>
</head>
<body>


    <form action="#" name = "login-php" method = "post">

    <input type="text" name = "username" placeholder = "username">
    <input type="password" name = "password" placeholder = "password">
    <input type="email" name = "email" placeholder = "email">

    <input type="submit" name = "registro">
    <input type="reset">
    <br>
    <a href="index.html">Volver a Login</a>

    </form>
    
</body>
</html>


<?php

    if(isset($_POST['registro'])){

        $username= $_POST ['username'];
        $password= $_POST ['password'];
        $email= $_POST ['email'];


        $insertarDatos = "INSERT INTO accounts VALUES('', '$username', '$password', '$email')";

        $ejecutarInsertar= mysqli_query ($enlace, $insertarDatos);

    }


?>