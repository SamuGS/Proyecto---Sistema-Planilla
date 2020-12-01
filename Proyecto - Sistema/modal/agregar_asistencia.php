  <a title="Actualizar" class="btn btn-sm btn-outline-primary waves-effect" data-toggle="modal" href="#asistencia-<?php echo $emp->id; ?>"><i class="ti-check"></i></a>

          <!-- Modal -->
          <div class="modal fade" id="asistencia-<?php echo $emp->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                  <h4 class="modal-title">Formulario para registrar la asistencia</h4>
                </div>
                
                <div class="modal-body">
                    
                <form class="form" method="POST" role="form">
                  <div class="form-group">
                    <input class="form-control" value="<?php echo $emp->nombre ;?>" name="nombre" style="width: 430px">
                  </div>

                  <div class="form-group">
                    <input class="form-control" value="<?php echo $emp->codigo;?>"  name="codigo" style="width: 430px">
                  </div>

                  <input type="hidden" value="<?php echo $emp->id ;?>" name="id">
                  
                  <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary btn-block" name="asistencia" style="width: 430px">Registrar</button>
                  </div>

                  </script>

                </form>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->