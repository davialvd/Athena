
const formulario = document.getElementById('formularioid');
const inputs = document.querySelectorAll('#formularioid input');

const expresiones = {
	correoins: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/, // Letras, numeros, guion y guion_bajo
	txt_con1: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}
const campos = {
	correoins: false,
	password: false,
	correo: false,
	telefono: false
}



const validarFormulario = (e) => {
	switch (e.target.name) {
		case "correoins":
			
		
			/*if (expresiones.correoins.test(e.target.value)) {
					document.getElementById('grupo__usuario').classList.remove('formulario__grupo-incorrecto');
					document.getElementById('grupo__usuario').classList.add('formulario__grupo-correcto');
					document.querySelector('#grupo__usuario i').classList.add('fa-check-circle');
					document.querySelector('#grupo__usuario i').classList.remove('fa-times-circle');
					document.querySelector('#grupo__usuario .formulario__input-error').classList.remove('formulario__input-error-activo');

			}
			else{

				document.getElementById('grupo__usuario').classList.add('formulario__grupo-incorrecto');
				document.getElementById('grupo__usuario').classList.add('formulario__grupo-correcto');
				document.querySelector('#grupo__usuario i').classList.add('fa-times-circle');
				document.querySelector('#grupo__usuario i').classList.remove('fa-check-circle');
				document.querySelector('#grupo__usuario .formulario__input-error').classList.add('formulario__input-error-activo');

			}*/
			validarCampo(expresiones.correoins, e.target, 'usuario');
		break;

		case "txt_con1":

			validarCampo(expresiones.txt_con1, e.target, 'pass');


		break;

		case "txt_con2":

			validarPassword2();


		break;

	
	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}

const validarPassword2 = () => {
	const inputPassword1 = document.getElementById('txt_con1');
	const inputPassword2 = document.getElementById('txt_con2');

	if(inputPassword1.value !== inputPassword2.value){
		document.getElementById(`grupo__password2`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__password2 i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__password2 i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__password2 .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos['password'] = false;
	} else {
		document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__password2`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__password2 i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__password2 i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__password2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos['password'] = true;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});


function VerificarUsuario(){

	var user= $("#inputUser").val();
	var pass= $("#inputPassword").val();



	if(user.length==0 || pass.length==0) {
			
		return swal("Ops...", "Ingresa el usuario y contraseña", "error");

	}
	$.ajax({

		url:'../Controlador/Controller_user/user_controller.php',
		type:'POST',
		data:{
			usu:user,
			passw:pass
		}



	}).done(function(respuesta){
			if (respuesta==0) {
				

				return swal("Ops...", "Usuario o contraseña incorrectos", "error");

			}
			else{
				var data=JSON.parse(respuesta);
				if (data[0][5]==='INACTIVO') {
					return	swal("Ops...", "Parece que el usuario ingresado se encuentra inactivo, Contacte con el administrador", "warning");
				}
				
				$.ajax({

						url:'../Controlador/Controller_user/session_controller.php',
						type:'POST',
						data:{
						idusuario:data[0][0],
						user:data[0][1],
						rol:[0][6]
							}



				}).done(function(respuesta){

						/*let timerInterval
						Swal.fire({
						  title: 'Bienvenido!',
						  html: 'Estamos preparando todo para usted... <b></b> milisegundos.',
						  timer: 2000,
						  timerProgressBar: true,
						  onBeforeOpen: () => {
						    Swal.showLoading()
						    timerInterval = setInterval(() => {
						      const content = Swal.getContent()
						      if (content) {
						        const b = content.querySelector('b')
						        if (b) {
						          b.textContent = Swal.getTimerLeft()
						        }
						      }
						    }, 100)
						  },
						  onClose: () => {
						    clearInterval(timerInterval)
						  }
						}).then((result) => {
						   Read more about handling dismissals below 
						  if (result.dismiss === Swal.DismissReason.timer) {
						    
						  }
						})*/
						location.reload();



				})

			}
	})

}



function listar_usuario(){
    var table = $("#tabla_usuario").DataTable({
    
        "ordering":false,
        "paging": false,
        "searching": { "regex": true },
        "lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ],
        "pageLength": 100,
        "destroy":true,
        "async": false ,
        "processing": true,
        "ajax":{
            "url":"../Controlador/Controller_user/controlador_usuario_listar.php",
            type:'POST'
        },
        "columns":[
            {"data":"POSICION"},
			{"data":"NOM_USER"},
			{"data":"ROL"},
			{"data":"USU_SEXO",
			render: function (data, type, row ) {
                if(data=='M'){
                    return "MASCULINO";                   
                }else{
                  return "FEMENINO";                 
                }
              }
			},
            {"data":"USU_ESTADO",
			render: function (data, type, row ) {
                if(data=='ACTIVO'){
                    return "ACTIVO";                   
                }else{
                  return "INACTIVO";                 
                }
              }
            },

            {"defaultContent":"<button style='font-size:13px;' type='button' class='desactivar btn btn-danger'><i class='fa fa-trash'></i></button>&nbsp<button style='font-size:13px;' type='button' class='activar btn btn-primary'><i class='fa fa-check'></i></button>"}
        ]

      
    });

    document.getElementById("tabla_usuario_filter").style.display="none";
     $('input.global_filter').on( 'keyup click', function () {
        filterGlobal();
    } );
    $('input.column_filter').on( 'keyup click', function () {
        filterColumn( $(this).parents('tr').attr('data-column') );
    });

    $('#tabla_usuario').on('click','.desactivar',function(){

    	var data=table.row($(this).parents('tr')).data();
    	
    	if(table.row(this).child.isShown()){
    		var data = table.row(this).data();

    	}
    	


    	Swal.fire({
				  title: '¿ Esta seguro de inactivar el usuario?',
				  text: "El usuario no podra acceder a Athena",
				  icon: 'warning',
				  showCancelButton: true,
				  confirmButtonColor: '#3085d6',
				  cancelButtonColor: '#d33',
				  confirmButtonText: 'Si'
				}).then((result) => {
				  if (result.value) {

				  	estado_user(data.NOM_USER,'INACTIVO');
				    	
				  }
				})
function estado_user(idusuario,estado_user){



	$.ajax({

		url:'../Controlador/Controller_user/controlador_modificar_estado.php',
		type:'POST',
		data:{
			usu:idusuario,
			estado_user:estado_user
			

		}

 	}).done(function(resp){
 		
 		if (resp>0){
 			
 				swal("Usuario Inactivado", "El usuario NO podra ingresar a Athena", "success");
			
 		}
 		else{

 			return swal("Ops...", "Error al inactivar", "error");
 		}

 		



 	})

}



    })
    $('#tabla_usuario').on('click','.activar',function(){

    	var data=table.row($(this).parents('tr')).data();
    	
    	if(table.row(this).child.isShown()){
    		var data = table.row(this).data();

    	}
    	Swal.fire({
				  title: '¿ Esta seguro de activar el usuario',
				  text: "El usuario podra acceder a Athena",
				  icon: 'warning',
				  showCancelButton: true,
				  confirmButtonColor: '#3085d6',
				  cancelButtonColor: '#d33',
				  confirmButtonText: 'Si'
				}).then((result) => {
				  if (result.value) {

				  	estado_user_activar(data.NOM_USER,'ACTIVO');
				    	
				  }
				})
function estado_user_activar(idusuario,estado_user){



	$.ajax({

		url:'../Controlador/Controller_user/controlador_activar_usuario.php',
		type:'POST',
		data:{
			usu:idusuario,
			estado_user:estado_user
			

		}

 	}).done(function(resp){
 			
 		if (resp>0){
 			
 				swal("Usuario Activado", "El usuario podra ingresar a Athena", "success");
 				
 		}
 		else{

 			return swal("Ops...", "Error al activar", "error");
 		
 		}

 		



 	})

}

    })
function filterGlobal() {
    $('#tabla_usuario').DataTable().search(
        $('#global_filter').val(),
    ).draw();
}

}
function AbrirModalRegistro(){
	$("#modal_registro").modal({backdrop:'static',keyboard:false})
	$("#modal_registro").modal('show');
}

function AbrirModalEstudiantes(){
	window.location.href = 'Estudiante/agregar_estudiante.php';
}



function listar_combo_rol(){
    $.ajax({
        "url":"../Controlador/Controller_user/controlador_rol_listar.php",
        type:'POST'
    }).done(function(resp){
        var data = JSON.parse(resp);
        var cadena="";
        if(data.length>0){
            for(var i=0; i < data.length; i++){
                cadena+="<option value='"+data[i][0]+"'>"+data[i][1]+"</option>";
            }
            $("#cbm_rol").html(cadena);
        }else{
            cadena+="<option value=''>NO SE ENCONTRARON REGISTROS</option>";
        }
    })
}
function registrar_usuario(){


	var usu=$("#txt_usu").val();
	var txt_con1=$("#txt_con1").val();
	var txt_con2=$("#txt_con2").val();
	var cbm_sexo=$("#cbm_sexo").val();
	var cbm_rol=$("#cbm_rol").val();

	if (usu.length == 0 || txt_con1.length==0  || txt_con2.length==0 ){

		return swal("Ops...", "Ingresa todos los datos solicitados", "error");

	}
	if(txt_con1 != txt_con2){

		return swal("Ops...", "Las contraseñas deben coincidir", "error");



	}

	$.ajax({

		url:'../Controlador/Controller_user/controlador_nuevo_user.php',
		type:'POST',
		data:{
			usu:usu,
			passw:txt_con1,
			cbm_sexo:cbm_sexo,
			cbm_rol:cbm_rol


		}

 	}).done(function(resp){
 		
 		if (resp>0){
 			if (resp==1) {

 				$("#modal_registro").modal('hide');
						 swal({
						  title: "Usuario Creado",
						  text: "Muy bien...",
						  icon: "success",
						});
 			}
 			else{
 			return swal("El usuario ya existe", "Intentalo nuevamente", "error");

 		}

 		}

 		else{
 			return swal("No se ha podido guardar el usuario", "Intentalo nuevamente", "error");

 		}



 	})


}
