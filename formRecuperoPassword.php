<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Estacionamiento</title>

		<!--Estilos-->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<!--final de Estilos-->

		<!--Lógica-Programación-->		
		<script src="js/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

		<script src="js/funcionesLogin.js"></script>

		<!--Final de Lógica-Programación -->
		

	</head>
	<body>		
		<div class="principal animated bounceInRight">

			<div id="cabecera">
				<img src="imagenes/cabecera.jpg">
			</div>

			<div id="contenido">
				
				<?php
					require_once "clases/AccesoDatos.php";					
					require_once "clases/Usuario.php";
					if(isset($_POST['email']))
					{	
					echo $_POST['email']; 
					$usuario = Usuario::TraerUsuarioPorEmail($_POST['email']);
					$para      = $usuario->email;
					$titulo    = 'Recuperar password';
					$mensaje   = "dansan.tuars.com/ConfirmarCambioPassword.php?id=$usuario->id";

					$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
					$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
	
					$tipocorreos=explode('@',$para);

					if ($tipocorreos['1']=='gmail.com')
					{
					// Cabeceras adicionales para gmail
					$cabeceras .= "From: dansan0012" . "\r\n";
					}
					else 
					{
    				// Cabeceras adicionales para hotmail y demas
    				$cabeceras .= 'From: dansan0012 <From: dansan0012@gmail.com>' . "\r\n";
					}					

					mail($para, $titulo, $mensaje, $cabeceras);					

				?>              
               <table>                                    

                  <tr>
                    <td><input type="text" id="usuario" name="usuario" maxlength=30 size=20 readonly value=<?php echo $usuario->user;?>></td>
                    
                  </tr>

                  <tr>
                    <td>Te enviamos con un link un mail para cambiar tu password, revisa tu correo.</td>
                    
                  </tr>

                </table>            

                <?php
            		}
            		else
            		{

            	?>
            	<form method="post">
            		<table>                                    
                  		<tr>
                    		<td><input type="email" id="email" name="email" placeholder="Ingrese E-Mail"></td>
                    
		                 </tr>

        		         <tr>
                		    <td><input type="submit" value="Enviar"></td>
                    
                  		</tr>

                	</table>            
            	</form>
            	<?php
            		}
                ?>

			</div>

			<div id="pie">
				<a href="mailto:dansan0012@gmail.com"><img src="imagenes/gmail.png"></a>
				<a href="https://plus.google.com/u/1/103480492379976901548/about"><img src="imagenes/google.png"></a>
				<a href="https://github.com/dansancarp"><img src="imagenes/github.png"></a>
			</div>

		</div>
	</body>
</html>