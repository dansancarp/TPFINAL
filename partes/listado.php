<?php
 require_once "clases/Auto.php";
 require_once "clases/AccesoDatos.php";                                    
 $arraysDeAutos = Auto::TraerTodosLosAutos();
 if(count($arraysDeAutos)>0)
      {
      echo "<table>            
           <thead>
              <tr><th>patente</th><th>color</th><th>tamaño</th><th>hora ingreso</th><th>Foto</th></tr>
            </thead>
            <tbody>";
      foreach ($arraysDeAutos as $auto)                              
          {
          switch($auto->tamanio)
                 {
                  case 'C':
                           $tam = "Chico";
                           break;
                  case 'G':
                           $tam = "Grande";
                           break;
                  case 'M':
                           $tam = "Mediano";
                           break;
                  }                                              
           echo "<tr><td>$auto->patente</td><td>$auto->color</td><td>$tam</td><td>$auto->ingreso</td>";
           echo "<td><img src='$auto->foto' width=75 height=75></td>";
           echo "<td><input type='button' onclick=Borrar('$auto->patente') class='btn-primary' value='Liberar Espacio'></td><tr>";
           }
      echo"</tbody></table>";
      }
?>