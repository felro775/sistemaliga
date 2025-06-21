<?php
session_start();
if(isset($_SESSION['sesion_usuario'])){
    //echo "SI EXISTE SESION DE ".$_SESSION['sesion_usuario'];
}
else{
    echo "NO HAY SESION";
    header('Location: login.php');
}
?>

<?php


include ('Aheader.php');
include("configuracion.php");
include("controlador_jugadores/control_jugadores_ver.php");
include("controlador_clubes/control_clubes_lista.php");

foreach ($jugadores_datos as $jugadores_dato){
    $idJugador = $jugadores_dato['id_jugador'];
    $codigoJugador = $jugadores_dato['codigo_jugador'];
    $ciJugador = $jugadores_dato['ci_jugador'];
    $apPaternoJugador = $jugadores_dato['ap_paterno_jugador'];
    $apMaternoJugador = $jugadores_dato['ap_materno_jugador'];
    $nombresJugador = $jugadores_dato['nombres_jugador'];
    $idClub = $jugadores_dato['id_club'];
}
?>


            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Admin Dashboard</h3>
                    <ul>
                        <li>
                            <a href="index.html">Inicio</a>
                        </li>
                        <li>Jugadores</li>
                        <li>Ver Jugador : <?php echo $apPaternoJugador." _ ".$apMaternoJugador." _ ".$nombresJugador;?></li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->

                
                <div class="card-body" styles="display: block;">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="controlador_jugadores/control_jugadores_agregar.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="form-group">
                                                    <label for="">CODIGO DE JUGADOR</label>                                                    
                                                    <input type="text" name="codigoJugador" class="form-control" value="<?php echo $codigoJugador;?>">                                    
                                                </div>                                                
                                            </div>                                            
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">CARNET DE IDENTIDAD</label>
                                                    <input type="text" name="ciJugador" class="form-control" value="<?php echo $ciJugador;?>">                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">APELLIDO PATERNO</label>
                                                    <input type="text" name="apPaternoJugador" class="form-control" value="<?php echo $apPaternoJugador;?>">                                    
                                                </div>
                                            </div>                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">APELLIDO MATERNO</label>
                                                    <input type="text" name="apMaternoJugador" class="form-control" value="<?php echo $apMaternoJugador;?>">                                    
                                                </div>
                                            </div>
                                        </div>                
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">NOMBRES</label>
                                                    <input type="text" name="nombresJugador" class="form-control" value="<?php echo $nombresJugador;?>">                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">CLUB</label>
                                                    <input type="text" name="idClub" class="form-control" value="<?php echo $idClub;?>">
                                                </div>    
                                            </div>
                                        </div>           
                                    </div>

                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="">IMAGEN DEL JUGADOR</label>                                            
                                            <center>
                                                <img src="<?php echo "tarjetas_c25/".$codigoJugador.".jpg";?>" width="100%" alt="">
                                            </center>
                                        </div>         
                                    </div>     
                            
                                <div class="form-group">
                                    <a href="" class="btn-fill-md radius-4 text-light bg-martini">Cancelar</a>
                                    <button type="submit" class="btn-fill-md text-light bg-dark-pastel-green">Guardar</a>
                                </div>
                            
                            </div>                            
                            </form>                             
                        </div>
                    </div>
                </div>




                <!-- Dashboard summery Start Here -->            


                <!-- Dashboard summery End Here -->   
                <!-- Social Media Start Here -->                


                <!-- Social Media End Here -->

<?php
include ('Afooter.php');
?>
