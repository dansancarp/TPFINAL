<form method="post" enctype="multipart/form-data">
                <table>
                  <tr>
                    <td><input type="text" id="patente" name="patente" maxlength=6 size=20 placeholder="Ingrese patente"></td>
                  </tr>
                  <tr>
                    <td>
                      <select name="color" id="color">
                        <option value="Rojo">Rojo
                        <option value="Verda">Verde
                        <option value="Azul">Azul
                        <option value="Negro">Negro
                        <option value="Violeta">Violeta
                        <option value="Blanco">Blanco
                        <option value="Gris">Gris
                        <option value="Celeste">Celeste
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>                      
                      <input type="radio" id="tamanio" name="tamanio" value="G"/>Grande
                      <input type="radio" id="tamanio" name="tamanio" value="M"/>Mediano
                      <input type="radio" id="tamanio" name="tamanio" value="C"/>Chico
                    </td>
                  </tr>
                  <tr>
                    <td><input type="file" name="foto" id="foto"></td>
                  </tr>
                  <tr>
                    <td><input type="button" class="btn-primary" value="Asignar Espacio" onclick="Guardar()"></td>
                  </tr>
                </table>            
</form>