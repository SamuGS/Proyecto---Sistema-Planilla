  <a title="Actualizar" class="btn btn-sm btn-outline-primary waves-effect" data-toggle="modal" href="#actualizar-<?php echo $emp->id; ?>"><i class="ti-notepad"></i></a>

          <!-- Modal -->
          <div class="modal fade" id="actualizar-<?php echo $emp->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                  <h4 class="modal-title">Actualizar: <?php echo $emp->nombre ;?></h4>
                </div>
                
                <div class="modal-body">
                    
                <form class="form" method="POST" role="form">
                  <div class="form-group">
                    <input class="form-control" value="<?php echo $emp->nombre ;?>" name="nombre" style="width: 430px">
                  </div>

                  <div class="form-group">
                    <input class="form-control" value="<?php echo $emp->direccion ;?>"  name="direccion" style="width: 430px">
                  </div>

                  <div class="form-group">
                    <input class="form-control" value="<?php echo $emp->dui ;?>"  name="dui" id="dui" style="width: 430px">
                  </div>

                  <div class="form-group">
                    <input class="form-control" value="<?php echo $emp->edad ;?>"  name="edad" id="edad" style="width: 430px">
                  </div>

                  <div class="form-group">
                    <input class="form-control" value="<?php echo $emp->telefono ;?>"  name="telefono" id="telefono" style="width: 430px">
                  </div>

                  <div class="form-group">
                    <input class="form-control" value="<?php echo $emp->salario ;?>"  name="salario" style="width: 430px">
                  </div>

                  <div class="form-group">
                    <label>
                      <input type="checkbox" value="0.0725" name="afp">
                      Descuento de AFP
                    </label>
                  </div>
                  <div class="form-group">
                    <label>
                      <input type="checkbox" value="0.03" name="seguro">
                      Descuento de ISSS
                    </label>
                  </div>
                  <br>

                  <input type="hidden" value="<?php echo $emp->id ;?>" name="id">
                  <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary btn-block" name="actualizar" style="width: 430px">Actualizar</button>
                  </div>

                  </script>

                  <script>
                      $(document).ready(function() {
                          $("#telefono").mask('9999-9999');
                          $("#dui").mask('99999999-9');
                      });
                  </script>
                </form>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->