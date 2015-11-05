<?php
 require_once "clases/Usuario.php";
 require_once "clases/AccesoDatos.php";                                     

 $arraysDeUsuarios = Usuario::TraerTodosLosUsuarios();

 if(count($arraysDeUsuarios)>0)
      {      
      echo "<table>            
           <thead>              
              <tr><th>nombre</th><th>apellido</th><th>fecha de nacimiento</th><th>email</th><th>Vive en</th></tr>
            </thead>
            <tbody>";
      foreach ($arraysDeUsuarios as $u)                              
          {          
           echo "<tr><td>$u->nombre</td><td>$u->apellido</td><td>$u->fechanac</td><td>$u->email</td>";           
           echo "<td><input type='button' onclick='VerEnMapa(\"$u->provincia\",\"$u->direccion\", \"$u->localidad\")' class='btn-primary' value='Ver en Mapa'></td>";
           echo "</tr>";
           }
      echo"</tbody></table>";
      }
?>