

<a title="Agregar usuario" class="btn btn-sm btn-outline-primary waves-effect" data-toggle="modal" href="#agregar"><i class="ti-plus"></i></a>

        <!-- Modal -->
          <div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary right" >
                  <p class="heading">
                  <h6>Formulario para registrar <b>Usuarios!</b></h6>
  
                  </p>
                </div>


                
                <div class="modal-body">

                

                  <form class="form-horizontal" method="POST" id="usuario">
                    <div class="form-group">
                      <input class="form-control" placeholder="Usuario" name="usuario">
                    </div>

                    <div class="form-group">
                      <input class="form-control" placeholder="Contraseña" name="pass" id="pass">
                    </div>

                    <div class="form-group">
                      <input class="form-control" placeholder="Correo" name="email">
                    </div>

                    <div class="form-group">
                      <select class="form-control" name="tipo">
                        <option value="">Tipo de usuario</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Planillero">Planillero</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <select class="form-control" name="estado">
                        <option value="">Estado de usuario</option>
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block" name="agregar">Registrar</button>
                    </div>  
                  </form>

                </div>
              </div><!-- /.modal-content -->
            
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->