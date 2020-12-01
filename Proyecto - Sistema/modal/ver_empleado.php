
          
        <a class="btn btn-sm btn-outline-primary waves-effect" data-toggle="modal" href="#ver-<?php echo $emp->id; ?>"><i class="ti-layout-list-thumb"></i></a>

        <!-- Modal -->
          <div class="modal fade" id="ver-<?php echo $emp->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-primary right" >
                  <p class="heading text-white">



                  <b>Codigo de Empeado: </b><?php echo $emp->codigo ;?> <br>
                  <b>Empleado: </b> <?php echo $emp->nombre ;?><br>
                  <b>Cargo: </b><?php echo $emp->cargo ;?></strong>
                  </p>
                </div>


                
                <div class="modal-body">
                  <div class="dt-responsive table-responsive">
                  <table id="dom-table_wrapper" class="table nowrap">
                  
                  <thead>
                    <th>Direccion</th>
                    <th style="width: 20%">Dui</th>
                    <th style="width: 20%">Telefono</th>
                    <th style="width: 10%">Salario</th>
                    <th style="width: 10%">AFP</th>
                    <th style="width: 8%">ISSS</th>
                    
                  </thead>
                  <tr>
                    <td><?php echo $emp->direccion ;?></td>
                    <td><?php echo $emp->dui ;?></td>
                    <td><?php echo $emp->telefono ;?></td>
                    
                    <td>$ <?php
                    $ns = $emp->salario + $emp->afp + $emp->seguro;
                    echo $ns;
                     ;?></td>
                     
                    <td>$ <?php echo $emp->afp ;?></td>
                    <td>$ <?php echo $emp->seguro ;?></td>
              
                  </tr>
                  </thead>

                </table>
              </div>
                    
                </div>
              </div><!-- /.modal-content -->
            
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->