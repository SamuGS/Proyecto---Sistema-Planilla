<?php include 'config.php'; ?>
<?php

    if(isset($_POST['actualizar'])){

        $ide = $_POST['id'];
        $entrada = $_POST['time_in'];
        
        $time_out = 'NOW()';

		$sql = "update asistencia set estado=\"1\", time_out=$time_out, num_hr=\"9\" where id=".$ide;
		$query_new_insert = mysqli_query($con,$sql);
			
		if ($query_new_insert){
			$messages[] = "Datos actualizados satisfactoriamente.";
		} else{
			$errors []= "Lo siento algo ha salido mal intenta nuevamente.";
		}      
    }

    if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-primary icons-alert" data-dismiss="alert" role="alert">
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}
?>

<?php

    if(isset($_POST['procesar'])){


		$sql = "DELETE * FROM asistencia where estado = 1";
		$query_new_insert = mysqli_query($con,$sql);
			
		if ($query_new_insert){
			$actualizar[] = "Datos actualizados satisfactoriamente.";
		} else{
			$error_actuaizar []= "Lo siento algo ha salido mal intenta nuevamente.";
		}      
    }

    if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($error_actuaizar as $e_a) {
								echo $e_a;
							}
						?>
			</div>
			<?php
			}
			if (isset($actualizar)){
				
				?>
				<div class="alert alert-primary icons-alert" data-dismiss="alert" role="alert">
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($actualizar as $m_actualizar) {
									echo $m_actualizar;
								}
							?>
				</div>
				<?php
			}
?>