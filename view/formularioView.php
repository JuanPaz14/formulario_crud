<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/style.css">
    <title>Usuario</title>
</head>

<body>
    <form action="" method="get">
        <p>¡utilizar id para cualquier accion!</p>
        <br>
        
        <div class="input-group">
            <label for="id">id:</label>
            <input type="text" name="id" id="id">
        </div>

        <div class="input-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre"  >
        </div>

        <div class="input-group">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" >
        </div>

        <div class="input-group">
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" id="direccion">
        </div>

        <div class="input-group">
            <label for="telefono">Teléfono:</label>
            <input type="number" name="telefono" id="telefono">
        </div>

        <div class="input-group">
            <label for="email">Correo:</label>
            <input type="email" name="email" id="email">
        </div>

        <div class="input-group">
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" id="usuario">
        </div>

        <div class="input-group">
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password">
        </div>

        <div class="button-container">
            <div>
                <button type="submit" name="m" value="guardar">GUARDAR</button>
            </div>
            <div>
                <button type="submit" name="m" value="mostrar">MOSTRAR</button>
            </div>
            <div>
                <button type="submit" name="m" value="actualizar">ACTUALIZAR</button>
            </div>
            <div>
                <button type="submit" name="m" value= "eliminar">ELIMINAR</button>
            </div>
        </div>
        <div class="contact-info">

            <div class="info">
                <span><i class="fas fa-map-marker-alt"></i> Avenida 6N <br>No. 28N - 102. <br>Cali - Valle</span>
            </div>

            <div class="info">
                <span><i class="fas fa-phone"></i> +57 602 6652828</span>
            </div>

        </div>
    </form>
<script src="https://kit.fontawesome.com/bbff992efd.js" crossorigin="anonymous"></script>        
</body>

</html>