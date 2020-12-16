
          
        <a class="btn btn-sm btn-outline-primary waves-effect" data-toggle="modal" href="#ver-<?php echo $pago->id; ?>"><i class="ti-layout-list-thumb"></i></a>

        <!-- Modal -->
          <div class="modal fade" id="ver-<?php echo $pago->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-primary right" >
                  <p class="heading text-white">
                  <h4><p>Comprobante de <strong>Pagos</strong></p></h4>
                </div>


                
                <div class="modal-body">


                      <div class="dt-responsive table-responsive">
                      <table id="print-btn" class="table table-striped table-bordered nowrap">
                       <thead>
                          <th>Empleado</th>
                            <th>Salario mensual</th>
                            <th>Salario quincenal</th>
                            <th>Descuento ISSS y AFP</th>
                            <th>ticket</th>            
                          </thead>
                          <tr>
                            <td><?php echo $pago->nombre ;?></td>
                            <td>$ <?php echo round($pago->mensual,2) ;?></td>
                            <td>$ <?php echo round($pago->quincenal,2) ;?></td>
                            <td>$ <?php echo $pago->descuento ;?></td>
                            <td>

                            <form method="post" action="action/comprobante.php" target="_blank"> 
                            <input type="hidden" value="<?php echo $pago->nombre ;?>" name="nombre">
                            <input type="hidden" value="<?php echo round($pago->mensual,2) ;?>" name="mensual">
                            <input type="hidden" value="<?php echo round($pago->quincenal,2) ;?>" name="quincenal">
                            <input type="hidden" value="<?php echo $pago->descuento ;?>" name="descuento">
                            <input type="hidden" value="<?php echo $pago->registro ;?>" name="fecha">

                            <input type="hidden" value="<?php echo $pago->id ;?>" name="id">
                            <button type="submit" name="agregar" class="btn btn-sm btn-outline-primary"><i class="icofont icofont-print"></i></button>
                            </form>
                            </td>
                          </tr>
                        </thead>

                      </table>
                    </div>
                </div>

              </div><!-- /.modal-content -->
            
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->