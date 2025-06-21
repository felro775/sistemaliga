<?php

$id_jugador_get = $_GET['id'];

$sql_jugadores = "SELECT * FROM jugadores WHERE id_jugador ='$id_jugador_get'";
$query_jugadores = $pdo->prepare($sql_jugadores);
$query_jugadores->execute();
$jugadores_datos = $query_jugadores->fetchAll(PDO::FETCH_ASSOC);
?>
