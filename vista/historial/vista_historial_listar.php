<script type="text/javascript" src="../js/historial.js?rev=<?php echo time();?>"></script>
<div class="col-md-12">
    <div class="box box-warning box-solid">
        <div class="box-header with-border">
              <h3 class="box-title">HISTORIAL</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
              <!-- /.box-tools -->
        </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="form-group">
                <div class="col-lg-10">
                    <div class="input-group">
                        <input type="text" class="global_filter form-control" id="global_filter" placeholder="Ingresar dato a buscar">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    </div>
                </div>
                <div class="col-lg-2">
                    <button class="btn btn-danger" style="width:100%" onclick="AbrirModalRegistro()"><i class="glyphicon glyphicon-plus"></i>Nuevo Registro</button>
                </div>
            </div>
            <table id="tabla_historial" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Folio</th>
                        <th>Curp</th>
                        <th>Paciente</th>
                        <th>Domicilio</th>
                        <th>Sexo</th>
                        <th>Celular</th>
                        <th>Acci&oacute;n</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Folio</th>
                        <th>Curp</th>
                        <th>Paciente</th>
                        <th>Domicilio</th>
                        <th>Sexo</th>
                        <th>Celular</th>
                        <th>Acci&oacute;n</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            <!-- /.box-body -->
    </div>
          <!-- /.box -->
</div>

