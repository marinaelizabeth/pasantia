<html>
<br>
<center> 
    <h2>Formulario</h2>
</center>
<br>
<form class="col-12" action="?c=guardar" method="POST">
    <div class="container bg-success p-2 text-dark bg-opacity-25">
        <div class="row">
            <div class="col-auto">
                <!--fila de las fechas-->
                <div class="row">
                    <div class="col-auto">
                        <label>Fecha:</label>
                        <input type="date" id="fecha" name="fecha" value="<?php echo date('Y-m-d'); ?>" size=20 style="width: 110px;">
                    </div>
                    <div class="col-auto">
                        <label>Hora_Inic:</label>
                        <input type="time" id="horaInicio" name="horaInicio" value="<?php echo date('h:i'); ?>">
                    </div>
                    <div class="col-auto">
                        <label>Hora_Fin:</label>
                        <input type="time" id="horaFin" name="horaFin" value="<?php echo date('h:i'); ?>">
                    </div>
                    <div class="col-auto">
                        <label>Tiempo minutos:</label>
                        <input id="resultado" name="resultado" type="text">
                    </div>
                    <div class="col-auto">
                        <button type="button" onclick="HoraFin()" class="btn btn-light">Finalizar atencion</button>
                    </div>
                </div>
                <!--datos del operador-->
                <div class="row">
                    <div class="col-auto">
                        <?php
                        foreach ($this->model->DatosDelOperador() as $Ope) : ?>
                            <label>Operador:</label>
                            <input type="text" name="operador_cod" value="<?php echo $Ope->op_codigo; ?>">
                            <input type="text" name="operador" value="<?php echo $Ope->op_nombre; ?>">
                    </div>
                    <div class="col-auto">
                        <select name="nomUsuario" id="nomUsuario">
                            <option value=""><?php echo $Ope->op_usuario; ?></option>
                        </select>
                    </div>
                <?php endforeach; ?>
                </div>
                <!--datos del empresa-->
                <div class="row">
                    <div class="col-auto">
                        <label>Empresa:</label>
                        <input type="text" id="empresaCod"name= "empresaCod" SIZE=10 MAXLENGTH=10>
                        <input type="text" id="empresa">
                        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#datoEmpresa">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
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
                        <select id="servicios" name="servicios" onchange="ShowSelected();">
                            <option value="0">Seleccione:</option>
                            <?php foreach ($this->model->DatosDelServicios() as $r) : ?>
                                <option value="<?php echo $r->ss_codigo ?>"><?php echo $r->ss_descripcion ?></option>
                            <?PHP endforeach; ?>
                        </select>
                    </div>
                    <div class="col-auto">
                        <label>Id Team:</label>
                        <input type="text" id="teamN" name="teamN">
                        <input type="text" id="passN" name="passN">
                    </div>
                </div>
                <!--tipo Ejecutable-->
                <div class="row">
                    <div class="col-auto">
                        <label>Tipo Ejecutable:</label>
                        <select id="ejecutable" name="ejecutable">
                            <option value="0">Seleccione:</option>
                            <?php foreach ($this->model->DatosEjecutable() as $t) : ?>
                                <option value="<?php echo $t->tes_codigo ?>"><?php echo $t->tes_descripcion ?></option>
                            <?PHP endforeach; ?>
                        </select>
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
                        <div class="row">
                            <div class="mb-3">
                                <label for="observacion" class="col-form-label">Observacion:</label>
                                <textarea class="form-control" id="observacion" name="observacion"></textarea>
                            </div>
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
                        <button type="submit" class="btn btn-light">
                            <i class="fa-solid fa-share-from-square"></i>
                            Guardar
                        </button>
                        <button type="" class="btn btn-light">
                            <i class="fa-solid fa-file"></i>
                            Nuevo
                        </button>
                        <button type="" class="btn btn-light">
                            <i class="fa-solid fa-right-to-bracket"></i>
                            Salir
                        </button>
                    </center>
                </div>

            </div>
        </div>
    </div>
</form>



