
          
        <a class="btn btn-sm btn-outline-primary waves-effect" data-toggle="modal" href="#ver-<?php echo $emp->id; ?>"><i class="ti-layout-list-thumb"></i></a>

        <!-- Modal -->
          <div class="modal fade" id="ver-<?php echo $emp->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-primary right" >
                  <p class="heading text-white">
                  Empleado: 
                  </p>
                </div>


                
                <div class="modal-body">
                  <b>Codigo de Empeado: </b><?php echo $emp->codigo ;?> <br>
                  <b>Empleado: </b> <?php echo $emp->nombre ;?><br>

                  <?php


                  

                  ?>
                    
                </div>
              </div><!-- /.modal-content -->
            
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->