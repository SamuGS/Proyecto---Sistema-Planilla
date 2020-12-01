<?php include 'config.php'; ?>
<?php

    if(isset($_POST['agregar'])){
        
        $entrada = $_POST['entrada'];
        $salida = $_POST['salida'];
         
        if(empty($entrada) || empty($salida)){
            echo '<div class="alert alert-danger" data-dismiss="alert">Campos vacios!</div>';
        }else{   	

			$sql = "insert into horario(time_in,time_out) value (\"$entrada\",\"$salida\")";
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

    if(isset($_POST['eliminar'])){
        $ide = $_POST['id'];

 
			$sql = "DELETE FROM horario WHERE id=".$ide;
			$query_new_insert = mysqli_query($con,$sql);
			
			if ($query_new_insert){
				$messages[] = "Datos eliminados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.";
			}

    }

    if (isset($errors)){
			
			?>
			<div class="alert alert-danger icons-alert"  role="alert" data-dismiss="alert">
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
				<div class="alert alert-primary icons-alert" role="alert" data-dismiss="alert">
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