<!--
    //////////////////////////////////////////////////////////////////////////////////////////////////
                                        tabla de la base de datos
    /////////////////////////////////////////////////////////////////////////////////////////////////
-->
<br>
<center>
    <h2>Tabla </h2>
</center>
<br>
<div class="container">
    <div class="row ">
        <table id="soporte" class="table table-responsive table-condense table-bordered  display nowrap" cellspacing="0" width="100%">
            <thead class="table-success">
                <tr>
                    <th>Codigo</th>
                    <th>Fecha Operacion</th>
                    <th>Hora</th>
                    <th>Observacion</th>
                    <th>Codigo</th>
                    <th>Fecha Operacion</th>
                    <th>Hora</th>
                    <th>Observacion</th>
                    <th>Codigo</th>
                    <th>Fecha Operacion</th>
                    <th>Hora</th>
                    <th>Observacion</th>
                    <th>Codigo</th>
                    <th>Fecha Operacion</th>
                    <th>Hora</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($this->model->ListaSoporte() as $k) :
                ?>
                    <tr>
                        <td><?php echo $k->at_cod; ?></td>
                        <td><?php echo $k->at_fechaop; ?></td>
                        <td><?php echo $k->at_hora; ?></td>
                        <td><?php echo $k->at_cod_cliente; ?></td>
                        <td><?php echo $k->at_cod_sevicios; ?></td>
                        <td><?php echo $k->at_obs; ?></td>
                        <td><?php echo $k->at_estado; ?></td>
                        <td><?php echo $k->at_operador; ?></td>
                        <td><?php echo $k->at_cod_ejecutable; ?></td>
                        <td><?php echo $k->at_usuario; ?></td>
                        <td><?php echo $k->at_condicion; ?></td>
                        <td><?php echo $k->at_comunicacion; ?></td>
                        <td><?php echo $k->at_horafin; ?></td>
                        <td><?php echo $k->at_tiempo; ?></td>
                        <td><?php echo $k->usuario; ?></td>

                        <td>
                            <a href='?c=nuevo&id=<?php echo $k->at_cod; ?>' class='btn btn-small btn-warning'>
                                <i class='fa-solid fa-pen-to-square'></i>
                            </a>
                            <a href='?c=eliminar&id=<?php echo $k->at_cod; ?>' class='btn btn-small btn-danger'>
                                <i class='fa-solid fa-trash'></i>
                            </a>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot class="table-success">
                <tr>
                    <th>Codigo</th>
                    <th>Fecha Operacion</th>
                    <th>Hora</th>
                    <th>Observacion</th>
                    <th>Codigo</th>
                    <th>Fecha Operacion</th>
                    <th>Hora</th>
                    <th>Observacion</th>
                    <th>Codigo</th>
                    <th>Fecha Operacion</th>
                    <th>Hora</th>
                    <th>Observacion</th>
                    <th>Codigo</th>
                    <th>Fecha Operacion</th>
                    <th>Hora</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
       
    </div>
</div>


</html>



<!-- *********************************************************************
/////////////////////////////////////////////////////////////////////////
    Modal de datos de la tabla emplesa
////////////////////////////////////////////////////////////////////////
**************************************************************************-->

<div class="modal fade" id="datoEmpresa" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Datos de la Empresa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="datoEmpresa" class="row ">
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
                            foreach ($this->model->DatosEmpresa() as $r) :
                            ?>
                                <tr>
                                    <td><?php echo $r->cs_codigo; ?></td>
                                    <td><?php echo $r->cs_nombre; ?></td>
                                    <td><?php echo $r->cs_id_team; ?></td>
                                    <td><?php echo $r->cs_passteam; ?></td>
                                    <td><button onclick="seleccionar('<?php echo $r->cs_codigo; ?>', '<?php echo $r->cs_nombre; ?>',
                                                                    '<?php echo $r->cs_id_team; ?>','<?php echo $r->cs_passteam; ?>')" type="button" id="obtener" class="btn btn-light" data-bs-dismiss="modal" aria-label="Close">
                                            *
                                        </button></td>

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

