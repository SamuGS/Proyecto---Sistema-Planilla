
<script src="./js/jquery.maskedinput.min.js"></script>

<a title="Agregar Empleado" class="btn btn-sm btn-outline-primary waves-effect" data-toggle="modal" href="#agregar"><i class="ti-plus"></i></a>

        <!-- Modal -->
          <div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary right" >
                  <p class="heading">
                  <h6>Formulario para registrar <b>Empleados!</b></h6>
  
                  </p>
                </div>


                
                <div class="modal-body">

                

      <form class="form-horizontal" method="POST">
        <div class="form-group">
          <input class="form-control" placeholder="Nombre completo" name="nombre" id="nombre">
        </div>

        <div class="form-group">
          <input class="form-control" placeholder="Cargo" name="cargo" id="cargo">
        </div>

        <div class="form-group">
          <input class="form-control" placeholder="Dirección" name="direccion" id="dir">
        </div>

        <div class="form-group">
          <input class="form-control" placeholder="Dui" name="dui" id="dui">
        </div>

        <div class="form-group">
          <input class="form-control" placeholder="Telefono" name="telefono" id="telefono">
        </div>

        <div class="form-group">
          <input class="form-control" placeholder="Salario" name="salario" id="sal">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-outline-primary btn-block" name="agregar" id="agregar">Registrar</button>
        </div>

    <script>
        $(document).ready(function() {
            $("#telefono").mask('9999-9999'); 
            $("#dui").mask('99999999-9');
        });
    </script>

    <script type="text/javascript">
      $(document).ready(function() {
        $("#agregar").click(function() {
        $("form")[0].reset();
        });
      });
    </script>
</form>

                
                    
                </div>
              </div><!-- /.modal-content -->
            
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->