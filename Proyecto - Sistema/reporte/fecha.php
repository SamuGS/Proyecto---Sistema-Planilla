<!DOCTYPE html>
<html>
<head>
	<title>Reporte por fecha</title>
	 <link href="../plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="../plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    

</head>
<body>

<?php 
include "../core/modules/index/model/SellData.php";
include "../core/modules/index/model/UserData.php";
include "../core/modules/index/model/OperationData.php";
include "../core/modules/index/model/ProductData.php";
include "../core/controller/Executor.php";
include "../core/controller/Database.php";
include "../core/controller/Session.php";
 ?>

<?php
$products = ProductData::getAll();
$meseros = UserData::getAllMeseros();
?>
<section class="content">
<div class="row">
	<div class="col-md-12">
	<h1>Reportes</h1>

						<form>
						<input type="hidden" name="view" value="reports">
<div class="row">
<div class="col-md-3">

<select name="product_id" class="form-control">
	<option value="">--  TODOS --</option>
	<?php foreach($products as $p):?>
	<option value="<?php echo $p->id;?>"><?php echo $p->name;?></option>
	<?php endforeach; ?>
</select>

</div>
<div class="col-md-3">
<input type="date" name="sd" value="<?php if(isset($_GET["sd"])){ echo $_GET["sd"]; }?>" class="form-control">
</div>
<div class="col-md-3">
<input type="date" name="ed" value="<?php if(isset($_GET["ed"])){ echo $_GET["ed"]; }?>" class="form-control">
</div>

<div class="col-md-3">
<input type="submit" class="btn btn-success btn-block" value="Procesar">
</div>

</div>
<!--
<br>
<div class="row">
<div class="col-md-4">

<select name="mesero_id" class="form-control">
	<option value="">--  MESEROS --</option>
	<?php foreach($meseros as $p):?>
	<option value="<?php echo $p->id;?>"><?php echo $p->name;?></option>
	<?php endforeach; ?>
</select>

</div>

<div class="col-md-4">

<select name="operation_type_id" class="form-control">
	<option value="1">VENTA</option>
</select>

</div>

</div>
-->
</form>

	</div>
	</div>
<br><!--- -->
<div class="row">
	
	<div class="col-md-12">
		<?php if(isset($_GET["sd"]) && isset($_GET["ed"]) ):?>
<?php if($_GET["sd"]!=""&&$_GET["ed"]!=""):?>
			<?php 
			$operations = array();

			if($_GET["product_id"]==""){
			$operations = OperationData::getAllByDateOfficial($_GET["sd"],$_GET["ed"]);
			}
			else{
			$operations = OperationData::getAllByDateOfficialBP($_GET["product_id"],$_GET["sd"],$_GET["ed"]);
			} 


			 ?>

			 <?php if(count($operations)>0):?>
<table class="table table-bordered">
	<thead>
		<th>Id</th>
		<th>Producto</th>
		<th>Cantidad</th>
		<th>Operacion</th>
		<th>Fecha</th>
	</thead>
<?php foreach($operations as $operation):?>
	<tr>
		<td><?php echo $operation->id; ?></td>
		<td><?php echo $operation->getProduct()->name; ?></td>
		<td><?php echo $operation->q; ?></td>
		<td><?php echo $operation->getOperationType()->name; ?></td>
		<td><?php echo $operation->created_at; ?></td>
	</tr>
<?php endforeach; ?>

</table>
<br>
<a href="#" class="btn btn-lg btn-primary">Generar Reporte</a>

			 <?php else:
			 // si no hay operaciones
			 ?>
<script>
	$("#wellcome").hide();
</script>
<div class="jumbotron">
	<h2>No hay operaciones</h2>
	<p>El rango de fechas seleccionado no proporciono ningun resultado de operaciones.</p>
</div>

			 <?php endif; ?>
<?php else:?>
<script>
	$("#wellcome").hide();
</script>
<div class="jumbotron">
	<h2>Fecha Incorrectas</h2>
	<p>Puede ser que no selecciono un rango de fechas, o el rango seleccionado es incorrecto.</p>
</div>
<?php endif;?>

		<?php endif; ?>
	</div>
</div>

<br><br><br><br>
</section>

<script type="text/javascript">window.print()</script>
</body>
</html>
