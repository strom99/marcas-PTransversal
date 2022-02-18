<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/Registro.css">
    <title>Document</title>
</head>

<body>
    <div class="centro">
        <div>
            <h4>George Prada</h4>
        </div>
        <div class="contenedorPagina">
            <div class="primeraImg">
                <img src="../img/user-circle-solid.svg" alt="">
            </div>
            <form class="formulario" action="../PHP/procesos/registrar.php" method="POST">
                <div class="cajaDatos usuario">
                    <p>
                        Nombre de usuario*
                    </p>
                    <input class="datos" type="text" id="contraUsuario" name="usuario" placeholder="Ingresa tu usuario" required>
                </div>
                <div class="cajaDatos contraseña1">
                    <p>
                        Contraseña*
                    </p>
                    <input class="datos" type="password" id="nombreUsuario" name="contraseña" placeholder="Ingresa tu contraseña" required>
                </div>
                <!--<div class="cajaDatos contraseña2">
                        <p>
                            Confirmar Contraseña*
                        </p>
                        <input class="datos" type="password" id="nombreUsuario" placeholder="Confirmar contraseña" required >
                    </div>-->
                <div class="cajaDatos correo">
                    <p>
                        Correo*
                    </p>
                    <input class="datos" type="mail" id="nombreUsuario" name="email" placeholder="Ingresa tu correo" required>
                </div>
                <div class="cajaDatos nombre">
                    <p>
                        Nombre*
                    </p>
                    <input class="datos" type="text" id="nombreUsuario" name="nombre" placeholder="Ingresa tu nombre" required>
                </div>
                <div class="cajaDatos nombre">
                    <p>
                        Primer Apellido*
                    </p>
                    <input class="datos" type="text" id="nombreUsuario" name="apellido1" placeholder="Ingresa tu Primer Apellido" required>
                </div>
                <div class="cajaDatos nombre">
                    <p>
                        Segundo Apellido*
                    </p>
                    <input class="datos" type="text" id="nombreUsuario" name="apellido2" placeholder="Ingresa tu Segundo Apellido" required>
                </div>
                <div class="cajaDatos nombre">
                    <p>
                        Telefono*
                    </p>
                    <input class="datos" type="number" id="nombreUsuario" name="telefono" placeholder="Ingrese su Telefono" required>
                </div>
                <div class="cajaDatos nombre">
                    <p>
                        Direccion*
                    </p>
                    <input class="datos" type="text" id="nombreUsuario" name="direccion" placeholder="Ingrese su Direccion" required>
                </div>
                <div class="cajaDatos nombre">
                    <p>
                        Edad*
                    </p>
                    <input class="datos" type="number" id="nombreUsuario" min="18" max="100" name="edad" placeholder="Ingrese su edad" required>
                </div>
                <div class="formulario-footer">
                    <p class="terminos">Al registrarte aceptos nuestros términos</p>
                    <button class="boton" type="submit" name="registrar">Registrar</button>
                </div>
            </form>
        </div>
    </div>

    <?php
    if (isset($_SESSION['usuario_existente'])) { ?>
        <p><?php echo $_SESSION['usuario_existente']; ?></p>
    <?php
    }
    ?>
</body>

</html>