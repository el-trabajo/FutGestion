<?php include('conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa administrativo</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <img src="logo.jpeg" alt="Logo" id="logo">
        <h1>FutGestion</h1>
    </header>
    <nav>
        <ul>
            <li><a href="registro_equipo.php">Registrar Equipo</a></li>
            <li><a href="equipos_registrados.php">Equipos Registrados</a></li>
            <li><a href="registro_jugador.php">Registrar Jugador</a></li>
            <li><a href="jugadores_registrados.php">Jugadores Registrados</a></li>
        </ul>
    </nav>

    <center><h1 >FutGestion</h1>
    <p>Es un programa administrativo , con el fin de facilitar y poder llevar un control más especifico en un teorneo en este caso sera de un torneo de futbol, el cual permite registrar ya sea equipo o jugador  y este se guardara en la base de datos para luego ser mostrado en tablas y sea mas facil de llevar el control perfecto para el torneo </p></center>
    <br>
    <center><img src="tactica-en-futbol.png" heigth="5%" width="25%"></center>
    <footer>
        <p>© 2024 Programa administrativo</p>
    </footer>
</body>
</html>
