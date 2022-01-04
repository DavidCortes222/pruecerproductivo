<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Correo Contactanos</title>
    <!-- ESTILOS -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
     
</head>
<body>
    <h1 class="center">Contactanos</h1>
    <p> <strong>Nombre: </strong> {{$contacto['nombre']}} </p>
    <p> <strong>Correo: </strong> {{$contacto['correo']}} </p>
    <p> <strong>Telefono: </strong> {{$contacto['telefono']}} </p>
    <p> <strong>Servicio: </strong> {{$contacto['servicio']}} </p>
    <p> <strong>Asunto: </strong> {{$contacto['asunto']}} </p>
    <p> <strong>Mensaje: </strong> {{$contacto['mensaje']}} </p>

</body>
</html>