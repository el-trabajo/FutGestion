<?php include('conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugadores Registrados</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <img src="logo.jpeg" alt="Logo" id="logo">
        <h1>Jugadores Registrados</h1>
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
    <table>
        <tr>
            <th>ID</th>
            <th>Equipo</th>
            <th>Nombre del Jugador</th>
            <th>Edad</th>
            <th>Posición</th>
            <th>Acciones</th>
        </tr>
        
        <?php
        $result = $conexion->query("SELECT jugadores.id, jugadores.nombre_jugador, jugadores.edad, jugadores.posicion, equipos.nombre_equipo FROM jugadores JOIN equipos ON jugadores.equipo_id = equipos.id");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nombre_equipo'] . "</td>";
            echo "<td>" . $row['nombre_jugador'] . "</td>";
            echo "<td>" . $row['edad'] . "</td>";
            echo "<td>" . $row['posicion'] . "</td>";
            echo "<td><a href='borrar_jugador.php?id=" . $row['id'] . "'>Borrar</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
