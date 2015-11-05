<?php
session_start();
if(isset($_SESSION['UsuarioActual']))
{
	//no hago nada
}
else
{
	//redirige a index.php
	header("location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Estacionamiento</title> 

    <!--Estilos-->
    <link rel="stylesheet" type="text/css" href="css/style3.css">    
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <!--final de Estilos-->

    <!--Lógica-Programación-->    
    <script src="js/jquery.min.js"></script>
    <script src="js/funcionesABM.js"></script>
    <script src="js/funcionesLogin.js"></script>
    <script src="js/funcionesAjax.js"></script>
    <script src="js/geolocalizacionCommon.js"></script>
    <script src="js/moduloGeolocalizacion.js"></script>
    <script src="js/funcionesMapa.js"></script>
        
        <!--Final de Lógica-Programación -->
</head>
<body>

<div id="wrapper">

  <div id="header">    
     <img src="imagenes/cabecera.jpg">    
  </div>

  <div id="page">
    <div id="page-bgtop">
      
        <div id="content">      
             <?php
                 include "partes/listado.php";
             ?>                      
        </div>
        <div style="clear:inherit">&nbsp;</div>

        <div id="sidebar">
            <div>              
             <table>              
                <tr><td><input type="text" value="<?php echo "Usuario Actual: ".$_SESSION['UsuarioActual'];?>" readonly></td></tr>
              </table>
            </div>

            <div>              
             <?php
             include "partes/formulario.php";
             ?>  
            </div>


            <div id="lugares">
              <table>
                <tr><td><?php echo "Lugares libres: ".$_SESSION['Cochera'];?></td></tr>
              </table>
            </div>             

            <div> 
              <br>
              <input type="button" class="btn-primary" value="Listado Autos" onclick="MostrarListadoAuto()">            
              <input type="button" class="btn-primary" value="Listado Pagos" onclick="MostrarListadoPagos()">        
              <input type="button" class="btn-primary" value="Listado Usuarios" onclick="MostrarListadoUsuarios()"> 
              <input type="button" class="btn-primary" value="Salir" onclick="logout()">        
            </div>            

        </div>
        <div style="clear:both">&nbsp;</div>
      
    </div>
  </div>  
</div>

<div id="footer">
  <a href="mailto:dansan0012@gmail.com"><img src="imagenes/gmail.png"></a>
  <a href="https://plus.google.com/u/1/103480492379976901548/about"><img src="imagenes/google.png"></a>
  <a href="https://github.com/dansancarp"><img src="imagenes/github.png"></a>
</div>  

</body>
</html>