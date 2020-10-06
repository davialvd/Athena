<link rel="stylesheet" type="text/css" href="../css/estilos.css">
<script type="text/javascript" src="../js/estudiante.js?rev=<?php echo time();?>"></script>

<div class="box-header with-border">
              <h3 class="box-title">REGISTRAR ESTUDIANTES</h3>

        
              <!-- /.box-tools -->
        </div>
<form  class="container" name="envioDatos" id="envioDatos" enctype="multipart/form-data" >
<div class="row">
<div class="col-md-12">
<!-- INICIO TABLA DATOS BASICOS-->
<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <a class="btn btn-Light btn-lg btn-block" data-toggle="collapse" data-target="#datosproceso" aria-expanded="false" aria-controls="collapseOne">
          DATOS BASICOS
        </a>
      </h5>

    </div>

    <div id="datosproceso" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
            <table id="tbl_proceso" name="tbl_proceso"class="tbl_proceso" align="center" width="100%" cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <td width="100" id="columna_cat" class="tituloAlineado" style="text-align: center">CODIGO ESTUDIANTE</td>
                                        <!--<td width="100" id="columna_cat" class="tituloAlineado" style="text-align: center">ARCHIVO PROCESO</td>-->
                        <td width="100" id="columna_cat" class="tituloAlineado" style="text-align: center">NOMBRES</td>
                        <td width="100" id="columna_cat" class="tituloAlineado" style="text-align: center">APELLIDO PATERNO</td>
                        <td width="100" id="columna_cat" class="tituloAlineado" style="text-align: center">APELLIDO MATERNO</td>
                                

                        
                    </tr>
                    <tr>
                        
         
                        
                    </tr>
                </thead>
                <tbody>
                  <tr id="fila_1">
                    <td id ="reg_numero_proceso">
                            <input type="text" class="form-control" name="codigo_estudiante" id="codigo_estudiante" value="" required> 
                            <i class="validacion_estado fas fa-times-circle"></i>
                    </td>
                    <td id="reg_tipo_proceso">
                  
                          <input type="text" class="form-control" name="nombres_estudiante" id="nombres_estudiante" value="">  
          
                    </td>
                    <td>
                        <input type="text" class="form-control" name="apellido_paterno" id="apellido_paterno" value="">  

                    </td>
                    <td>
                        <input type="text" class="form-control" name="apellido_materno" id="apellido_materno" value="">  

                    </td>
                   
                   
                    
                    
                  </tr>
                  
                  
                </tbody>
            </table>
            <br>
             <table id="tbl_clase" class="tbl_clase" align="center" width="100%" cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <td width="100" id="columna_cat" class="tituloAlineado" style="text-align: center">TIPO DOCUMENTO</td>
                        <td width="100" id="columna_cat" class="tituloAlineado" style="text-align: center">NUMERO DOCUMENTO</td>
                        <td width="100" id="columna_cat" class="tituloAlineado" style="text-align: center">FECHA NACIMIENTO</td>
                        <td width="100" id="columna_cat" class="tituloAlineado" style="text-align: center">PAIS NACIMIENTO</td>
                        <td width="100" id="columna_cat" class="tituloAlineado" style="text-align: center">CIUDAD NACIMIENTO</td>
                

                        
                    </tr>

                    <tr>
                        
         
                        
                    </tr>
                </thead>
                <tbody>
                  
                  <tr>
                      <td>
                    <select class="form-control" name="tipo_doc_est" id="tipo_doc_est" required>
                      
                     </select>  

                    </td>
                    <td>
                    <input type="text" class="form-control" name="numero_documento" id="numero_documento" value="">  

                    </td>

                    <td>
                    <input type="date" class="form-control" name="fecha_nac" id="fecha_nac" value="">  

                    </td>
                    <td>
                    <select class="form-control" name="pais_nac" id="pais_nac" required >
                      
                     </select>  

                    </td>
                    <td>
                    <select class="form-control" name="ciudad_nac" id="ciudad_nac" required>
                      
                     </select>  

                    </td>

                  </tr>
                  
                </tbody>
            </table>

      
      </div>
    </div>
  </div> 
