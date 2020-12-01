  <a title="Actualizar" class="btn btn-sm btn-outline-primary waves-effect" data-toggle="modal" href="#actualizar-<?php echo $c->id; ?>"><i class="ti-notepad"></i></a>

          <!-- Modal -->
          <div class="modal fade" id="actualizar-<?php echo $c->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                  <h4 class="modal-title">Actualziar Rol</h4>
                </div>
                
                <div class="modal-body">
                    
                <form class="form" method="POST" role="form">
                  

                  <div class="form-group">
                    <input class="form-control" value="<?php echo $c->cargo ;?>" name="nombre" style="width: 440px">
                  </div>

                  <div class="form-group">
                    <input class="form-control" value="<?php echo $c->ph ;?>" name="ph" style="width: 440px">
                  </div>

                  <div class="form-group">
                    <input type="hidden" class="form-control" value="<?php echo $c->id ;?>" name="id">
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary btn-block" name="actualizar" style="width: 430px">Registrar</button>
                  </div>

                  </script>

                </form>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->