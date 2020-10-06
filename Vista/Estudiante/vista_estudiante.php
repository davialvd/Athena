<script type="text/javascript" src="../js/estudiante.js?rev=<?php echo time();?>"></script>
<div class="col-md-12">
    <div class="box box-warning box-solid">
        <div class="box-header with-border">
              <h3 class="box-title">ESTUDIANTES</h3>

        
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
                    <button class="btn btn-danger" style="width:100%" onclick="cargar_contenido('contenido_principal','Estudiante/agregar_estudiante.php')"><i class="glyphicon glyphicon-plus"></i>Nuevo Estudiante</button>
                </div>
            </div>
            <table id="tabla_estudiante" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Primer Apellido</th>
                        <th>Documento</th>
                        <th>Hoja De Vida</th>
                        <th>Documento Identidad</th>
                        <th>Documento Eps</th>
                        <th>Pago URL</th>

                        <th>Acci&oacute;n</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                         <th>#</th>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Primer Apellido</th>
                        <th>Documento</th>
                        <th>Hoja De Vida</th>
                        <th>Documento Identidad</th>
                        <th>Documento Eps</th>
                        <th>Pago URL</th>

                        <th>Acci&oacute;n</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            <!-- /.box-body -->
    </div>
          <!-- /.box -->
</div>

<script>
$(document).ready(function() {
    listar_estudiante();
    //listar_combo_rol();
    
    
    $("#modal_registro").on('shown.bs.modal',function(){
        $("#txt_usu").focus();  
    })

    $('.js-example-basic-single').select2();
} );

function cargar_contenido(contenedor,contenido){

      $("#"+contenedor).load(contenido); 

  }
</script>


  