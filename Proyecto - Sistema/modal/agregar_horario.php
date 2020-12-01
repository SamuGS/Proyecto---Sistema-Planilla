  <a title="Registrar" class="btn btn-sm btn-outline-primary waves-effect" data-toggle="modal" href="#registrar"><i class="ti-plus"></i></a>

          <!-- Modal -->
          <div class="modal fade" id="registrar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                  <h4 class="modal-title">Formulario para registrar los horarios</h4>
                </div>
                
                <div class="modal-body">
                    
                <form class="form" method="POST" role="form">

                  <div class="form-group">
                    <h4 class="sub-title">HORA DE ENTRADA</h4>
                        <input type='time' class="form-control" name="entrada" />  
                  </div>

                  <div class="form-group">
                    <h4 class="sub-title">HORA DE SALIDA</h4>
                        <input type='time' class="form-control" name="salida" />  
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary btn-block" name="agregar">Registrar</button>
                  </div>

                  </script>

                </form>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->