
          
        <a class="btn btn-sm btn-outline-primary waves-effect" data-toggle="modal" href="#ver-<?php echo $user->id; ?>"><i class="ti-layout-list-thumb"></i></a>

        <!-- Modal -->
          <div class="modal fade" id="ver-<?php echo $user->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-primary right" >
                  <p class="heading text-white">
                  <h4><p>Formulario para registrar <strong>Usuarios</strong></p></h4>
                </div>


                
                <div class="modal-body">
                  <div class="dt-responsive table-responsive">
                  <table id="dom-table_wrapper" class="table nowrap">
                  
                  <thead>
                    <th>Usuario</th>
                    <th>Correo</th>
                    <th>Tipo</th>
                    <th>Estado</th>
                    <th>Fecha</th>
                   
                    
                  </thead>
                  <tr>
                    <td><?php echo $user->usuario ;?></td>
                    <td><?php echo $user->correo ;?></td>
                    <td><?php echo $user->tipo ;?></td>
                    
                    <td><?php 
                    if ($estado = '1') {
                      echo "Activo";
                    }else{
                      echo "Inactivo";
                    }

                    ;?></td>
                     
                    <td><?php echo $user->registro ;?></td>
              
                  </tr>
                  </thead>

                </table>
              </div>
                    
                </div>
              </div><!-- /.modal-content -->
            
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->