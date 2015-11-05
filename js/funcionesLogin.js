function login()
			{
				var miUsuario = $("#usuario").val();
				var miPassword = $("#password").val();
				$.ajax //principio funcion ajax
				({
					url:"login.php",
					type:"post",
					data:
					{
						usuario:miUsuario,
						password:miPassword
					},
					success:function(resultado)
					{
						if(resultado==1)
						{
							location.href="menu.php";
						}
						else
						{
							$("#mensaje").val("Usuario no registrado");
							alert(resultado);
						}										
						
					}
				}//fin de los parametros
				); //fin funcion ajax
			}//fin funcion login

function logout()
			{				
				$.ajax //principio funcion ajax
				({
					url:"logout.php",
					type:"post",					
					success:function(resultado)
					{					
							location.href="ingreso.php";
					}
				}//fin de los parametros
				); //fin funcion ajax
			}//fin funcion login


function MostrarRegistroUsuario()
{          
    var miAjax = $.ajax({
              method: "POST",
              url: "nexo.php",
              data:{                
                quehago:"MostrarRegistroUsuario"
              },
              success:function(resultado)
              {
                $("#contenido").html(resultado);
              }
          });
}

function RegistrarUsuario()
{          
	if(!Validar())
		return false;	
	var miUsuario = $("#usuario").val();
	var miPassword = $("#password").val();
	var micPassword = $("#cpassword").val();
	var miEmail = $("#email").val();
	var miDireccion = $("#direccion").val();
	var miLocalidad = $("#localidad").val();
	var miProvincia = $("#provincia").val();
	var miNombre = $("#nombre").val();
	var miApellido = $("#apellido").val();
	var miFecha = $("#fechanac").val();			
    var miAjax = $.ajax({
              method: "POST",
              url: "nexo.php",
              data:{                
                quehago:"RegistrarUsuario",
                usuario:miUsuario,
                password:miPassword,
                cpassword:micPassword,
                email:miEmail,
                direccion:miDireccion,
                localidad:miLocalidad,
                provincia:miProvincia,
                nombre:miNombre,
                apellido:miApellido,
                fechanac:miFecha
              }
              
          });
    miAjax.done(function(resultado)
              {
                location.href = "menu.php";
              });
}

function Validar()
{
	var miUsuario = $("#usuario").val();
	var miPassword = $("#password").val();
	var micPassword = $("#cpassword").val();
	var miEmail = $("#email").val();
	var miDireccion = $("#direccion").val();
	var miLocalidad = $("#localidad").val();
	var miProvincia = $("#provincia").val();
	var miNombre = $("#nombre").val();
	var miApellido = $("#apellido").val();
	var miFecha = $("#fechanac").val();			
	if(miNombre.length<3)
	{
		$("#mensaje").val("Ingrese nombre Valido: 3 caracteres mínimo");
		$("#nombre").focus();
		return false;
	}
	if(miApellido.length<3)
	{
		$("#mensaje").val("Ingrese apellido Valido: 3 caracteres mínimo");
		$("#apellido").focus();
		return false;
	}
	
	if (!isValidFecha(miFecha))
  	{
   	   	$("#mensaje").val("Ingrese fecha Valida");      
      	$("#fechanac").focus();
      	return false;
  	}

  	if (!isValidEmail(miEmail))
  	{
   	   	$("#mensaje").val("Ingrese email Valido");      
      	$("#email").focus();
      	return false;
  	}
	
	if(miDireccion.length<=0)
	{
		$("#mensaje").val("Ingrese direccion");
		$("#direccion").focus();
		return false;
	}

	if(miLocalidad.length<=0)
	{
		$("#mensaje").val("Ingrese localidad");
		$("#localidad").focus();
		return false;
	}


	if(miProvincia.length<=0)
	{
		$("#mensaje").val("Ingrese provincia");
		$("#provincia").focus();
		return false;
	}


	if(miUsuario.length<6)
	{
		$("#mensaje").val("Ingrese Usuario Valido: 6 caracteres mínimo");
		$("#usuario").focus();
		return false;
	}

	if(miPassword.length<6||(micPassword!=miPassword))
	{
		$("#mensaje").val("Reingrese password: 6 caracteres mínimo");
		$("#password").focus();
		return false;
	}		
    
	return true;
}

function isValidEmail(mail)
{
    return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(mail);
}

function isValidFecha(fecha)
{
    return /^(\d{4})(\/|-)(\d{1,2})(\/|-)(\d{1,2})$/.test(fecha);
}

function MostrarCambioPassword()
{          
    location.href="formRecuperoPassword.php";
}

function CambiarPassword()
{
  var miId = $("#id").val();
  var miPass = $("#password").val();
  var miAjax = $.ajax({
              method: "POST",
              url: "nexo.php",
              data:{                
                quehago:"CambiarPassword",
                id:miId,
                password:miPass
              },
              success:function(resultado)
              {
                location.href="ingreso.php";
              }
  }); 
}