<?php include('conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Equipo</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <img src="logo.jpeg" alt="Logo" id="logo">
        <h1>Registrar Equipo</h1>
    </header>
    <nav>
        <ul>
        <li><a href="index.php">Menu inicial</a></li>
            <li><a href="registro_equipo.php">Registrar Equipo</a></li>
            <li><a href="equipos_registrados.php">Equipos Registrados</a></li>
            <li><a href="registro_jugador.php">Registrar Jugador</a></li>
            <li><a href="jugadores_registrados.php">Jugadores Registrados</a></li>
        </ul>
    </nav>
    <form action="registro_equipo.php" method="POST">
        <label for="nombre_equipo">Nombre del Equipo:</label>
        <input type="text" name="nombre_equipo" required>
        
        <label for="encargado">Nombre del Encargado:</label>
        <input type="text" name="encargado" required>
        
        <button type="submit">Registrar Equipo</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre_equipo = $_POST['nombre_equipo'];
        $encargado = $_POST['encargado'];

        $query = "INSERT INTO equipos (nombre_equipo, encargado) VALUES ('$nombre_equipo', '$encargado')";
        if ($conexion->query($query) === TRUE) {
            echo "<p>Equipo registrado exitosamente.</p>";
        } else {
            echo "<p>Error al registrar equipo: " . $conexion->error . "</p>";
        }
    }
    ?>

</body>
</html>
