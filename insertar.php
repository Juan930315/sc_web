<?php 
include("conexion.php");

if (isset($_POST['created_at']) && !empty($_POST['created_at']) && 
isset($_POST['ejecutivo']) && !empty($_POST['ejecutivo']) &&
isset($_POST['cliente']) && !empty($_POST['cliente']))
{
    mysql_query("INSERT INTO orden (created_at,ejecutivo,cliente) 
   VALUES ('$_POST[created_at]','$_POST[ejecutivo]','$_POST[cliente]')");

	
	echo "Datos insertados con exito";
	
}else{
	echo "problemas a insertar datos ";
}

include("conexion.php");
if (isset($_POST['calle']) && !empty($_POST['calle']) && 
isset($_POST['colonia']) && !empty($_POST['colonia']) &&
isset($_POST['delegacion']) && !empty($_POST['delegacion']) &&
isset($_POST['cp']) && !empty($_POST['cp']) &&
isset($_POST['telefonocl']) && !empty($_POST['telefonocl']) &&
isset($_POST['contacto1']) && !empty($_POST['contacto1']) &&
isset($_POST['contacto2']) && !empty($_POST['contacto2']) &&
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
    mysql_query("INSERT INTO cliente (calle, colonia, delegacion,
    cp, telefonocl, contacto1, contacto2, horarioab, de, horarioen, enviodi,
    guiaen, pagopro, nombrecont, numfactura, formapago) 
   VALUES ('$_POST[calle]','$_POST[colonia]','$_POST[delegacion]',
   '$_POST[cp]','$_POST[telefonocl]','$_POST[contacto1]','$_POST[contacto2]',
   '$_POST[horarioab]','$_POST[de]','$_POST[horarioen]',
   '$_POST[enviodi]','$_POST[guiaen]','$_POST[pagopro]','$_POST[nombrecont]',
   '$_POST[numfactura]','$_POST[formapago]')");

	
	echo "Datos insertados con exito";
	
}else{
    echo "problemas a insertar datos ";
}

?>