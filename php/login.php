<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["password"])){
		if($_POST["username"]!=""&&$_POST["password"]!=""){
			include "../conexion.php";
			
			$user_id=null;
			$sql1= "select * from users where username=\"$_POST[username]\" and password=\"$_POST[password]\" ";
			$result=mysqli_query($con,$sql1);
			while ($r=mysqli_fetch_array($result)) {
				$user_id=$r["id"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='../user/login.html';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				print "<script>window.location='../mensajeros.php';</script>";				
			}
		}
	}
}



?>