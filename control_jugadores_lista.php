<?php
$sql_jugadores = "SELECT * FROM jugadores";
$query_jugadores = $pdo->prepare($sql_jugadores);
$query_jugadores->execute();
$jugadores_datos = $query_jugadores->fetchAll(PDO::FETCH_ASSOC);
?>
