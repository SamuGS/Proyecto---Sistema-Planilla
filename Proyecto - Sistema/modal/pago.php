
<script src="../js/jquery.maskedinput.min.js"></script>

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
          <input class="form-control" placeholder="Nombre completo" name="nombre">
        </div>

        <div class="form-group">
          <input class="form-control" placeholder="Dirección" name="direccion">
        </div>

        <div class="form-group">
          <input class="form-control dui" data-mask="99999999-9" placeholder="Dui" name="dui">
        </div>

        <div class="form-group">
          <input class="form-control" placeholder="Edad" name="edad">
        </div>

        <div class="form-group">
          <input placeholder="Telefono" name="telefono" class="form-control phone" data-mask="9999-9999">
        </div>

        <div class="form-group">
          <select name="id_cargo" class="form-control">
            <option value="">-- SELECCIONE CARGO --</option>
            <?php foreach(Empleado::mostrar_cargo() as $ca):?>
              <option value="<?php echo $ca->id; ?>"><?php echo $ca->cargo; ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="form-group">
          <select name="id_horario" class="form-control">
            <option value="">-- SELECCIONE HORARIO --</option>
            <?php foreach(Empleado::mostrar_horario() as $ho):?>
              <option value="<?php echo $ho->id; ?>"><?php echo $ho->horario; ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="form-group">
          <input class="form-control" placeholder="Salario" name="salario">
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