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
include("controlador_jugadores/control_jugadores_lista_club.php");
?>


            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>LISTA DE JUGADORES - CAMPEONATO 2025</h3>
                    <ul>
                        <li>
                            <a href="index.php">Inicio</a>
                        </li>
                        <li>
                            <a href="jugadores_lista.php">Jugadores</a>    
                        </li>
                        <li>
                            <a href="jugadores_honores.php">Honores</a>    
                        </li>                                                
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
               

                    <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                
                                <thead>
                                    <tr>
                                        <th> 
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll">
                                                <label class="form-check-label">ID</label>
                                            </div>
                                        </th>
                                        <th>Foto</th>
                                        <th>Codigo</th>
                                        <th>CI</th>
                                        <th>Paterno</th>
                                        <th>Materno</th>
                                        <th>Nombres</th>
                                        <th>Id_Club</th>
                                        
                                        <th>Opciones</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
						        <?php
                                    $contador = 0;
						            foreach ($jugadores_datos as $jugadores_dato){
                                    $contador = $contador + 1;    						    
						        ?>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label"><?php echo $contador?></label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student8.png" alt="student"></td>	
                                        <td><?php echo $jugadores_dato['codigo_jugador']?></td>                                        
                                        <td><?php echo $jugadores_dato['ci_jugador']?></td>								
                                        <td><?php echo $jugadores_dato['ap_paterno_jugador']?></td>
                                        <td><?php echo $jugadores_dato['ap_materno_jugador']?></td>
                                        <td><?php echo $jugadores_dato['nombres_jugador']?></td>
                                        <td><?php echo $jugadores_dato['id_club']?></td>
                                        <td>
                                            <center>
                                                <div class="btn-group">
                                                    <a href="jugadores_ver.php?id=<?php echo $jugadores_dato['id_jugador']?>" type="button" class="btn-fill-lmd radius-30 text-light shadow-dodger-blue bg-dodger-blue"><i class="fa fa-eye"></i> VER </a>
                                                    <a href="jugadores_editar.php?id=<?php echo $jugadores_dato['id_jugador']?>"type="button" class="btn-fill-lmd radius-30 text-light shadow-dark-pastel-green bg-dark-pastel-green"><i class="fa fa-pencil-alt"></i> EDITAR </a>
                                                    <button type="button" class="btn-fill-lmd radius-30 text-light shadow-orange-peel bg-orange-peel"><i class="fa fa-trash"></i> BORRAR </button>
                                                </div>
                                            </center>
                                        </td>                                   
                                    </tr>
                                </tbody>	
                                <?php						
                                }
                                ?>		
                            </table>
                        </div>



                <!-- Dashboard summery Start Here -->
                


                <!-- Dashboard summery End Here -->

   
                <!-- Social Media Start Here -->
                


                <!-- Social Media End Here -->

<?php
include ('Afooter.php');
?>
