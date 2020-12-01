<?php include 'config.php'; ?>
<?php

    if(isset($_POST['agregar'])){
        $cod = mt_rand(1000, 9999);
        $nombre = $_POST['nombre'];
        $dir = $_POST['direccion'];
        $dui = $_POST['dui'];
        $edad = $_POST['edad'];
        $tel = $_POST['telefono'];
        $monto = $_POST['salario'];
		$cargo = $_POST['id_cargo'];
        $horario = $_POST['id_horario'];
        $afp = 0;
        $seguro = 0;

        if(empty($nombre) || empty($dir) || empty($dui) || empty($tel) || empty($monto)){
            echo 
            '<div class="alert alert-danger icons-alert" data-dismiss="alert">
			<p><strong>Lo siento!</strong> los campos enviados estan vacios.</p>
			</div>';
        }else{


			$sql = "insert into empleado(codigo,nombre,direccion,dui,edad,telefono,id_cargo,id_horario,salario,seguro,afp,registro) 
								value (\"$cod\",\"$nombre\",\"$dir\",\"$dui\",\"$edad\",\"$tel\",\"$cargo\",\"$horario\",\"$monto\",\"$afp\",\"$seguro\",NOW())";
			$query_new_insert = mysqli_query($con,$sql);
			
			if ($query_new_insert){
				$mensajeagregar[] = "Datos ingresados satisfactoriamente.";
			} else{
				$erroragregar []= "Lo siento algo ha salido mal intenta nuevamente.";
			}

        }
    }

    if (isset($erroragregar)){
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($erroragregar as $errorag) {
								echo $errorag;
							}
						?>
			</div>
			<?php
			}
			if (isset($mensajeagregar)){
				
				?>
				<div class="alert alert-primary icons-alert" role="alert" data-dismiss="alert">
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($mensajeagregar as $mensajeag) {
									echo $mensajeag;
								}
							?>
				</div>
				<?php
			}
?>


<?php

    if(isset($_POST['actualizar'])){
        $nombre = $_POST['nombre'];
        $dir = $_POST['direccion'];
        $dui = $_POST['dui'];
        $edad = $_POST['edad'];
        $tel = $_POST['telefono'];
        $monto = $_POST['salario'];
        $safp = $_POST['afp'];
        $sisss = $_POST['seguro'];
        $ide = $_POST['id'];
        $afp = $monto * $safp;
        $seguro = $monto * $sisss;

        $salario = $monto - $afp - $seguro;





        if(empty($nombre) || empty($dir) || empty($dui) || empty($tel) || empty($monto)){
            echo '<div class="alert alert-danger" data-dismiss="alert">Campos vacios!</div>';
        }else{


			$sql = "update empleado set nombre=\"$nombre\",direccion=\"$dir\",dui=\"$dui\",edad=\"$edad\",telefono=\"$tel\",salario=\"$salario\",afp=\"$afp\",seguro=\"$seguro\" where id=".$ide;

			$query_new_insert = mysqli_query($con,$sql);

			
			if ($query_new_insert){
				$msgac[] = "Datos actualizados satisfactoriamente.";
			} else{
				$erac []= "Lo siento algo ha salido mal intenta nuevamente.";
			}

        }
    }

    if (isset($erac)){
			
			?>
			<div class="alert alert-danger icons-alert" role="alert" data-dismiss="alert">
					<strong>Error!</strong> 
					<?php
						foreach ($erac as $errorac) {
								echo $errorac;
							}
						?>
			</div>
			<?php
			}
			if (isset($msgac)){
				
				?>
				<div class="alert alert-primary icons-alert" data-dismiss="alert">
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($msgac as $msac) {
									echo $msac;
								}
							?>
				</div>
				<?php
			}
?>


<?php

    if(isset($_POST['eliminar'])){
        $ide = $_POST['id'];

    


			$sql = "DELETE FROM empleado WHERE id=".$ide;
			$query_new_insert = mysqli_query($con,$sql);
			
			if ($query_new_insert){
				$messages[] = "Datos eliminados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.";
			}

    }

    if (isset($errors)){
			
			?>
			<div class="alert alert-danger icons-alert" role="alert" data-dismiss="alert">
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


<?php

    if(isset($_POST['asistencia'])){
        
        $n = $_POST['nombre'];
        $c = $_POST['codigo'];

        if(empty($n)){
            echo '<div class="alert alert-danger" data-dismiss="alert">Campos vacios!</div>';
        }else{   	

			$sql = "insert into asistencia(id_empleado, nombre, fecha, time_in, estado, registro) value (\"$c\",\"$n\",NOW(),NOW(),0,NOW())";
			$query_new_insert = mysqli_query($con,$sql);
			
			if ($query_new_insert){
				$msgag[] = "La asistencia del empleado <b>$n</b> con codigo <b>$c</b> se registro correctamente.";
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