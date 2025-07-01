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
include("controlador_clubes/control_clubes_lista.php");
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
                        <li>Agregar Jugador</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->

                
                <div class="card-body" styles="display: block;">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="controlador_jugadores/control_jugadores_agregar.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row">                                            
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">CODIGO DE JUGADOR</label>
                                                    <?php 
                                                    function ceros($numero){
                                                        $len=0;
                                                        $cantidad_ceros = 5;
                                                        $aux = $numero;
                                                        $pos = strlen($numero);
                                                        $len = $cantidad_ceros-$pos;
                                                        for($i=0;$i<$len;$i++){
                                                            $aux="0".$aux;
                                                        }
                                                        return $aux;
                                                    }
                                                    $contador_id_jugadores = 1;
                                                    foreach ($jugadores_datos as $jugadores_dato){
                                                        $contador_id_jugadores = $contador_id_jugadores + 1;                                                        
                                                    }
                                                    ?>
                                                    <input type="text" name="codigoJugador" class="form-control" value="<?php echo "C25-".ceros($contador_id_jugadores); ?>">                                    
                                                </div>
                                            </div>                                          
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">CARNET DE IDENTIDAD</label>
                                                    <input type="text" name="ciJugador" class="form-control" placeholder="Introdusca su Carnet Identidad...">                                    
                                                </div>
                                            </div>            
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">APELLIDO PATERNO</label>
                                                    <input type="text" name="apPaternoJugador" class="form-control" placeholder="Introdusca su Apellido Paterno...">                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">            
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">APELLIDO MATERNO</label>
                                                    <input type="text" name="apMaternoJugador" class="form-control" placeholder="Introdusca su Apellido Materno...">                                    
                                                </div>
                                            </div>                                            
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">NOMBRES</label>
                                                    <input type="text" name="nombresJugador" class="form-control" placeholder="Introdusca sus Nombres...">                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">FECHA NACIMIENTO</label>
                                                    <input type="date" name="fechaNacJugador" class="form-control" >                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">    
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">CLUB</label>
                                                    <select name="idClub" id="" class="form-control">
                                                        <?php 
                                                            foreach ($clubes_datos as $clubes_dato) { ?>
                                                            <option value="<?php echo $clubes_dato['id_club'];?>"><?php echo $clubes_dato['nombre_club'];?></option>
                                                        <?php    
                                                        }
                                                        ?>                                       
                                                    </select>
                                                </div>    
                                            </div>
                                        </div>
                                                                                                                                              
                                    </div>
                                                                
                                    <div class="col-md-8">                                    
                                        <div class="form-group">
                                            <label for="">IMAGEN DEL JUGADOR</label>
                                            <input type="file" name="image" class="form-control" id="file">
                                            <output id="list"></output>
                                            <script>
                                                function archivo(evt) {
                                                    var files = evt.target.files;
                                                    for (var i = 0, f; f = files[i]; i++) {
                                                        if (!f.type.match('image.*')) {
                                                            continue;
                                                        }
                                                        var reader = new FileReader();
                                                        reader.onload = (function (theFile) {
                                                            return function (e) {
                                                                document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="',e.target.result, '" width="100%" title="', escape(theFile.name), '"/>'].join('');
                                                            };
                                                        })(f);
                                                        reader.readAsDataURL(f); 
                                                    }
                                                }
                                                document.getElementById('file').addEventListener('change', archivo, false);
                                            </script>
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
