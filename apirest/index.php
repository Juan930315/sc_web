<?php

//incluir el archivo principal
include("slim/Slim/Slim.php");

//registran la instancia de slim
\Slim\Slim::registerAutoloader();
//aplicacion 
$app = new \Slim\Slim();

//routing 
//accediendo VIA URL
//http:///www.google.com/
//localhost/apirest/index.php/ => "Hola mundo ...."
$app->get(
    '/',function() use ($app){
    	
    	//consultas a la base de datos 
    	// peticiones a otro rest 
    	// etcetera
    	$datos = array(
    					"nombre" => "pepe", 
    					"edad" => "23"
    					);

		//json 
		
        echo json_encode($datos);
    }
)->setParams(array($app));

$app->get(
    '/usuario/:nombre',function($nombre) use ($app){
    	$id = $nombre;
    	//almaceno el ID
    	//conexion con base de datos
    	//el proceso
    	// retorno un JSON
        echo "hola bienvenido " . $nombre;
    }
);

//inicializamos la aplicacion(API)


$app->get(
    '/mensajeros',function() use ($app){

		require "./conexion.php";
		$query = "SELECT * FROM empleados";
        $resultado = mysqli_query($con, $query);

		while($row=mysqli_fetch_assoc($resultado)){
  
		  $userData['empleados'][] = $row;
		  
}

        
		  print_r(json_encode($userData));
    }
);

$app->get(
    '/mensajero/:id',function($id) use ($app){
		require "./conexion.php";
		$query = "SELECT * FROM `empleados` WHERE id = $id";
        $resultado = mysqli_query($con, $query);

		while($row=mysqli_fetch_assoc($resultado)){
			$userData = $row;
		}
    	//almaceno el ID
    	//conexion con base de datos
    	//el proceso
    	// retorno un JSON
		echo json_encode($userData);
		
    }
);


$app->run();