<div class="modal fade" id="modal_registro" role="dialog">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><b>Registro De Historial Clinico</b></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12" style="text-aling:center">
                        <b>DATOS DEL PACIENTE</b><br><br>
                    </div>
                    <div class="col-lg-12">
                        <label for="">Nombre - Curp</label>
                        <select class="js-example-basic-single" name="state" id="cbm_nombre" style="width:100%;"></select><br><br>
                    </div>
                    <div class="col-lg-12" style="text-aling:center">
                        <b>INTERROGATORIO POR APARATOS Y SISTEMAS</b><br><br>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Antecedentes heredofamiliares</label>
                        <input type="text" class="form-control" id="txt_ant_heredofami" placeholder="Ingresar datos..." maxlength="50">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Antecedentes personales no patologicos</label>
                        <input type="text" class="form-control" id="txt_ant_personopatolo" placeholder="Ingresar datos..." maxlength="50">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Antecedentes gineco-obstetricos</label>
                        <input type="text" class="form-control" id="txt_ant_gineobs" placeholder="Ingresar datos..." maxlength="50"><br>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Antecedentes personales no patologicos</label>
                        <input type="text" class="form-control" id="txt_ant_persopatolo" placeholder="Ingresar datos..." maxlength="50">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Padecimiento actual</label>
                        <input type="text" class="form-control" id="txt_pade_actual" placeholder="Ingresar datos..." maxlength="50">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Sintomas generales</label>
                        <input type="text" class="form-control" id="txt_sintomas_generales" placeholder="Ingresar datos..." maxlength="50"><br>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Organos de los sentidos</label>
                        <input type="text" class="form-control" id="txt_organos_sentidos" placeholder="Ingresar datos..." maxlength="50">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Aparato cardiovascular</label>
                        <input type="text" class="form-control" id="txt_aparato_cardiovascular" placeholder="Ingresar datos..." maxlength="50">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Aparato respiratorio</label>
                        <input type="text" class="form-control" id="txt_aparato_respiratorio" placeholder="Ingresar datos..." maxlength="50"><br>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Aparato genitourinario</label>
                        <input type="text" class="form-control" id="txt_aparato_genitour" placeholder="Ingresar datos..." maxlength="50">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Aparato digestivo</label>
                        <input type="text" class="form-control" id="txt_aparato_digestivo" placeholder="Ingresar datos..." maxlength="50">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Sistema endocrino</label>
                        <input type="text" class="form-control" id="txt_sistema_endocrino" placeholder="Ingresar datos..." maxlength="50"><br>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Sistema nervioso</label>
                        <input type="text" class="form-control" id="txt_sistema_nervioso" placeholder="Ingresar datos..." maxlength="50">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Hemolinfatico</label>
                        <input type="text" class="form-control" id="txt_hemolinfatico" placeholder="Ingresar datos..." maxlength="50">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Sistema osteomuscular</label>
                        <input type="text" class="form-control" id="txt_sistema_ostemus" placeholder="Ingresar datos..." maxlength="50"><br>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Interrogatorios especiales</label>
                        <input type="text" class="form-control" id="txt_interro_esp" placeholder="Ingresar datos..." maxlength="50"><br><br>
                    </div>
                    <div class="col-lg-12" style="text-aling:center">
                        <b>EXPLORACION FISICA</b><br><br>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Habitus exterior</label>
                        <input type="text" class="form-control" id="txt_habitus_exterior" placeholder="Ingresar datos..." maxlength="50"><br>
                    </div>
                    <div class="col-lg-12" style="text-aling:center">
                        <b>Signos vitales:</b><br><br>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Frecuencia cardiaca</label>
                        <input type="text" class="form-control" id="txt_frecu_cardi" placeholder="Ingresar datos..." maxlength="50">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Tensión arterial</label>
                        <input type="text" class="form-control" id="txt_tension_arterial" placeholder="Ingresar datos..." maxlength="50">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Frecuencia respiratoria</label>
                        <input type="text" class="form-control" id="txt_frecu_respiratoria" placeholder="Ingresar datos..." maxlength="50"><br>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Temperatura</label>
                        <input type="text" class="form-control" id="txt_temperatura" placeholder="Ingresar datos..." maxlength="50">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Peso</label>
                        <input type="text" class="form-control" id="txt_peso" placeholder="Ingresar datos..." maxlength="50">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Talla</label>
                        <input type="text" class="form-control" id="txt_talla" placeholder="Ingresar datos..." maxlength="50"><br>
                    </div>
                    <div class="col-lg-4">
                        <label for="">ICM</label>
                        <input type="text" class="form-control" id="txt_icm" placeholder="Ingresar datos..." maxlength="50"><br><br>
                    </div>
                    <div class="col-lg-12" style="text-aling:center">
                        <b>EXPLORACION REGIONAL</b><br><br>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Cabeza</label>
                        <input type="text" class="form-control" id="txt_cabeza" placeholder="Ingresar datos..." maxlength="50">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Cuello</label>
                        <input type="text" class="form-control" id="txt_cuello" placeholder="Ingresar datos..." maxlength="50">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Tórax</label>
                        <input type="text" class="form-control" id="txt_torax" placeholder="Ingresar datos..." maxlength="50"><br>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Abdomen</label>
                        <input type="text" class="form-control" id="txt_abdomen" placeholder="Ingresar datos..." maxlength="50">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Extremidades</label>
                        <input type="text" class="form-control" id="txt_extremidades" placeholder="Ingresar datos..." maxlength="50">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Genitales</label>
                        <input type="text" class="form-control" id="txt_genitales" placeholder="Ingresar datos..." maxlength="50"><br>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Exploraciones especiales</label>
                        <input type="text" class="form-control" id="txt_explo_esp" placeholder="Ingresar datos..." maxlength="50"><br><br>   
                    </div><br><br>
                    <div class="col-lg-12" style="text-aling:center">
                        <b>DIAGNOSTICOS, PRONOSTICOS Y TERAPEUTICA</b><br><br>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Resultados de laboratorio y gabinete</label>
                        <input type="text" class="form-control" id="txt_resultados_labgab" placeholder="Ingresar datos..." maxlength="50">        
                    </div> 
                    <div class="col-lg-4">
                        <label for="">Diagnósticos ó problemas clínicos</label>
                        <input type="text" class="form-control" id="txt_diagnosticos" placeholder="Ingresar datos..." maxlength="50">        
                    </div> 
                    <div class="col-lg-4">
                        <label for="">Pronósticos</label>
                        <input type="text" class="form-control" id="txt_pronostico" placeholder="Ingresar datos..." maxlength="50"><br>        
                    </div> 
                    <div class="col-lg-4">
                        <label for="">Indicación terapeutica</label>
                        <input type="text" class="form-control" id="txt_indicacion_terap" placeholder="Ingresar datos..." maxlength="50">        
                    </div> 
                    <div class="col-lg-4">
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-primary" onclick="Registrar_Historial()"><i class="fa fa-check"><b>&nbsp;Registrar</b></i></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"><b>&nbsp;Cerrar</b></i></button>
            </div>
        </div>
        </div>
</div>   

