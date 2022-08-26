
<!--tabla de dotos del cliente-->
<form id>
    <div id="datosEmpresa" class="row align-items-start ">
        <table class="table table-hover" style="width:50%">
            <thead class="table-success">
                <tr>
                    <th>Codigo</th>
                    <th>Empresa</th>
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
    
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot class="table-success">
                <tr>
                    <th>Codigo</th>
                    <th>Empresa</th>
                </tr>
            </tfoot>
        </table>
    </div>
</form>