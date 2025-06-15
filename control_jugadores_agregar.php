<?php
include('../configuracion.php');

$codigojugador = $_POST['codigoJugador'];
$cijugador = $_POST['ciJugador'];
$appaternojugador = $_POST['apPaternoJugador'];
$apmaternojugador = $_POST['apMaternoJugador'];
$nombresjugador = $_POST['nombresJugador'];
$idclub = $_POST['idClub'];

$image = $_POST ['image'];
$filename = $_FILES['image']['name'];
$location = "../tarjetas_c25/".$codigojugador.".jpg";

move_uploaded_file($_FILES['image']['tmp_name'],$location);


$sentencia = $pdo->prepare("INSERT INTO jugadores (codigo_jugador, ci_jugador, ap_paterno_jugador, ap_materno_jugador, nombres_jugador, id_club, tarjeta_jugador) 
VALUES (:codigojugador,:cijugador,:appaternojugador,:apmaternojugador,:nombresjugador,:idclub,:tarjetajugador)");

$sentencia->bindParam('codigojugador', $codigojugador);
$sentencia->bindParam('cijugador', $cijugador);
$sentencia->bindParam('appaternojugador', $appaternojugador);
$sentencia->bindParam('apmaternojugador', $apmaternojugador);
$sentencia->bindParam('nombresjugador', $nombresjugador);
$sentencia->bindParam('idclub', $idclub);
$sentencia->bindParam('tarjetajugador', $codigojugador);

$sentencia->execute();
echo $codigojugador;
echo $cijugador;
echo $appaternojugador;
echo $apmaternojugador;
echo $nombresjugador;
echo $idclub;
echo $filename;

header('Location:../jugadores_lista.php');
