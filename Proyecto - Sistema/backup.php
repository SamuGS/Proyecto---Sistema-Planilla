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
              <li class="breadcrumb-item">Copia de seguridad
              </li>
            </ul>
          </div>  
        </div>

        <div class="content-wrapper" style="min-height: 400px;">
 
          <section class="content-header">

            <div class="row">
              <div class="col-md-6">

                <div class="card">
                  <div class="card-header">
                  <h5>Respaldo de base de datos</h5>
                    
                  </div>

                  <div class="card-block">
                

                  <?php
                    
                    $con = mysqli_connect("localhost","root","","db_planilla");
                    $tables = array();
                    $query = mysqli_query($con, 'SHOW TABLES');
                      while($row = mysqli_fetch_row($query)){
                        $tables[] = $row[0];
                      }

                      $result = "";
                      
                      foreach($tables as $table){
                      $query = mysqli_query($con, 'SELECT * FROM '.$table);
                      $num_fields = mysqli_num_fields($query);

                      $result .= 'DROP TABLE IF EXISTS '.$table.';';
                      $row2 = mysqli_fetch_row(mysqli_query($con, 'SHOW CREATE TABLE '.$table));
                      $result .= "\n\n".$row2[1].";\n\n";

                      for ($i = 0; $i < $num_fields; $i++) {
                      while($row = mysqli_fetch_row($query)){
                        
                        $result .= 'INSERT INTO '.$table.' VALUES(';
                        for($j=0; $j<$num_fields; $j++){
                          $row[$j] = addslashes($row[$j]);
                          $row[$j] = str_replace("\n","\\n",$row[$j]);
                          if(isset($row[$j])){
                          $result .= '"'.$row[$j].'"' ; 
                        }else{ 
                          $result .= '""';
                        }
                        if($j<($num_fields-1)){ 
                          $result .= ',';
                        }
                        }
                        $result .= ");\n";
                    }
                    }
                    $result .="\n\n";
                    }


                    //Create Folder
                    $folder = 'Respaldo/';
                    if (!is_dir($folder))
                    mkdir($folder, 0777, true);
                    chmod($folder, 0777);

                    $date = date('m-d-Y'); 
                    $filename = $folder."db_planilla_".$date; 

                    $handle = fopen($filename.'.sql','w+');
                    fwrite($handle,$result);
                    fclose($handle);
                    ?>

                      <div id="container">
                        <div class="box box-info">
                        <table class="table text-center">
                      <?php
                            echo "<tr><td><div class='alert background-success'>Exito</div></td></tr>";
                            echo "<tr><td><font color='green' size=4>Su respaldo de la BD ha sido generada Exitosamente! </font></td>
                            </tr>";
                            echo "<tr><td>Ubicación: ".$filename."</td></tr>";
                        ?>
                        </table>
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