<!-- INICIO TABLA MATRICULA-->
 <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingDemandante">
      <h5 class="mb-0">
        <a class="btn btn-Light btn-lg btn-block" data-toggle="collapse" data-target="#demandante" aria-expanded="false" aria-controls="collapseOne">
          MATRICULA
        </a>
      </h5>

    </div>

    <div id="demandante" class="collapse" aria-labelledby="headingDemandante" data-parent="#accordion">
      <div class="card-body">
            <table id="tbl_demandante" class="tbl_demandate" align="center" width="100%" cellpadding="0" cellspacing="0">
                <thead>

                    <tr>
                        <td width="245" id="columna_bienOserv" class="tituloAlineado"style="text-align: center">PROGRAMA</td>
                        <td width="135" id="columna_cat" class="tituloAlineado" style="text-align: center">SEMESTRE</td>
                        <td width="135" id="columna_cat" class="tituloAlineado" style="text-align: center">EPS</td>
                        
                    </tr>
                </thead>
                <tbody>
                  <tr id="fila_1">
                  <td>
                    <select class="form-control" name="programa" id="programa" required>
                      
                     </select>  

                    </td>
                    <td id="reg_tipdocdemantante_1">
                        <select class="form-control" name="semestre" id="semestre" required >
                     <option value="7">7</option>
                     <option value="7">8</option>
                     <option value="7">9</option>
                     <option value="7">10</option>
                     </select>
                   </td>
                      <td id ="reg_nomdemandante_1">
                        <input type="text"  class="form-control" name="eps" id="eps" value=""> 
                 
                    </td>
                  </tr>
                  
                </tbody>
            </table>
      
      </div>
    </div>
  </div>  
<!-- FIN TABLA MATRICULA--> 
<!-- INICIO TABLA CONTACTO-->
  <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <a class="btn btn-Light btn-lg btn-block" data-toggle="collapse" data-target="#demandado" aria-expanded="false" aria-controls="collapseOne">
          CONTACTO
        </a>
      </h5>

    </div>

    <div id="demandado" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
            <table id="tbl_demandado" class="tbl_demandado" align="center" width="100%" cellpadding="0" cellspacing="0">
                <thead>

                    <tr>
                        <td width="245" id="columna_bienOserv" class="tituloAlineado"style="text-align: center">CORREO INSTITUCIONAL</td>
                        <td width="135" id="columna_cat" class="tituloAlineado" style="text-align: center">CORREO PERSONAL</td>
                        <td width="100" id="tituloAlineado" class="tituloAlineado" style="text-align: center">CIUDAD DE RESIDENCIA</td>
                        <td width="100" id="columna_cantidad" class="tituloAlineado"style="text-align: center">DIRECCION</td>
                        <td width="50" id="columna_total_Uni" class="columna_total_Uni">TELEFONO FIJO</td>
                        <td width="100" id="columna_total_Uni" class="columna_total_Uni">TELEFONO CELULAR</td>
                      
                        
                    </tr>
                </thead>
                <tbody>
                  <tr id="fila_1">

                    <td id ="reg_nomdemandado_1">
                        <input type="email"  class="form-control" name="correo_universidad" id="correo_universidad" value=""> 
                 
                    </td>
                    <td id="reg_tipodocdemandado_1">
                        <input type="email"  class="form-control" name="correo_personal" id="correo_personal" value=""> 
                   </td>
                    
                    <td>
                    <select class="form-control" name="ciudad_res" id="ciudad_res" required>
                      
                     </select>  

                    </td>
                    
                    
                    <td id ="reg_emaildemandado_1">
                            <input type="text" class="form-control" name="direccion_residencia" id="direccion_residencia" value=""> 
                    </td>
                    <!--id="sel_reg"-->
                   <td id ="reg_tel_demandado_1">
                            <input type="text" class="form-control" name="telefono_fijo" id="telefono_fijo" value=""> 
                    </td>
                    <td id ="reg_direccion_demandado_1">
                            <input type="text" class="form-control" name="teledono_celular" id="teledono_celular" value=""> 
                    </td>
                  
                        
                    </td>
                    
                  </tr>
                  
                </tbody>
            </table>
      
      </div>
    </div>
