  <a title="Actualizar usuario" class="btn btn-sm btn-outline-primary waves-effect" data-toggle="modal" href="#actualizar-<?php echo $user->id; ?>"><i class="ti-notepad"></i></a>

          <!-- Modal -->
          <div class="modal fade" id="actualizar-<?php echo $user->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                  <h5 class="modal-title">Actualizar: <?php echo $user->usuario ;?></h5>
                </div>
                
                <div class="modal-body">
                    
                <form class="form" method="POST" role="form">
                  <div class="form-group">
                    <input class="form-control" value="<?php echo $user->usuario ;?>" name="usuario" style="width: 430px">
                  </div>

                  <div class="form-group">
                    <input class="form-control" value="<?php echo $user->correo ;?>"  name="correo" style="width: 430px">
                  </div>

                  <div class="form-group">
                    <input class="form-control" value="<?php echo $user->tipo ;?>"  name="tipo" style="width: 430px">
                  </div>

                  <div class="form-group">
                    <input class="form-control" name="pass" style="width: 430px">
                  </div>

                  <p class="alert alert-danger">Si no desea cambiar la contraseña debe colocar la misma!</p>

                  <div class="form-group">
                  <select class="form-control" name="estado" style="width: 430px">
                    <option value="">Estado de usuario</option>
                    <option value="1">Activo</option>
                    <option value="2">Inactivo</option>
                  </select>
                  </div>

                  <input type="hidden" value="<?php echo $user->id ;?>" name="id">
                  <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary btn-block" name="actualizar" style="width: 430px">Actualizar</button>
                  </div>

                  
                </form>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->