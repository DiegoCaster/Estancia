var tablahistorial;
function listar_historial(){
        var finicio = $("#txt_fechainicio").val();
        var ffin = $("#txt_fechafin").val();
      tablehistorial = $("#tabla_historial").DataTable({
       "ordering":false,
       "bLengthChange":false,
       "bLengthChange":true,
       "searching": { "regex": true },
       "lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ],
       "pageLength": 10,
       "destroy":true,
       "async": false ,
       "processing": true,
       "ajax":{
           "url":"../controlador/historial/controlador_historial_listar.php",
           type:'POST',
           data:{
                fechainicio:finicio,
                fechafin:ffin
           }
       },
       "order": [[1,'asc']],
       "columns":[
           {"defaultContent": ""},
           {"data":"fua_feregistro"},
           {"data":"paciente_folio"},
           {"data":"paciente_nombre"},
           {"data":"medico_nombre"},
           {"defaultContent":"<button style='font-size:13px;' type='button' class='editar btn btn-primary'><i class='fa fa-edit'></i></button>"}
        ],

       "language":idioma_espanol,
       select: true
   });
   document.getElementById("tabla_historial_filter").style.display="none";
   $('input.global_filter').on( 'keyup click', function () {
        filterGlobal();
    } );
    $('input.column_filter').on( 'keyup click', function () {
        filterColumn( $(this).parents('tr').attr('data-column') );
    });

    tablehistorial.on('draw.dt',function(){
        var PageInfo = $('#tabla_historial').DataTable().page.info();
        tablehistorial.column(0,{page:'current'}).nodes().each(function(cell,i){
         cell.innerHTML = i + 1 + PageInfo.start;   
        })
    })
}

$('#tabla_historial').on('click','.editar',function(){
    var data = tablehistorial.row($(this).parents('tr')).data();
    if(tablehistorial.row(this).child.isShown()){
        var data = tablehistorial.row(this).data();
    }
    $("#modal_editar").modal({backdrop:'static',keyboard:false})
    $("#modal_editar").modal('show');
    $("#txt_historial_id").val(data.historial_id);
})