<!-- FIN TABLA CONTACTO-->
<!-- INICIO TABLA PRACTICAS-->
  </div>  
   <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <a class="btn btn-link btn-lg btn-block" data-toggle="collapse" data-target="#apoderado" aria-expanded="false" aria-controls="collapseOne">
          OPCION PRACTICAS
        </a>
      </h5>

    </div>

    <div id="apoderado" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
            <table id="tbl_apoderado" class="tbl_apoderado" align="center" width="100%" cellpadding="0" cellspacing="0">
                <thead>

                    <tr>
                        <td width="245" id="columna_bienOserv" class="tituloAlineado"style="text-align: center">OPCION PRACTICA</td>
                        <td width="135" id="columna_cat" class="tituloAlineado" style="text-align: center">ESCENARIO DE PRACTICA SOLICITADO</td>
                        
                        
                    </tr>
                </thead>
                <tbody>
                  <tr id="fila_1">
                   <td id ="reg_nomapoderado_1">
                        <input type="text"  class="form-control" name="opcpractica_uno" id="opcpractica_uno" value=""> 
                 
                    </td>
                    <td>
                    <select class="form-control" name="opcpractica" id="opcpractica" required>
                      
                     </select>  

                    </td>

                   
                    
                  </tr>
                  
                </tbody>
            </table>

      
      </div>
    </div>
  </div> 
    
<!-- FIN TABLA PRACTICAS-->

<!-- INICIO TABLA DOCUMENTOS-->
  </div>  
   <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <a class="btn btn-link btn-lg btn-block" data-toggle="collapse" data-target="#archivo" aria-expanded="false" aria-controls="collapseOne">
          DOCUMENTOS
        </a>
      </h5>

    </div>

    <div id="archivo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
            <table id="tbl_archivo" class="tbl_archivo" align="center" width="100%" cellpadding="0" cellspacing="0">
                <thead>

                    <tr>
                        <td width="100" id="columna_bienOserv" class="tituloAlineado"style="text-align: center">HOJA DE VIDA</td>
                         <td width="100" id="columna_bienOserv" class="tituloAlineado"style="text-align: center">DOCUMENTO IDENTIDAD</td>
                          <td width="100" id="columna_bienOserv" class="tituloAlineado"style="text-align: center">EPS</td>
                           <td width="100" id="columna_bienOserv" class="tituloAlineado"style="text-align: center">USB PAGA ARL</td>
                    </tr>
                </thead>
                <tbody>
                  <tr id="fila_1">
                   <td id ="reg_archivo_1">
                        <input type="file"  class="form-control" name="hojadevida" id="hojadevida" value="" accept="application/pdf" multiple> 
                 
                    </td>
                   
                     <td id ="reg_archivo_1">
                        <input type="file"  class="form-control" name="doc_identidad" id="doc_identidad" value="" accept="application/pdf" multiple> 
                 
                    </td>

                     <td id ="reg_archivo_1">
                        <input type="file"  class="form-control" name="doc_eps" id="doc_eps" value="" accept="application/pdf" multiple> 
                 
                    </td>
                     <td id ="reg_archivo_1">
                        <select class="form-control" name="arl" id="arl" required >
                          <option value="SI">SI</option>
                          <option value="NO">NO</option>
                        </select>
                 
                    </td>
                   
                   
                    
                  </tr>
                  
                </tbody>
            </table>

      
      </div>
    </div>
  </div> 
    
<!-- FIN TABLA DOCUMENTOS-->

                
       
    
    <br>
    
   
   
    
    
 </div>
 </div>  
  <div style="padding-top: 20px; text-align: right; width: 100%">
        <input type="submit" class="btn btn-primary" value="Guardar Proceso" />
        <a class="btn btn-primary" href="vista_estudiante.php" >Regresar</a></td>
    </div> 
</form>

<script type="text/javascript">

listar_tipo_doc();
listar_pais_nacimiento();
listar_ciudad_nacimiento();
listar_programa();
listar_ciudad_residencia();
listar_opc_practica();



</script>
<script type="text/javascript" src="../js/insertestudiante.js?rev=<?php echo time();?>"></script>



