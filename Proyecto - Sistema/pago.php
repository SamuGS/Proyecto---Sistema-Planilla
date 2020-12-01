<html>
<head>
  <title>Pagos</title>
  <link rel="stylesheet" type="text/css" href="./plugins/bower_components/bootstrap/dist/css/bootstrap.min.css"> <!-- jQuery and JS bundle w/ Popper.js -->

  <link rel="stylesheet" href="./autocompletar/js/jquery-ui.css">
  <script src="./autocompletar/js/jquery-1.10.2.js"></script>
  <script src="./autocompletar/js/jquery-ui.js"></script>

</head>


<?php 
session_start();
if(isset($_POST['cerrarSesion'])){
    unset($_SESSION['usuario']);
    header('location:index.php');
}

?>

<?php if(isset($_SESSION['usuario'])) { ?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">INICIO</a>
</nav>


<?php }else{
        header('Location: login.php');
}
?>

<body class="container">
<br>
<?php include 'action/pago.php'; ?>

<div class="row">

<section class="col-lg-3">

  

<script type="text/javascript">

$(function() {
            $("#nombre").autocomplete({
                source: "autocompletar/pago.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#nombre').val(ui.item.nombre);
          $('#salario').val(ui.item.salario);
          $('#afp').val(ui.item.afp);
          $('#seguro').val(ui.item.seguro);
          $('#salarioneto').val(ui.item.salario/2);

           }
            });
    });
</script>




<div class="alert alert-primary" role="alert">
  Formulario de <b>Pagos!</b>
</div>

<form class="form-horizontal" method="POST">
    <div class="form-group">
      <input class="form-control" placeholder="Nombre completo" name="nombre" id="nombre">
    </div>

    <input type="hidden" id="id_pago">

    <div class="form-group">
      <input class="form-control" placeholder="AFP" name="afp" id="afp" readonly>
    </div>

    <div class="form-group">
      <input class="form-control" placeholder="Seguro ISSS" name="seguro" id="seguro" readonly>
    </div>

    <div class="form-group">
      <input class="form-control" placeholder="Salario Mensual" name="salario" id="salario" readonly>
    </div>

    <div class="form-group">
      <input class="form-control" placeholder="Salario Quincenal" name="sn" id="salarioneto" readonly>
    </div>



    <div class="form-group">
      <button type="submit" class="btn btn-success btn-block" name="agregar" id="agregar">Procesar</button>
    </div>
    <div class="form-group">
      <button type="reset" class="btn btn-secondary btn-block">Limpiar</button>
    </div>

    <div class="alert alert-danger" role="alert">
      El descuento de AFP y Seguro Social se descuentan automaticamente de cada <b>Pago!</b>
    </div>

</form>


</section>



<section class="col-lg-9">

<h2>Pagos Procesados </h2>
<?php include 'Clase.php' ?>

<?php

    $emps = Empleado::mostrar_pago();
    if(count($emps)>0){
      // si hay usuarios
?>

<script type="text/javascript">
$(document).ready( function () {
    $('#example').DataTable();
} );</script>

<div class="card">
<div class="card-body">
  

    <table id="example" class="table" style="width:100%">
      <thead>
        <th>Empleado</th>
        <th>Salario</th>
        <th>Fecha</th>
        <th>Ticket</th>
        <th>Opcion</th>
      </thead>
      

      <?php
        foreach($emps as $emp){
      ?>
      

      <tr>
        <td><?php echo $emp->nombre?></td>
        <td>$ <?php echo $emp->salario?></td>
        <td><?php echo $emp->registro?></td>

        <td><a class="btn btn-sm btn-outline-secondary waves-effect" href="reporte/ticket.php?&id=<?php echo $emp->id; ?>" target="_blank">Generar </a></td>

      
        <td>
          <form method="post">
            <input type="hidden" value="<?php echo $emp->id?>" id="id" name="id">
            <button class="btn btn-secondary btn-sm" name="eliminar">Eliminar</button>
          </form>
        </td>
      </tr>

<?php
}
}else{


    echo "<div class='jumbotron col-lg-12'>";
    echo "<h2><i class='glyphicon glyphicon-minus-sign'></i> Aun no se registran pagos.!</h2>";
    echo "<h3>Si desea procesar un pago debe de buscar al empleado por nombre..</h3>";
    echo "</div>";
}
?> 
</table>
</div>
</div>
</section>
</div>

</div>

</body>

</html>