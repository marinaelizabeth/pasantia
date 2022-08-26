</div>
</div>
</div>
<!-- ================================ 
    IMPORTS DE SCRIPTS
  ================================ -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/jszip-2.5.0/dt-1.12.1/b-html5-2.2.3/b-print-2.2.3/date-1.1.2/datatables.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>

<script src="vista/soporte/soporte.js"></script>
<script src="vista/soporte/empresas.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#sidebarCollapse').on('click', function() {
      $('#sidebar').toggleClass('active');
      $(this).toggleClass('active');
    });
  });
</script>

<script type="text/javascript">
  function seleccionar(cod, des, team, pass) {
    document.getElementById('empresaCod').value = cod;
    document.getElementById('empresa').value = des;
    document.getElementById('teamN').value = team;
    document.getElementById('passN').value = pass;
  }
</script>


<script>
  function HoraFin() {
    //me trae la hora final
    /* var fecha ='';
     var fechaHora = new Date();
     var horas = fechaHora.getHours();
     var minutos = fechaHora.getMinutes();
     var segundos = fechaHora.getSeconds();
     fecha = horas+':'+minutos+':'+segundos;
     //lo muestra en pantalla
     document.getElementById("horaFin").value = fecha;*/
    restarHora();
  }

  function restarHora() {
    var hora_inicio = document.getElementById('horaInicio');
    var hora_Fin = document.getElementById('horaFin');
    var strMsg = '';
    
    var horaIni = hora_inicio.valueAsDate;
    var horaFin = hora_Fin.valueAsDate;
    
    var restar = (horaFin.getTime() - horaIni.getTime());
    var ms = restar % 1000;
    restar = (restar - ms) / 1000;
    var secs = restar % 60;
    restar = (restar - secs);
    var mins = restar % 60;
    var hrs = (restar - mins) / 60;

    strMsg = hrs;
    document.getElementById('resultado').value = strMsg;

  }
</script>


</body>

</html>