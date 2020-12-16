<?php include 'config.php'; ?>
<?php

    if(isset($_POST['agregar'])){
        
        $n = $_POST['nombre'];

         
        if(empty($n)){
            echo '<div class="alert alert-danger icons-alert" data-dismiss="alert">Campos vacios!</div>';
        }else{   	

			$sql = "insert into cargo(descripcion) value (\"$n\")";
			$query_new_insert = mysqli_query($con,$sql);
			
			if ($query_new_insert){
				$msgag[] = "Datos ingresados satisfactoriamente.";
			} else{
				$errag []= "Lo siento algo ha salido mal intenta nuevamente.";
			}

        }   
    			
    }

			

    if (isset($errag)){
			
			?>
			<div class="alert alert-danger icons-alert" role="alert" data-dismiss="alert">
					<strong>Error!</strong> 
					<?php
						foreach ($errag as $erag) {
								echo $erag;
							}
						?>
			</div>
			<?php
			}
			if (isset($msgag)){
				
				?>
				<div class="alert alert-primary icons-alert" role="alert" data-dismiss="alert">
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($msgag as $mess) {
									echo $mess;
								}
							?>
				</div>
				<?php
			}
?>


<?php

    if(isset($_POST['actualizar'])){
        $n = $_POST['nombre'];
        $ide = $_POST['id'];
       

        if(empty($n)){
            echo '<div class="alert alert-danger icons-alert" role="alert" data-dismiss="alert">';
        }else{


			$sql = "update cargo set descripcion=\"$n\" where id=".$ide;
			$query_new_insert = mysqli_query($con,$sql);
			
			if ($query_new_insert){
				$mensaje_actualizar[] = "Datos actualizados satisfactoriamente.";
			} else{
				$error_actualizar []= "Lo siento algo ha salido mal intenta nuevamente.";
			}

        }
    }

    if (isset($errors)){
			
			?>
			<div class="alert alert-danger icons-alert" role="alert" data-dismiss="alert">
					<strong>Error!</strong> 
					<?php
						foreach ($error_actualizar as $e_actualizar) {
								echo $_actualizar;
							}
						?>
			</div>
			<?php
			}
			if (isset($mensaje_actualizar)){
				
				?>
				<div class="alert alert-primary icons-alert" role="alert" data-dismiss="alert">
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($mensaje_actualizar as $m_actualizar) {
									echo $m_actualizar;
								}
							?>
				</div>
				<?php
			}
?>


<?php

    if(isset($_POST['eliminar'])){
        $ide = $_POST['id'];

 
			$sql = "DELETE FROM cargo WHERE id=".$ide;
			$query_new_insert = mysqli_query($con,$sql);
			
			if ($query_new_insert){
				$mensaje_del[] = "Datos eliminados satisfactoriamente.";
			} else{
				$error_del[]= "Lo siento algo ha salido mal intenta nuevamente.";
			}

    }

    if (isset($errors)){
			
			?>
			<div class="alert alert-danger icons-alert" role="alert" data-dismiss="alert">
					<strong>Error!</strong> 
					<?php
						foreach ($error_del as $e_del) {
								echo $e_del;
							}
						?>
			</div>
			<?php
			}
			if (isset($mensaje_del)){
				
				?>
				<div class="alert alert-primary icons-alert" role="alert" data-dismiss="alert">
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($mensaje_del as $m_del) {
									echo $m_del;
								}
							?>
				</div>
				<?php
			}
?>