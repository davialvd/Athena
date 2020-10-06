<script type="text/javascript" src="../js/estudiante.js?rev=<?php echo time();?>"></script>
<div class="col-md-12">
    <div class="box box-warning box-solid">
        <div class="box-header with-border">
              <h3 class="box-title">ESTUDIANTE</h3>

        
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
                
            </div>
            <table id="tabla_estudiante_informacion" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                     
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Primer Apellido</th>
                        <th>Segundo Apellido</th>
                        <th>Tipo Documento</th>
                        <th>Documento</th>
                        <th>Fecha Nacimiento</th>
                        <th>Pais Nacimiento</th>
                        <th>Ciudad Nacimiento</th>
                        <th>Programa</th>
                        

                
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                 
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Primer Apellido</th>
                        <th>Segundo Apellido</th>
                        <th>Tipo Documento</th>
                        <th>Documento</th>
                        <th>Fecha Nacimiento</th>
                        <th>Pais Nacimiento</th>
                        <th>Ciudad Nacimiento</th>
                        <th>Programa</th>
                   
                    </tr>
                </tfoot>
            </table>
            <div class="box-header with-border">
              <h3 class="box-title">ESTUDIANTE</h3>

        
              <!-- /.box-tools -->
        </div>
             <table id="tabla_estudiante_informacion" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Semestre</th>
                        <th>Eps</th>
                        <th>Correo Ins</th>
                        <th>Correo Personal</th>
                        <th>Ciudad Residencia</th>
                        <th>Direccion</th>
                        <th>Tel.Fijo</th>
                        <th>Tel.Celular</th>
                        <th>Opcion 1</th>
                        <th>Opcion 2</th>

                
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Semestre</th>
                        <th>Eps</th>
                        <th>Correo Ins</th>
                        <th>Correo Personal</th>
                        <th>Ciudad Residencia</th>
                        <th>Direccion</th>
                        <th>Tel.Fijo</th>
                        <th>Tel.Celular</th>
                        <th>Opcion 1</th>
                        <th>Opcion 2</th>
                   
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
    listar_info_estudiante();
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


  