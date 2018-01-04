<?php 
	// require_once 'app/models/Pages.php';

		// $cargos = new Pages();

	// echo "<br><b>Function</b>: ". 
	$function = $_REQUEST['function'];

	if($function == 'exibirConfig'){
		require('app/Views/Config/exibirConfig.php');
	}




?>