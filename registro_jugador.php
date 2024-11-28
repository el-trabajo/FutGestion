<?php include('conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Jugador</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <img src="logo.jpeg" alt="Logo" id="logo">
        <h1>Registrar Jugador</h1>
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
    <form action="registro_jugador.php" method="POST">
        <label for="equipo_id">Selecciona el equipo:</label>
        <select name="equipo_id" required>
            <?php
            $equipos = $conexion->query("SELECT * FROM equipos");
            while ($equipo = $equipos->fetch_assoc()) {
                echo "<option value='" . $equipo['id'] . "'>" . $equipo['nombre_equipo'] . "</option>";
            }
            ?>
        </select>
<br>
        <label for="nombre_jugador">Nombre del Jugador:</label>
        <input type="text" name="nombre_jugador" required>
        
        <label for="edad">Edad:</label>
        <input type="number" name="edad" required>
        
        <label for="posicion">Posición:</label>
        <input type="text" name="posicion" required>
        
        <button type="submit">Registrar Jugador</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $equipo_id = $_POST['equipo_id'];
        $nombre_jugador = $_POST['nombre_jugador'];
        $edad = $_POST['edad'];
        $posicion = $_POST['posicion'];

        $query = "INSERT INTO jugadores (equipo_id, nombre_jugador, edad, posicion) VALUES ('$equipo_id', '$nombre_jugador', '$edad', '$posicion')";
        if ($conexion->query($query) === TRUE) {
            echo "<p>Jugador registrado exitosamente.</p>";
        } else {
            echo "<p>Error al registrar jugador: " . $conexion->error . "</p>";
        }
    }
    ?>

</body>
</html>
