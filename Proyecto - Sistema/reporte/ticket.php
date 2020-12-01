
<html>
<head>
  <title>Ticket de Empleado</title>
  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.bootstrap4.min.css">
  
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>


</head>

<body>
<br>

<div class="container">

<?php include '../Clase.php' ?>

<?php if(isset($_GET["id"]) && $_GET["id"]!=""):?>

<?php
$pago = Empleado::mostrar_pago_id($_GET["id"]);
?>


<div class="card">
<div class="card-body">
<h4>Ticket <font color="red"> N° <?php echo $pago->id; ?></font> </h4>

<div class="row">
<div class="col-lg-12">
	<p class="alert alert-secondary">Este es el comprobante de su pago. Por favor! Guarde su comprobante por motivos de reclamos o demas inconvenientes.</p>
</div>
<div class="col-lg-12">
<table class="table" style="width: 100%">




<thead>
	<th><b>Empleado</b> </th> 
	<th><b>Descuento AFP</b> </th>  
	<th><b>Descuento ISSS</b> </th> 
	<th><b>Mes</b> </th>
	<th><b>Quincena</b> </th>
	<th><b>Transaccion</b> </th> 
</thead>
<tr>
	<td><?php echo $pago->nombre; ?></td>
	<td><?php echo "$ ".$pago->afp; ?></td>
	<td><?php echo "$ ". $pago->seguro; ?></td>
 	<td><?php echo "$ ". $pago->salario; ?></td>
 	<td><?php echo "$ ". $pago->squince; ?></td>
	<td><?php echo $pago->registro; ?></td>
</tr>
  

 

 
</table>
</div>
</div>
<?php else:?>
  <p class="alert alert-danger"> Algo salio mal!</p>
<?php endif; ?>
</div>
</div>
</div>
</body>

<script type="text/javascript">
  window.print();

</script>
</html>