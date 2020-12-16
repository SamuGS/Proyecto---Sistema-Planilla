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
        <?php include 'action/usuario.php'; ?>


        <div class="col-md-8">
          <h2>Cambiar Contraseña</h2>        
          

          <form class="form-horizontal" method="post" action="" role="form">
            
            <div class="form-group">
              <label for="inputEmail1" class="col-lg-6 control-label">Contraseña Actual</label>
              <div class="col-lg-10">
                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña Actual">
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword1" class="col-lg-6 control-label">Nueva Contraseña</label>
              <div class="col-lg-10">
                <input type="password" class="form-control"  id="newpassword" name="newpassword" placeholder="Nueva Contraseña">
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword1" class="col-lg-2 control-label">Confirmar Nueva Contraseña</label>
              <div class="col-lg-10">
                <input type="password" class="form-control" id="confirmnewpassword" name="confirmnewpassword" placeholder="Confirmar Nueva Contraseña">
              </div>
            </div>


            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                <button type="submit" class="btn btn-success btn-lg">Cambiar Contraseña</button>
              </div>
            </div>
          </form>
        </div>
      </div>



      <div id="styleSelector">
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>