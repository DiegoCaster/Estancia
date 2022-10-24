<script> type="text/javascript" src="../js/consulta.js?rev=<?php echo time();?>" 
</script>
<form autocomplete="false" onsubmit="return false">
<div class="col-md-12">
<div class="box box-warning box-solid">
<div class="box-header with-border">
    <h3 class="box-title">HISTORIAL CLINICO</h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-widget="remove"><i class="fa fa-minus"></i></button>
    </div>
</div>
<div class="box-body">
    <div class="form-group">
        <div class="col-lg-4">
            <label for="">Fecha Inicio</label>
            <input type="date" name="" id="txt_fechainicio" class="form-control"><br><br>
        </div>
        <div class="col-lg-4">
            <label for="">Fecha Fin</label>
            <input type="date" name="" id="txt_fechafin" class="form-control"><br><br>
        </div>
        <div class="col-lg-2">
            <label for="">&nbsp;</label><br>
            <button class="btn btn-sucess" style="width:100%" onclick="listar_consulta()"><i class="glyphicon glyphicon-search">Buscar</i></button><br><br>
        </div>
        <div class="col-lg-2">
            <label for="">&nbsp;</label><br>
            <button class="btn btn-danger" style="width:100%" onclick="AbrirModalRegistro()"><i class="glyphicon glyphicon-plus">Nuevo Registro</i></button><br><br>
        </div>
    </div>
    <table id="tabla_historial" class="display responsive nowrap" style="width:100%">
     <thead>
        <tr>
            <th>#</th>
            <th>Fecha</th>
            <th>Folio</th>
            <th>Paciente</th>
            <th>Doctor</th>
            <th>Diagnostico</th>
            <th>Acción</th>
        </tr>
     </thead>
     <tfoot>
        <tr>
        <th>#</th>
            <th>Fecha</th>
            <th>Folio</th>
            <th>Paciente</th>
            <th>Doctor</th>
            <th>Diagnostico</th>
            <th>Acción</th>
        </tr>
     </tfoot>
</table>
</div>
</div>
</div>
</form>