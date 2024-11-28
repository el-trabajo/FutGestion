<?php
include('conexion.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conexion->query("DELETE FROM jugadores WHERE id=$id");
    header("Location: jugadores_registrados.php");
}
?>

