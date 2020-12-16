<?php include 'header.php'; ?>

<?php include 'nav.php'; ?>

<?php include 'sidebar.php'; ?>


<div class="pcoded-content">
  <div class="pcoded-inner-content">
    <div class="main-body">
      <div class="page-wrapper">
        <div class="page-header">
          <div class="page-header-title">
            <h4>Usuarios</h4>
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
              <li class="breadcrumb-item">Usuarios Inactivos
              </li>
            </ul>
          </div>  
        </div>
        
        <div class="page-body">
        <?php include 'action/usuario.php'; ?>
        



          <?php include './modelo/Clase.php'; ?>
          <?php 
            $usu = Empleado::mostrar_usuario_inactivo();
            if(count($usu)>0){
              // hacemos la instancia si hay asistencias en la tabla
          ?>

          
 

          <div class="card">
            <div class="card-header">
              <h5>Tabla de Usuarios</h5>
              <div class="card-header-right">
                <i class="icofont icofont-rounded-down"></i>
                <i class="icofont icofont-refresh"></i>
                <i class="icofont icofont-close-circled"></i>
              </div>
            </div>
            
            <div class="card-block">
              <div class="dt-responsive table-responsive">
                <table id="dom-table" class="table nowrap">
                <thead>
                  <th>Usuario</th>
                  <th style="width: 20px">Ver</th>
                  <th style="width: 20px">Actualizar</th>
                  <th style="width: 20px">Eliminar</th>
                </thead>

                <?php foreach($usu as $user){ ?>

                <tr>
                  <td><?php echo $user->usuario?></td>
                  <td><?php include 'modal/ver_usuario2.php'; ?></td>
                  <td><?php include 'modal/actualizar_usuario.php'; ?></td>
                  <td>
                    <form method="post">
                      <input type="hidden" value="<?php echo $user->id?>" id="id" name="id">
                      <button class="btn btn-sm btn-outline-danger waves-effect" name="eliminar"><i class="ti-trash"></i></button>
                    </form>
                  </td>
                </tr>
                </tr>


                <?php 
                    } 
                  }else{
                    echo "<div class='jumbotron col-lg-12'>";
                    echo "<h2><i class='glyphicon glyphicon-minus-sign'></i>No hay usuarios Inactivos!</h2>";
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