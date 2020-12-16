<?php include '../config.php'; ?>

<?php

    if(isset($_POST['agregar'])){
	$ide = $_POST['id'];
    $n = $_POST['nombre'];
    $m = $_POST['mensual'];
    $q = $_POST['quincenal'];
    $d = $_POST['descuento'];   
    $f = $_POST['fecha']; 
     

    echo "<b>Comprobante de Pago <text color='red'>N° </b>$ide";
    echo "<br>";
    echo "<br>";
    echo "----------------------------------------------";
    echo "<br>";
    echo "<b>Empleado:</b><br> ". $n;
    echo "<br>";
    echo "----------------------------------------------";
    echo "<br>";
    echo "<b>Sueldo mensual:</b> $".$m;
    echo "<br>";
    echo "----------------------------------------------";
    echo "<br>";
    echo "<b>Sueldo quincenal:</b> $".$q;
    echo "<br>";
    echo "----------------------------------------------";
    echo "<br>";
    echo "<b>Seguro y AFP:</b> $".$d;
    echo "<br>";
    echo "----------------------------------------------";
    echo "<br>";
    echo "<b>Fecha de Pago:</b> ".$f;
    echo "<br>";
    echo "----------------------------------------------";

    echo "<br>";
    echo "Sistema Planilla de pagos.";
    ##echo "<script>date();</script>";

    }
?>
<script>window.print();</script>