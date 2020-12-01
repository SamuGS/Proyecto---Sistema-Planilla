<?php include 'config.php'; ?>
<?php

    if(isset($_POST['agregar'])){
        
        $nombre = $_POST['nombre'];
        $monto = $_POST['salario'];
        $a = $_POST['afp'];
        $s = $_POST['seguro'];
        $sn = $_POST['sn'];
         
        if(empty($nombre) || empty($monto)){
            echo '<div class="alert alert-danger" data-dismiss="alert">Campos vacios!</div>';
        }else{   	

			$sql = "insert into pago(nombre,salario,squince,afp,seguro,registro) value (\"$nombre\",\"$monto\",\"$sn\",\"$a\",\"$s\",NOW())";
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
			<div class="alert alert-danger" role="alert" data-dismiss="alert">
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
				<div class="alert alert-success" role="alert" data-dismiss="alert">
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
        $nombre = $_POST['nombre'];
        $monto = $_POST['salario'];
        $ide = $_POST['id'];

        if(empty($nombre) || empty($monto)){
            echo '<div class="alert alert-danger">Campos vacios!</div>';
        }else{


			$sql = "update empleado set nombre=\"$nombre\",salario=\"$monto\" where id=".$ide;
			$query_new_insert = mysqli_query($con,$sql);
			
			if ($query_new_insert){
				$messages[] = "Datos actualizados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.";
			}

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
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
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

    if(isset($_POST['eliminar'])){
        $ide = $_POST['id'];

 
			$sql = "DELETE FROM pago WHERE id=".$ide;
			$query_new_insert = mysqli_query($con,$sql);
			
			if ($query_new_insert){
				$messages[] = "Datos eliminados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.";
			}

    }

    if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert" data-dismiss="alert">
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
				<div class="alert alert-success" role="alert" data-dismiss="alert">
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