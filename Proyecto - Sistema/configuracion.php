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
            <h4>Configuración</h4>
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
              <li class="breadcrumb-item">Configuración
              </li>
            </ul>
          </div>  
        </div>
        
        <div class="page-body">
        <?php #include 'action/empleado.php'; ?>

        <div class="row">

          <div class="card">
            <div class="card-header">
             <h5>Copia de seguridad</h5>
            </div>
              <div class="card-block">
              <a href='backup.php' class="btn btn-outline-primary btn-block"><i class="icofont icofont-download"></i></a>
            </div>
            
            
          </div>

          <div class="card">
            <div class="card-header">
             <h5>Desarrolladores</h5>
            </div>
              <div class="card-block">
              <a href='desarrolladores.php' class="btn btn-outline-primary btn-block"><i class="ti-github"></i></a>
            </div>
            
            
          </div>

        </div>

        


      <div id="styleSelector">
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>