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
include("controlador_jugadores/control_jugadores_lista.php");
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
                        <li> <a href="jugadores_agregar.php" <button type="button" class="btn-fill-md radius-30 text-light bg-light-sea-green">AGREGAR<i class="fas fa-cloud-upload-alt mg-l-10"></i></button></a> </li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->

                <!-- INICIO BARRA DE BUSQUEDA -->
                    <form class="mg-b-20">
                        <div class="row gutters-8">
                                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Busqueda por CI ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Busqueda por Apellido ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Busqueda por Nombre ..." class="form-control">
                                </div>
                                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                    <button type="submit" class="btn-fill-lmd text-light bg-gradient-gplus">BUSCAR</button>
                                </div>
                        </div>
                    </form>
                <!-- FIN BARRA DE BUSQUEDA -->    

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
						            foreach ($jugadores_datos as $jugadores_dato){						    
						        ?>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label"><?php echo $jugadores_dato['id_jugador']?></label>
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


                
