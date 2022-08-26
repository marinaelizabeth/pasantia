<?php
ini_set('date.timezone', 'America/Asuncion');
include_once "controlador/soporteControlador.php";

$datos = new soporteControlador();


?>
<html>
<div class="container bg-warning">
    <div class="row">
        <div class="col-auto">
           <!-- <form id="" action="" method="post">-->
                <!--fila de las fechas-->
                
                <div class="row">
                    <div class="col-auto">
                        <label>Fecha:</label>
                        <input type="text" value="<?php echo date("d/m/y") ?>">
                    </div>
                    <div class="col-auto">
                        <label>Hora_Inic:</label>
                        <input id= "horaInicio" type="time" value="<?php echo date('h:i:s') ; ?>">
                    </div>
                    <div class="col-auto">
                        <label>Hora_Fin:</label>
                        <input id="horaFin" type="time" value="<?php echo date('h:i:s') ; ?>" >
                    </div>
                    <div class="col-auto">
                        <label>Tiempo minutos:</label>
                        <input id= "resultado" type="text">
                    </div>
                    <div class="col-auto">
                        <button onclick="HoraFin()" class="btn btn-light">Finalizar atencion</button>
                    </div>
                </div>
                <!--datos del operador-->
                <div class="row">
                    <div class="col-auto">
                        <?php
                        $datosOperador = $datos->DatosDelOperador();
                        //echo json_encode ($datosOperador);
                        foreach ($datosOperador as $Ope) : ?>
                            <label>Operador:</label>
                            <input type="text" name="operador_cod" value="<?php echo $Ope->op_codigo; ?>">
                            <input type="text" name="operador" value="<?php echo $Ope->op_nombre; ?>">

                    </div>
                    <div class="col-auto">
                        <select name="" id="">
                            <option value=""><?php echo $Ope->op_usuario; ?></option>
                        </select>
                    </div>
                <?php endforeach; ?>
                </div>
                <!--datos del empresa-->
                <div class="row">
                    <div class="col-auto">
                        <label>Empresa:</label>
                        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#datoEmpresa">
                            Buscar
                        </button>
                        <input type="text" id="empresaCod">
                        <input type="text" id="empresa">
                    </div>

                </div>
                <!--datos del Usuario/Cliente-->
                <div class="row">
                    <div class="col-auto">
                        <label>Usuario/Cliente:</label>
                        <input type="text" name="usuario">
                    </div>
                </div>
                <!--datos del servicio-->
                <div class="row">
                    <div class="col-auto">
                        <label>Tipo de servicio:</label>
                        <select>
                            <option value=""><?php ?></option>
                        </select>
                    </div>
                    <div class="col-auto">
                        <label>Id Team:</label>
                        <input type="text" id="teamN">
                        <input type="text" id="passN">
                    </div>
                </div>
                <!--//-->
                <div class="row">
                    <div class="col-auto">
                        <label for="">Condicion de atencion:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="condicionDeAtencion" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Solucionado
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="condicionDeAtencion" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                En proceso
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="condicionDeAtencion" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Solucionado por tercero
                            </label>
                        </div>
                    </div>
                    <div class="col-auto">
                        <label for="">Comunicacio via</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="comunicacioVia" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Telefonica
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="comunicacioVia" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                WhatsApp
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="comunicacioVia" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Otros
                            </label>
                        </div>
                    </div>
                </div>
                <!--botones -->
                <div class="row-4">
                    <center>
                        <button type="button" class="btn btn-light">Guardar</button>
                        <button type="button" class="btn btn-outline-dark">Nuevo</button>
                        <button type="button" class="btn btn-light">Salir</button>
                    </center>
                </div>
           <!-- </form>-->
        </div>
    </div>
</div>



<!--tabla de la base de datos-->
<!--<div class="container text-center">
    <div class="row align-items-start">
        <table id="example" class="table table-hover" style="width:50%">
            <thead class="table-success">
                <tr>
                    <th>Codigo</th>
                    <th>Fecha Operacion</th>
                    <th>Hora</th>
                    <th>Observacion</th>

                </tr>
            </thead>
            <tbody>
                </*?php
                $datosSoporte = $datos->ListaSoporte();
                //echo json_encode ($datos);
                foreach ($datosSoporte as $r) :*/
                ?>
                    <tr>
                        <td><//?php echo $r->at_cod; ?></td>
                        <td><//?php echo $r->at_fechaop; ?></td>
                        <td><//?php echo $r->at_hora; ?></td>
                        <td><//?php echo $r->at_obs; ?></td>
                    </tr>
                <//?php endforeach; ?>
            </tbody>
            <tfoot class="table-success">
                <tr>
                    <th>Codigo</th>
                    <th>Fecha Operacion</th>
                    <th>Hora</th>
                    <th>Observacion</th>

                </tr>
            </tfoot>
        </table>
    </div>
</div>
                -->



</html>



<!-- Modal -->

<div class="modal fade" id="datoEmpresa" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Datos de la Empresa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="datosEmpresa" class="row align-items-start ">
                    <table id="empresa1" class="table table-bordered  display nowrap" cellspacing="0" width="100%">
                        <thead class="table-success">
                            <tr>
                                <th>Codigo</th>
                                <th>Empresa</th>
                                <th>Team</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $datosEmpresa = $datos->DatosEmpresa();
                            //echo json_encode ($datosEmpresa);
                            foreach ($datosEmpresa as $r) :
                            ?>
                                <tr>
                                    <td><?php echo $r->cs_codigo; ?></td>
                                    <td><?php echo $r->cs_nombre; ?></td>
                                    <td><?php echo $r->cs_id_team; ?></td>
                                    <td><?php echo $r->cs_passteam; ?></td>
                                    <td><button onclick="seleccionar('<?php echo $r->cs_codigo; ?>', '<?php echo $r->cs_nombre; ?>',
                                                                    '<?php echo $r->cs_id_team; ?>','<?php echo $r->cs_passteam; ?>')" type="button" id="obtener" class="btn btn-light" data-bs-dismiss="modal" aria-label="Close">*</button></td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot class="table-success">
                            <tr>
                                <th>Codigo</th>
                                <th>Empresa</th>
                                <th>Team</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>