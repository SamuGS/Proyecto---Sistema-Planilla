<?php include 'header.php'; ?>

<?php include 'nav.php'; ?>

<?php include 'sidebar.php'; ?>


<div class="pcoded-content">
  <div class="pcoded-inner-content">
    <div class="main-body">
      <div class="page-wrapper">
        <div class="page-header">
          <div class="page-header-title">
            <h4>Asistencias</h4>
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
              <li class="breadcrumb-item">Asistencia finalizadas
              </li>
            </ul>
          </div>  
        </div>
        
        <div class="page-body">
        <?php include 'action/asistencia.php'; ?>


          <?php include './modelo/Clase.php'; ?>
          <?php $as = Empleado::asistencia_finalizada();
          if(count($as)>0){
              // hacemos la instancia si hay asistencias en la tabla
          ?>

          
 

          <div class="card">
            <div class="card-header">
              <h5>Tabla de Asistencia</h5>
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
                  <th>Codigo</th>
                  <th>Fecha</th>
                  <th>Fecha</th>
                  <th>Hora de entrada</th>
                  <th>Hora de salida</th>
                  <th>Estado</th>
                </thead>

                <?php
                  foreach($as as $ast){
                ?>
      

                <tr>
                  <td><?php echo $ast->codigo?></td>
                  <td><?php echo $ast->nombre?></td>
                  <td><?php echo $ast->fecha?></td>
                  <td><?php echo $ast->time_in?></td>
                  <td><?php echo $ast->time_out?></td>
                  <td>
                  <?php if($ast->estado = "0"){ echo "Laborando"; 
                  }else{
                    echo "Finalizado";
                    } ?></td>
                </tr>


                <?php 
                    } 
                  }else{
                    echo "<div class='jumbotron col-lg-12'>";
                    echo "<h2><i class='glyphicon glyphicon-minus-sign'></i> Aun no se registran asistencias para este dia..!</h2>";
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