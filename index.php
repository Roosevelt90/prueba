<?php 
	require_once('connection.php');
	/* $_SESSION['hola'] = "Prueba";
var_dump($_SESSION);
exit; */
	if(isset($_SESSION['login']) && $_SESSION['login'] == true){
		if (isset($_GET['controller'])&&isset($_GET['action'])) {		
			$controller=$_GET['controller'];
			$action=$_GET['action'];
		}else{
			$controller='alumno';
			$action='index';
		}
		require_once('Views/Layouts/layout.php');	
	}else{

	}