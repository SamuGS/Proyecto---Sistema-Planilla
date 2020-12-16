  <a title="Agregar pago" class="btn btn-sm btn-outline-primary waves-effect" data-toggle="modal" href="#actualizar-<?php echo $emp->id; ?>"><i class="ti-money"></i></a>

          <!-- Modal -->
          <div class="modal fade" id="actualizar-<?php echo $emp->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                  <h6 class="modal-title">Empleado: <?php echo $emp->nombre ;?></h6>
                </div>
                
                <div class="modal-body">
                    
                <form class="form" method="POST" role="form">
                
                  <div class="form-group">
                  <label>Nombre del Empleado</label>
                    <input class="form-control" value="<?php echo $emp->nombre ;?>" name="nombre" style="width: 430px">
                  </div>

                  <div class="form-group">
                  <label>Salario Mensual</label>
                    <input class="form-control" value="<?php echo $emp->salario ;?>"  name="salario" style="width: 430px">
                  </div>

                  <div class="form-group">
                  <label>Descuento de AFP</label>
                    <input class="form-control" value="<?php echo $emp->afp ;?>"  name="afp" style="width: 430px">
                  </div>

                  <div class="form-group">
                  <label>Descuento de Seguo Social</label>
                    <input class="form-control" value="<?php echo $emp->seguro ;?>"  name="seguro" style="width: 430px">
                  </div>

                  <div class="form-group">
                  <label>Dias trabajados</label>
                    <input class="form-control" type="number" name="dias_trabajados" style="width: 430px">
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary btn-block" name="agregar" style="width: 430px">Registrar pago</button>
                  </div>

                  <p class="alert alert-primary">Los pagos se gestionan mensualmente</p>

                </form>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->