<?php 

include("conexion.php");


if (isset($_POST['fech']) && !empty($_POST['fech']) && 
isset($_POST['factura']) && !empty($_POST['factura']))
{
    mysqli_query($con,"INSERT INTO urgencia (fech, factura) 
   VALUES ('".date("Y-m-d")."','".$_POST[factura]."')");
   
   //,$_POST[producto]',
   //'$_POST[salida1]','$_POST[salida2]','$_POST[salida3]', '$_POST[salida4]',
   //'$_POST[salida5]', '$_POST[restante]', '$_POST[mensajero]', '$_POST[vendedor]')");

	
	echo "</br> urgencia: Datos insertados con exito";
	
}else{
	echo "</br> urgencia: problemas a insertar datos / o no ha ingresado nada ";
}








?>