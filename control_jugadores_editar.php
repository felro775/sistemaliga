<?php
include('../configuracion.php');

$idjugador = $_POST['idJugador'];
$cijugador = $_POST['ciJugador'];
$appaternojugador = $_POST['apPaternoJugador'];
$apmaternojugador = $_POST['apMaternoJugador'];
$nombresjugador = $_POST['nombresJugador'];
$fechanacjugador = $_POST['fechaNacJugador'];


$sentencia = $pdo->prepare("UPDATE jugadores 
    SET 
        ci_jugador=:cijugador,
        ap_paterno_jugador=:appaternojugador,
        ap_materno_jugador=:apmaternojugador,
        nombres_jugador=:nombresjugador,
        fecha_nac_jugador=:fechanacjugador
    WHERE id_jugador = :idjugador ");


$sentencia->bindParam('idjugador', $idjugador);
$sentencia->bindParam('cijugador', $cijugador);
$sentencia->bindParam('appaternojugador', $appaternojugador);
$sentencia->bindParam('apmaternojugador', $apmaternojugador);
$sentencia->bindParam('nombresjugador', $nombresjugador);
$sentencia->bindParam('fechanacjugador', $fechanacjugador);
$sentencia->execute();

header('Location:../jugadores_lista.php');

?>
