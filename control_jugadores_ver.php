<?php

$id_jugador_get = $_GET['id'];

$sql_jugadores = "SELECT * FROM jugadores WHERE id_jugador ='$id_jugador_get'";
$query_jugadores = $pdo->prepare($sql_jugadores);
$query_jugadores->execute();
$jugadores_datos = $query_jugadores->fetchAll(PDO::FETCH_ASSOC);

foreach ($jugadores_datos as $jugadores_dato){
    $idJugador = $jugadores_dato['id_jugador'];
    $codigoJugador = $jugadores_dato['codigo_jugador'];
    $ciJugador = $jugadores_dato['ci_jugador'];
    $apPaternoJugador = $jugadores_dato['ap_paterno_jugador'];
    $apMaternoJugador = $jugadores_dato['ap_materno_jugador'];
    $nombresJugador = $jugadores_dato['nombres_jugador'];
    $fechaNacJugador = $jugadores_dato['fecha_nac_jugador'];
    $idClub = $jugadores_dato['id_club'];
}
?>
