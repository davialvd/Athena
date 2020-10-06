<link rel="stylesheet" type="text/css" href="../css/estilos.css">
<script type="text/javascript" src="../js/usuario.js?rev=<?php echo time();?>"></script>
<div class="col-md-12">
    <div class="box box-warning box-solid">
        <div class="box-header with-border">
              <h3 class="box-title">ADMINISTRACIÒN DE USUARIOS</h3>

        
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
                    <button class="btn btn-danger" style="width:100%" onclick="AbrirModalRegistro()"><i class="glyphicon glyphicon-plus"></i>Nuevo Usuario</button>
                </div>
            </div>
            <table id="tabla_usuario" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Usuario</th>
                        <th>Rol</th>
                        <th>Sexo</th>
                        <th>Estatus</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Usuario</th>
                        <th>Rol</th>
                        <th>Sexo</th>
                        <th>Estatus</th>
                        <th>Acci&oacute;n</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            <!-- /.box-body -->
    </div>
          <!-- /.box -->
</div>
<form autocomplete="false" onsubmit="return false" id="formularioid">
   
        <div class="modal fade" id="modal_registro" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
            
            <h4 class="modal-title"><b>Registro De Usuario</b></h4>
            </div>
            <div class="modal-body">
                 <div class="formulario__grupo"  id="grupo__usuario">
                <div class="col-lg-12" >
                    <label for="" class="formulario__label">Correo Institucional</label>
                    <input type="text" class="formulario__input  form-control" id="txt_usu" placeholder="Ingrese Correo" name="correoins">
                        <i class="validacion_estado fas fa-times-circle"></i>
                
                    <br>
                </div>
                <p class="formulario__input-error">Debe ingresar el correo institucional del estudiante</p>
                 </div>

                 

                <div class="formulario__grupo"  id="grupo__pass">
                <div class="col-lg-12">
                    <label class="formulario__label" for="">Contraseña</label>
                    <input type="password" class="formulario__input form-control" id="txt_con1" name="txt_con1" placeholder="Ingrese contrase&ntilde;a"><br>
                    <i class="validacion_estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
                 </div>

                <div class="formulario__grupo"  id="grupo__password2">
                <div class="col-lg-12">
                    <label class="formulario__label" for="">Repita la Contraseña</label>
                    <input type="password" class="formulario__input form-control" id="txt_con2" name="txt_con2" placeholder="Repita contraseña"><br>
                    <i class="validacion_estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Las contraseñas no coinciden</p>
                </div>


                <div class="col-lg-12">
                    <label for="">Sexo</label>
                    <select class="js-example-basic-single" name="state" id="cbm_sexo" style="width:100%;">
                        <option value="M">MASCULINO</option>
                        <option value="F">FEMENINO</option>
                    </select><br><br>
                </div>
                <div class="col-lg-12">
                    <label for="">Rol</label>
                    <select class="js-example-basic-single" name="state" id="cbm_rol" style="width:100%;">
                    </select><br><br>
                </div>

           
                <div class="modal-footer">
                    <button class="btn btn-primary" onclick="registrar_usuario()"><i class="fa fa-plus-circle"> Registrar</i></button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"> Cerrar</i></button>
                </div>
            </div>
            </div>
        </div>
        </div>
</form>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
<script>

$(document).ready(function() {
    listar_usuario();
    listar_combo_rol();
    
    
    $("#modal_registro").on('shown.bs.modal',function(){
        $("#txt_usu").focus();  
    })

    $('.js-example-basic-single').select2();
} );

</script>


  