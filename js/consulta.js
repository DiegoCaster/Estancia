var tablaconsulta;
function listar_consulta(){
        var finicio = $("#txt_fechainicio").val();
        var ffin = $("#txt_fechafin").val();
      tableconsulta = $("#tabla_consulta").DataTable({
       "ordering":false,
       "bLengthChange":true,
       "searching": { "regex": true },
       "lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ],
       "pageLength": 10,
       "destroy":true,
       "async": false ,
       "processing": true,
       "ajax":{
           "url":"../controlador/consulta/controlador_consulta_listar.php",
           type:'POST',
           data:{
                fechainicio:finicio,
                fechafin:ffin
           }
       },
       "order": [[1,'asc']],
       "columns":[
           {"defaultContent": ""},
           {"data":"paciente_folio"},
           {"data":"paciente_nombre"},
           {"data":"consulta_feregistro"},
           {"data":"medico_nombre"},
           {"data":"especialidad_nombre"},
           {"data":"consulta_estatus",
           render: function (data, type, row ) {
            if(data=='PENDIENTE'){
                return "<span class='label label-primary'>"+data+"</span>";                   
            }else if(data=='CANCELADA'){
                return "<span class='label label-danger'>"+data+"</span>";                   
            }else{
                return "<span class='label label-success' style='background:black'>"+data+"</span>";                   
            }
          }
        },  
        {"defaultContent":"<button style='font-size:13px;' type='button' class='editar btn btn-primary'><i class='fa fa-edit'></i></button>"}
       ],

       "language":idioma_espanol,
       select: true
   });
   document.getElementById("tabla_consulta_filter").style.display="none";
   $('input.global_filter').on( 'keyup click', function () {
        filterGlobal();
    } );
    $('input.column_filter').on( 'keyup click', function () {
        filterColumn( $(this).parents('tr').attr('data-column') );
    });

    tableconsulta.on('draw.dt',function(){
        var PageInfo = $('#tabla_consulta').DataTable().page.info();
        tableconsulta.column(0,{page:'current'}).nodes().each(function(cell,i){
         cell.innerHTML = i + 1 + PageInfo.start;   
        })
    })
}

$('#tabla_consulta').on('click','.editar',function(){
    var data = tableconsulta.row($(this).parents('tr')).data();
    if(tableconsulta.row(this).child.isShown()){
        var data = tableconsulta.row(this).data();
    }
    $("#modal_editar").modal({backdrop:'static',keyboard:false})
    $("#modal_editar").modal('show');
    $("#txt_consulta_id").val(data.consulta_id);
})

function filterGlobal() {
    $('#tabla_consulta').DataTable().search(
        $('#global_filter').val(),
    ).draw();
}

function listar_paciente_combo_consulta(){
    $.ajax({
        "url":"../controlador/cita/controlador_combo_paciente_listar.php",
        type:'POST'
    }).done(function(resp){
        var data = JSON.parse(resp);
        var cadena="";
        if(data.length>0){
            for(var i=0; i < data.length; i++){
                cadena+="<option value='"+data[i][0]+"'>"+data[i][1]+"</option>";
            }
            $("#cbm_paciente_consulta").html(cadena);
        }else{
            cadena+="<option value=''>NO SE ENCONTRARON REGISTROS</option>";
            $("#cbm_paciente_consulta").html(cadena);
        }
    })
}