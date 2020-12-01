<?php include 'controlador/Executor.php'; ?>
<?php include 'controlador/Database.php'; ?>


<?php
class Empleado {

	public static $tablename = "empleado";

	public function Empleado(){
		$this->nombre = "";
		$this->salario = "";

	}

	public static function mostrar(){
		$sql = "select * from ".self::$tablename."";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new Empleado();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->codigo = $r['codigo'];
			$array[$cnt]->nombre = $r['nombre'];
			$array[$cnt]->direccion = $r['direccion'];
			$array[$cnt]->edad = $r['edad'];
			$array[$cnt]->dui = $r['dui'];
			$array[$cnt]->telefono = $r['telefono'];
			$array[$cnt]->cargo = $r['id_cargo'];
			$array[$cnt]->horario = $r['id_horario'];
			$array[$cnt]->salario = $r['salario'];
			$array[$cnt]->seguro = $r['seguro'];
			$array[$cnt]->afp = $r['afp'];
			
			$cnt++;
		}
		return $array;
	}


	public static function mostrar_pago(){
		$sql = "select * from pago";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new Empleado();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->nombre = $r['nombre'];
			$array[$cnt]->salario = $r['salario'];
			$array[$cnt]->squince = $r['squince'];
			$array[$cnt]->afp = $r['afp'];
			$array[$cnt]->seguro = $r['seguro'];
			$array[$cnt]->registro = $r['registro'];
			$cnt++;
		}
		return $array;
	}

	public static function mostrar_pago_id($id){
		$sql = "select * from pago where id=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new Empleado();
		while($r = $query[0]->fetch_array()){
			$data->id = $r['id'];
			$data->nombre = $r['nombre'];
			$data->salario = $r['salario'];
			$data->squince = $r['squince'];
			$data->afp = $r['afp'];
			$data->seguro = $r['seguro'];
			$data->registro = $r['registro'];
			$found = $data;
			break;
		}
		return $found;
	}

	public static function mostrar_usuario(){
		$sql = "select * from usuario where estado = 1";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new Empleado();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->usuario = $r['usuario'];
			$array[$cnt]->clave = $r['clave'];
			$array[$cnt]->correo = $r['correo'];
			$array[$cnt]->tipo = $r['tipo'];
			$array[$cnt]->estado = $r['estado'];
			$array[$cnt]->registro = $r['registro'];
			$cnt++;
		}
		return $array;
	}


	public static function mostrar_asistencia(){
		$sql = "select * from asistencia where estado = 0";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new Empleado();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->codigo = $r['id_empleado'];
			$array[$cnt]->nombre = $r['nombre'];
			$array[$cnt]->fecha = $r['fecha'];
			$array[$cnt]->time_in = $r['time_in'];
			$array[$cnt]->estado = $r['estado'];
			$array[$cnt]->time_out = $r['time_out'];
			$array[$cnt]->num_hr = $r['num_hr'];
			$array[$cnt]->registro = $r['registro'];
			$cnt++;
		}
		return $array;
	}

	public static function asistencia_finalizada(){
		$sql = "select * from asistencia where estado = 1";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new Empleado();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->codigo = $r['id_empleado'];
			$array[$cnt]->nombre = $r['nombre'];
			$array[$cnt]->fecha = $r['fecha'];
			$array[$cnt]->time_in = $r['time_in'];
			$array[$cnt]->estado = $r['estado'];
			$array[$cnt]->time_out = $r['time_out'];
			$array[$cnt]->num_hr = $r['num_hr'];
			$array[$cnt]->registro = $r['registro'];
			$cnt++;
		}
		return $array;
	}

	public static function sum_pago(){
		$sql = "SELECT *, SUM(num_hr) FROM asistencia";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new Empleado();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->codigo = $r['id_empleado'];
			$array[$cnt]->nombre = $r['nombre'];
			$array[$cnt]->fecha = $r['fecha'];
			$array[$cnt]->time_in = $r['time_in'];
			$array[$cnt]->estado = $r['estado'];
			$array[$cnt]->time_out = $r['time_out'];
			$array[$cnt]->num_hr = $r['num_hr'];
			$array[$cnt]->registro = $r['registro'];
			$cnt++;
		}
		return $array;
	}


	public static function mostrar_cargo(){
		$sql = "select * from cargo";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new Empleado();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->cargo = $r['descripcion'];
			$array[$cnt]->ph = $r['pago_hora'];
			
			$cnt++;
		}
		return $array;
	}

	public static function mostrar_horario(){
		$sql = "select * from horario";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new Empleado();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->horario = $r['time_in']." - ".$r['time_out'];
			
			$cnt++;
		}
		return $array;
	}



}

?>