<?php include 'header.php'; ?>

<?php include 'nav.php'; ?>

<?php include 'sidebar.php'; ?>
<?php include './modelo/Clase.php'; ?>

<div class="pcoded-content">
  <div class="pcoded-inner-content">
    <div class="main-body">
      <div class="page-wrapper">
        <div class="page-header">
          <div class="page-header-title">
            <h4>Empleados</h4>
          </div>
          
          <div class="page-header-breadcrumb">
            <ul class="breadcrumb-title">
              
              <li class="breadcrumb-item">
                <a href="index.php">
                  <i class="icofont icofont-home"></i>
                </a>
              </li>

              <li class="breadcrumb-item">Vista
              </li>
              <li class="breadcrumb-item">Empleado
              </li>
            </ul>
          </div>  
        </div>
        
        <div class="page-body">
        <?php include 'action/empleado.php'; ?>
        
        <div class="card" style="width: 0px">
          <div class="card-body">
            <?php include 'modal/agregar_empleado.php'; ?>
          </div>
        </div>
        



          
          <?php $emps = Empleado::mostrar();
            if(count($emps)>0){
              // hacemos la instancia si hay empleados en la tabla
          ?>

          
 

          <div class="card">
            <div class="card-header">
              <h5>Tabla de Empleados</h5>
              <div class="card-header-right">
                <i class="icofont icofont-rounded-down"></i>
                <i class="icofont icofont-refresh"></i>
                <i class="icofont icofont-close-circled"></i>
              </div>
            </div>
            
            <div class="card-block">
              <div class="dt-responsive table-responsive">
                
                <table id="dom-table" class="table">
                <thead>
                  <th>Código</th>
                  <th>Empleado</th>
                  <th style="width: 20px">Ver</th>
                  <th style="width: 20px">Actualizar</th>
                  <th style="width: 20px">Asistencia</th>
                  <th style="width: 20px">Eliminar</th>
                </thead>

                <?php foreach($emps as $emp){ ?>

                <tr>
                  <td><?php echo $emp->codigo?></td>
                  <td><?php echo $emp->nombre?></td>
                  <td><?php include 'modal/ver_empleado.php'; ?></td>
                  <td><?php include 'modal/actualizar_empleado.php'; ?></td>
                  <td><?php include 'modal/agregar_asistencia.php'; ?></td>
                  <td>
                    <form method="post">
                      <input type="hidden" value="<?php echo $emp->id?>" id="id" name="id">
                      <button class="btn btn-sm btn-outline-danger waves-effect" name="eliminar" onclick="return confirm('¿Realmente deseas eliminar el registro?')"><i class="ti-trash"></i></button>
                    </form>
                  </td>
                </tr>


                <?php 
                    } 
                  }else{
                    echo "<div class='jumbotron col-lg-12'>";
                    echo "<h2><i class='glyphicon glyphicon-minus-sign'></i> No hay Empleados registrados.!</h2>";
                    echo "<h3>Puede registrar un nuevo desde el boton Registrar.</h3>";
                    echo "</div>";
                  }
                ?> 
                </table>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div id="styleSelector">
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>