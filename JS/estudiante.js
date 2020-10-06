function init(){
    $("#envioDatos").on("submit",function(e){
        guardaryeditar(e);  
    });
}
function guardaryeditar(e){ // Contexto, Busca la interfaz del algoritmo a ejecutar
              e.preventDefault();
              var formData = new FormData($("#envioDatos")[0]); 
            

              $.ajax({
                  url: "../Controlador/Controller_estudiante/controlador_insertar_estudiante.php",
                  type: "POST",
                  data: formData,
                  contentType: false,
                  processData: false,
                  success: function(datos){ 
                    document.getElementById("envioDatos").reset();
                    //console.log(datos);

                    if (datos!='1') {
                    Swal.fire(
                          'Athena',
                          'Nuevo estudiante guardado',
                          'success'
                      );
                    }
                    else{

                          Swal.fire(
                          'Athena',
                          'No se guardo el estudiante',
                          'error'
                      );
                      
                   
                  }
                    }
        });        
}
function listar_estudiante(){
    var table = $("#tabla_estudiante").DataTable({
        
        "ordering":false,
        "paging": false,
        "searching": { "regex": true },
        "lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ],
        "pageLength": 100,
        "destroy":true,
        "async": false ,
        "processing": true,
        "ajax":{
            "url":"../Controlador/Controller_estudiante/controlador_estudiante_listar.php",
            type:'POST'
        },
        "columns":[
            {"data":"POSICION"},
			{"data":"COD_EST"},
            {"data":"NOMBRES"},
			{"data":"APE_PATERNO"},
			{"data":"NUM_DOCUMENTO"},
            {"data":"CV_EST"},
            {"data":"DOC_IDEN"},
            {"data":"CERTIFICADO_EPS"},
            {"data":"USB_PAY_ARL"},
            {"defaultContent":"<button style='font-size:13px;' type='button' class='informacion btn btn-danger' ><i class='fa fa-plus-square'></i></button>"}
        ]

      
    });
document.getElementById("tabla_estudiante_filter").style.display="none";
     $('input.global_filter').on( 'keyup click', function () {
        filterGlobal();
    } );
    $('input.column_filter').on( 'keyup click', function () {
        filterColumn( $(this).parents('tr').attr('data-column') );
    });

    $('#tabla_estudiante').on('click','.informacion',function(){

        var data=table.row($(this).parents('tr')).data();
        
        if(table.row(this).child.isShown()){
            var data = table.row(this).data();

        }
        listar_info_estudiante(data.COD_EST);

    cargar_contenido('contenido_principal','Estudiante/informacion_estudiante.php')


})

function listar_info_estudiante(){

    var table = $("#tabla_estudiante_informacion").DataTable({
        
        "ordering":false,
        "paging": false,
        "searching": { "regex": true },
        "lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ],
        "pageLength": 100,
        "destroy":true,
        "async": false ,
        "processing": true,
        "ajax":{
            "url":"../Controlador/Controller_estudiante/controlador_estudiante_listar_unico.php",
            type:'POST'
        },
        "columns":[
            {"data":"POSICION"},
            {"data":"COD_EST"},
            {"data":"NOMBRES"},
            {"data":"APE_PATERNO"},
            {"data":"NUM_DOCUMENTO"},
            {"data":"CV_EST"},
            {"data":"DOC_IDEN"},
            {"data":"CERTIFICADO_EPS"},
            {"data":"USB_PAY_ARL"},
            {"defaultContent":"<button style='font-size:13px;' type='button' class='informacion btn btn-danger' ><i class='fa fa-plus-square'></i></button>"}
        ]

      
    });


}
    
}




function filterGlobal() {
    $('#tabla_estudiante').DataTable().search(
        $('#global_filter').val(),
    ).draw();
}
function cargar_contenido(contenedor,contenido){

      $("#"+contenedor).load(contenido); 

}
function listar_tipo_doc(){
    $.ajax({
        "url":"../Controlador/Controller_estudiante/controlador_listar_tipo_doc.php",
        type:'POST'
    }).done(function(resp){
   
        var data = JSON.parse(resp);
        var cadena="";
        if(data.length>0){
            for(var i=0; i < data.length; i++){
                cadena+="<option value='"+data[i][0]+"'>"+data[i][1]+"</option>";
            }
            $("#tipo_doc_est").html(cadena);
        }else{
            cadena+="<option value=''>NO SE ENCONTRARON REGISTROS</option>";
        }
    })
}
function listar_pais_nacimiento(){
    $.ajax({
        "url":"../Controlador/Controller_estudiante/controlador_listar_pais_nacimiento.php",
        type:'POST'
    }).done(function(resp){
  
        var data = JSON.parse(resp);
        var cadena="";
        if(data.length>0){
            for(var i=0; i < data.length; i++){
                cadena+="<option value='"+data[i][0]+"'>"+data[i][1]+"</option>";
            }
            $("#pais_nac").html(cadena);
        }else{
            cadena+="<option value=''>NO SE ENCONTRARON REGISTROS</option>";
        }
    })
}

function listar_ciudad_nacimiento(){
    $.ajax({
        "url":"../Controlador/Controller_estudiante/controlador_listar_ciudad_nacimiento.php",
        type:'POST'
    }).done(function(resp){

        var data = JSON.parse(resp);
        var cadena="";
        if(data.length>0){
            for(var i=0; i < data.length; i++){
                cadena+="<option value='"+data[i][0]+"'>"+data[i][1]+"</option>";
            }
            $("#ciudad_nac").html(cadena);
        }else{
            cadena+="<option value=''>NO SE ENCONTRARON REGISTROS</option>";
        }
    })
}


function listar_programa(){
    $.ajax({
        "url":"../Controlador/Controller_estudiante/controlador_listar_programa.php",
        type:'POST'
    }).done(function(resp){
        console.log(resp);
        var data = JSON.parse(resp);
        var cadena="";
        if(data.length>0){
            for(var i=0; i < data.length; i++){
                cadena+="<option value='"+data[i][0]+"'>"+data[i][1]+"</option>";
            }
            $("#programa").html(cadena);
        }else{
            cadena+="<option value=''>NO SE ENCONTRARON REGISTROS</option>";
        }
    })
}

function listar_ciudad_residencia(){
    $.ajax({
        "url":"../Controlador/Controller_estudiante/controlador_listar_ciudad_nacimiento.php",
        type:'POST'
    }).done(function(resp){

        var data = JSON.parse(resp);
        var cadena="";
        if(data.length>0){
            for(var i=0; i < data.length; i++){
                cadena+="<option value='"+data[i][0]+"'>"+data[i][1]+"</option>";
            }
            $("#ciudad_res").html(cadena);
        }else{
            cadena+="<option value=''>NO SE ENCONTRARON REGISTROS</option>";
        }
    })
}
function listar_opc_practica(){
    $.ajax({
        "url":"../Controlador/Controller_estudiante/controlador_listar_opc_practica.php",
        type:'POST'
    }).done(function(resp){

        var data = JSON.parse(resp);
        var cadena="";
        if(data.length>0){
            for(var i=0; i < data.length; i++){
                cadena+="<option value='"+data[i][0]+"'>"+data[i][1]+"</option>";
            }
            $("#opcpractica").html(cadena);
        }else{
            cadena+="<option value=''>NO SE ENCONTRARON REGISTROS</option>";
        }
    })
}
init();



