<form>
                <table>                  
                  <tr>
                    <td><input type="text" id="mensaje" name="mensaje" size=20 readonly></td>
                  </tr>
                  <tr>
                    <td><input type="text" id="nombre" name="nombre" maxlength=30 size=20 placeholder="Ingrese nombre" required></td>
                    
                  </tr>
                  <tr>
                    <td><input type="text" id="apellido" name="apellido" maxlength=30 size=20 placeholder="Ingrese apellido" required></td>
                    
                  </tr>
                  <tr>
                    <td><input type="date" id="fechanac" name="fechanac" required></td>
                    
                  </tr>
                  <tr>
                    <td><input type="email" id="email" name="email" maxlength=30 size=20 placeholder="Ingrese Email" required></td>
                    
                  </tr>

                  <tr>
                    <td><input type="text" id="direccion" name="direccion" maxlength=30 size=20 placeholder="Ingrese Direccion"></td>
                    
                  </tr>

                  <tr>
                    <td><input type="text" id="localidad" name="localidad" maxlength=30 size=20 placeholder="Ingrese Localidad"></td>
                    
                  </tr>

                   <tr>
                    <td><input type="text" id="provincia" name="provincia" maxlength=30 size=20 placeholder="Ingrese Provincia"></td>
                    
                  </tr>

                  <tr>
                    <td><input type="text" id="usuario" name="usuario" maxlength=30 size=20 placeholder="Ingrese Usuario"></td>
                    
                  </tr>

                  <tr>
                    <td><input type="password" id="password" name="password" maxlength=30 size=20 placeholder="Ingrese Password"></td>
                    
                  </tr>

                  <tr>
                    <td><input type="password" id="cpassword" name="cpassword" maxlength=30 size=20 placeholder="Confirme Password"></td>                    
                  </tr>


                  <tr>
                    <td><input type="button" class="btn-primary" value="Registrar" onclick="RegistrarUsuario()"></td>
                  </tr>
                </table>            
</form>