<div class="modal fade" id="modal_editar" role="dialog">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><b>Editar Paciente</b></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <input type="text" id="txt_idpaciente" hidden>
                <div class="col-lg-4">
                        <label for="">Folio</label>
                        <input type="text" id="txt_folio_actual_editar" placeholder="Ingresar numero de documento..." hidden>
                        <input type="text" class="form-control" id="txt_folio_nuevo_editar" placeholder="Ingresar numero de documento...">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" id="txt_nombre_editar" placeholder="Ingresar nombre..." maxlength="50" onkeypress="return soloLetras(event)">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Fecha de nacimiento</label>
                        <input type="date" class="form-control" name="txt_fenac_editar" id="txt_fenac_editar" value="" min="1901-01-01" max="3001-01-01"><br>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Edad</label>
                        <input type="text" class="form-control" name="txt_edad_editar" id="txt_edad_editar" value="" readonly="">
                    </div>
                    <div class="col-lg-4">
                    <label for="">Sexo</label>
                        <select class="js-example-basic-single" name="state" id="cbm_sexo_editar" style="width:100%;">
                            <option value="M">MASCULINO</option>
                            <option value="F">FEMENINO</option>
                        </select><br><br>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Religion</label>
                        <input type="text" class="form-control" id="txt_relig_editar" placeholder="Ingresar religion..." maxlength="20" onkeypress="return soloLetras(event)"><br>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Domicilio</label>
                        <input type="text" class="form-control" id="txt_domi_editar" placeholder="Ingresar domicilio...">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Telefono</label>
                        <input type="text" class="form-control" id="txt_tel_editar" placeholder="Ingresar telefono..." onkeypress="return soloNumeros(event)">
                    </div>
                    <div class="col-lg-4">
                    <label for="">Estado civil</label>
                        <select class="js-example-basic-single" name="state_editar" id="cbm_estciv_editar" style="width:100%;"><br>
                            <option value="CASADO">CASADO</option>
                            <option value="SOLTERO">SOLTERO</option>
                        </select><br><br>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Escolaridad</label>
                        <input type="text" class="form-control" id="txt_esco_editar" placeholder="Ingresar escolaridad...">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Ocupacion</label>
                        <input type="text" class="form-control" id="txt_ocup_editar" placeholder="Ingresar ocupacion..." onkeypress="return soloLetras(event)">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Lugar de nacimiento</label>
                        <input type="text" class="form-control" id="txt_lunac_editar" placeholder="Ingresar lugar de nacimiento..." onkeypress="return soloLetras(event)"><br>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Residencia actual</label>
                        <input type="text" class="form-control" id="txt_resiact_editar" placeholder="Ingresar residencia actual..." onkeypress="return soloLetras(event)">
                    </div>
                    <div class="col-lg-4">
                    <label for="">Derecho habiente</label>
                        <select class="js-example-basic-single" name="state" id="cbm_da_editar" style="width:100%;">
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                        </select><br><br>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Curp</label>
                        <input type="text" class="form-control" id="txt_curp_editar" placeholder="Ingresar Curp..."><br>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Nivel economico</label>
                        <input type="text" class="form-control" id="txt_niveco_editar" placeholder="Ingresar nivel economico..." onkeypress="return soloLetras(event)">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Grupo etnico</label>
                        <input type="text" class="form-control" id="txt_grupet_editar" placeholder="Ingresar grupo etnico..." onkeypress="return soloLetras(event)">
                    </div>
                    <div class="col-lg-4">
                    <label for="">Estatus</label>
                        <select class="js-example-basic-single" name="state" id="cbm_estatus_editar" style="width:100%;">
                            <option value="ACTIVO">ACTIVO</option>
                            <option value="INACTIVO">INACTIVO</option>
                        </select><br><br>
                    </div>
                    <div class="col-lg-4">
                    </div>
                    
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-primary" onclick="Modificar_Paciente()"><i class="fa fa-check"><b>&nbsp;Editar</b></i></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"><b>&nbsp;Cerrar</b></i></button>
            </div>
        </div>
        </div>
</div>    

<script>

$(document).ready(function() {
    $('.js-example-basic-single').select2();
    $("#modal_registro").on('shown.bs.modal',function(){
        $("#txt_nombre").focus();  
    })
    listar_historial();
    listar_paciente_combo_historial();
} );

$('.box').boxWinget({
    animationSpeed : 500,
    collapseTrigger: '[data-widget="collapse"]',
    removeTrigger  : '[data-widget="remove"]',
    collaspseIcon  : 'fa-minus',
    expandIcon     : 'fa-plus',
    removeIcon     : 'fa-times'
})
</script>