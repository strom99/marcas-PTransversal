<?php
session_start();

if (!isset($_SESSION['datosUsuario'])) {
    header('Location: http://localhost/maquetacion-M09/PHP/formularios/login.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>

<body>

    <h2>Bienvenido <?php echo $_SESSION['datosUsuario']['Usuario']; ?></h2>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit omnis dolores veritatis quaerat magni, consectetur aspernatur, numquam sunt dolore aperiam eum, incidunt quam id eos. Suscipit, ipsam atque! Numquam, tempora?</p>

    <form action="../procesos/logout.php" method="POST">
        <input type="submit" value="Salir" name="salir">
    </form>

</body>

</html>