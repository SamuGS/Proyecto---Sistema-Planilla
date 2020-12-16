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
            <h4>Inicio</h4>
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
              <li class="breadcrumb-item">Inicio
              </li>
            </ul>
          </div>  
        </div>
        
        <div class="page-body">


        <div class="row">

          <div class="col-md-6">
          <div class="card large-widget-card">
            <div class="card-block-big">
              <p><h3>Empleados registrados</h3></p>
              <h3><?php echo count(Empleado::mostrar());?></h3>
              
              <i class="icofont icofont-id-card"></i>
            </div>

            <a href="empleado.php" class="btn btn-outline-primary">Ver más</i></a>
          </div>
        </div>


        <div class="col-md-6">
          <div class="card large-widget-card">
            <div class="card-block-big">
              <p><h3>Asistencias de hoy</h3></p>
              <h3><?php echo count(Empleado::mostrar_asistencia());?></h3>
              
              <i class="icofont icofont-meeting-add"></i>
            </div>

            <a href="asistencia.php" class="btn btn-outline-primary">Ver más</a>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card large-widget-card">
            <div class="card-block-big">
              <p><h3>Usuarios Registrados</h3></p>
              <h3><?php echo count(Empleado::mostrar_usuario());?></h3>
              
              <i class="icofont icofont-id-card"></i>
            </div>

            <a href="usuario.php" class="btn btn-outline-primary">Ver más</a>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card large-widget-card">
            <div class="card-block-big">
              <p><h3>Pagos Finalizados</h3></p>
              <h3><?php echo count(Empleado::mostrar_pago());?></h3>
              
              <i class="icofont icofont-bill-alt"></i>
            </div>

            <a href="pago_procesado.php" class="btn btn-outline-primary">Ver más</a>
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