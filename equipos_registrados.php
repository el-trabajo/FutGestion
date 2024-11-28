<?php include('conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Equipos Registrados</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <img src="logo.jpeg" alt="Logo" id="logo">
        <h1>Equipos Registrados</h1>
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
            <th>Nombre del Equipo</th>
            <th>Encargado</th>
            <th>Acciones</th>
        </tr>
        
        <?php
        $result = $conexion->query("SELECT * FROM equipos");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nombre_equipo'] . "</td>";
            echo "<td>" . $row['encargado'] . "</td>";
            echo "<td><a href='borrar_equipo.php?id=" . $row['id'] . "'>Borrar</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
