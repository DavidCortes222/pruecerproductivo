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
<p>Nombre: {{$datos['nombreC']}}</p> 
<p>Correo: {{$datos['emailC']}} </p>
<p style="color: red">Mensaje : {{$datos['mensajeC']}}</p>

</body>
</html>