<?php
include('conexion.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conexion->query("DELETE FROM equipos WHERE id=$id");
    header("Location: equipos_registrados.php");
}
?>
