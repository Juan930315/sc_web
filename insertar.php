<?php 
include("conexion.php");


// <!-- ORDEN DE MENSAJERIA -->


if (isset($_POST['created_at']) && !empty($_POST['created_at']) && 
isset($_POST['ejecutivo']) && !empty($_POST['ejecutivo']) &&
isset($_POST['cliente']) && !empty($_POST['cliente']))
{
    mysqli_query($con,"INSERT INTO orden (created_at,ejecutivo,cliente) 
   VALUES ('$_POST[created_at]','$_POST[ejecutivo]','$_POST[cliente]')");

	
	echo "orden: Datos insertados con exito";
	
}else{
	echo "orden: problemas a insertar datos / o no ha ingresado nada ";
}


if (isset($_POST['calle']) && !empty($_POST['calle']) && 
isset($_POST['colonia']) && !empty($_POST['colonia']) &&
isset($_POST['delegacion']) && !empty($_POST['delegacion']) &&
isset($_POST['cp']) && !empty($_POST['cp']) &&
isset($_POST['telefonocl']) && !empty($_POST['telefonocl']) &&
isset($_POST['nomcontacto1']) && !empty($_POST['nomcontacto1']) &&
isset($_POST['nomcontacto2']) && !empty($_POST['nomcontacto2']) &&
isset($_POST['horarioab']) && !empty($_POST['horarioab']) &&
isset($_POST['horarioen']) && !empty($_POST['horarioen']) &&
isset($_POST['de']) && !empty($_POST['de']) &&
isset($_POST['enviodi']) && !empty($_POST['enviodi']) &&
isset($_POST['guiaen']) && !empty($_POST['guiaen']) &&
isset($_POST['pagopro']) && !empty($_POST['pagopro']) &&
isset($_POST['nombrecont']) && !empty($_POST['nombrecont']) &&
isset($_POST['numfactura']) && !empty($_POST['numfactura']) &&
isset($_POST['formapago']) && !empty($_POST['formapago']))
{
    mysqli_query($con,"INSERT INTO cliente (calle, colonia, delegacion,
    cp, telefonocl, nomcontacto1, nomcontacto2, horarioab, horarioen, de, enviodi,
    guiaen, pagopro, nombrecont, numfactura, formapago) 
   VALUES ('$_POST[calle]','$_POST[colonia]','$_POST[delegacion]',
   '$_POST[cp]','$_POST[telefonocl]','$_POST[nomcontacto1]','$_POST[nomcontacto2]',
   '$_POST[horarioab]','$_POST[horarioen]', '$_POST[de]',
   '$_POST[enviodi]','$_POST[guiaen]','$_POST[pagopro]','$_POST[nombrecont]',
   '$_POST[numfactura]','$_POST[formapago]')");

	
	echo "</br> cliente: datos insertados con exito ";
	
}else{
    echo "</br> cliente: problemas a insertar datos  / o no ha insertado nada";
} 



if (isset($_POST['proveedor']) && !empty($_POST['proveedor']) && 
isset($_POST['calle']) && !empty($_POST['calle']) &&
isset($_POST['colonia']) && !empty($_POST['colonia']) &&
isset($_POST['municipio']) && !empty($_POST['municipio']) &&
isset($_POST['cp2']) && !empty($_POST['cp2']) &&
isset($_POST['nombre3']) && !empty($_POST['nombre3']) &&
isset($_POST['telefono2']) && !empty($_POST['telefono2']))
{
    mysqli_query($con,"INSERT INTO proveedor (proveedor, calle, colonia, municipio,
     cp2, nombre3, telefono2) 
   VALUES ('$_POST[proveedor]','$_POST[calle]','$_POST[colonia]',
   '$_POST[municipio]','$_POST[cp2]','$_POST[nombre3]', '$_POST[telefono2]')");

	
	echo "</br> proveedor: Datos insertados con exito";
	
}else{
	echo "</br> proveedor: problemas a insertar datos / o no ha ingresado nada ";
}





?>