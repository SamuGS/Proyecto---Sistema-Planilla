<?php include 'config.php'; ?>
<?php

    if(isset($_POST['agregar'])){
        
        $u = $_POST['usuario'];
        $c = sha1(md5($_POST['pass']));
        $m = $_POST['email'];
        $t = $_POST['tipo'];
        $e = $_POST['estado'];

        if(empty($u) || empty($c) || empty($m) || empty($t) || empty($e)){
            echo '<div class="alert alert-danger icons-alert" data-dismiss="alert">Campos vacios!</div>';
        }else{   	

			$sql = "insert into usuario(usuario,clave,correo,tipo,estado,registro) value (\"$u\",\"$c\",\"$m\",\"$t\",\"$e\",NOW())";
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
			<div class="alert alert-danger icons-alert" data-dismiss="alert">
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
				<div class="alert alert-primary icons-alert" data-dismiss="alert">
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
        $usuario = $_POST['usuario'];
        $correo = $_POST['correo'];
        $tipo = $_POST['tipo'];
        $estado = $_POST['estado'];
        $c = sha1(md5($_POST['pass']));
        $ide = $_POST['id'];

        if(empty($usuario) || empty($correo) || empty($tipo) || empty($estado)){
            echo '<div class="alert alert-danger">Campos vacios!</div>';
        }else{


			$sql = "update usuario set usuario=\"$usuario\",clave=\"$c\",correo=\"$correo\",tipo=\"$tipo\",estado=\"$estado\" where id=".$ide;

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
			<div class="alert alert-danger icons-alert" data-dismiss="alert">
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

    


			$sql = "DELETE FROM usuario WHERE id=".$ide;
			$query_new_insert = mysqli_query($con,$sql);
			
			if ($query_new_insert){
				$messages[] = "Datos eliminados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.";
			}

    }

    if (isset($errors)){
			
			?>
			<div class="alert alert-danger icons-alert" data-dismiss="alert">
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
				<div class="alert alert-primary icons-alert" data-dismiss="alert">
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