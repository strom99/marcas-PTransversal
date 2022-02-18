<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/InicioSesion.css">
    <title>Pagina Inicio Sesion</title>
</head>
<body>
    
    <div class="centro">

        <div>
            <h4>George Prada</h4>
        </div>
        <div class="contenedorPagina">
            <div class="imagen-user">
                <img src="../img/user-circle-solid.svg" alt="icono usuario">
            </div>
            <form class="formulario" action="../html/paginaInicio.html">

                <div class="cajaDatos">
                    <label for="nombreUsuario">
                        <img src="../img/user-circle-solid.svg" alt="icono usuario">
                    </label>
                    <input class="datos" type="text" id="nombreUsuario" placeholder="Usuario" required>
                </div>
                <div class="cajaDatos">
                    <label for="contraUsuario">
                        <img src="../img/lock-solid.svg" alt="icono candado">
                    </label>
                    <input  class="datos" type="password" id="contraUsuario" placeholder="Contraseña" required>
                </div>
                <input class="boton-inicio" type="submit" value="Iniciar Sesion">
                <nav class="navegador">
                    <a href="Registro.html">¿No tienes cuenta?  Crea una ahora</a>
                </nav>
                <div>
                <p> O ingresa con ...</p>
                <div class="ingresoEnlazado">
                    <a href="https://www.facebook.com/" >
                        <img src="../img/facebook-f-brands.svg" alt="">
                    </a>
                    <a href="https://www.google.es/">
                        <img src="../img/google-brands.svg" alt="">
                    </a>
                </div>
                <a class="contacto" href="Contacto.html">Ponte en contacto con nosotros</a>
            </div>
            </form>

            
    </div>
    </div>
</body>
</html>