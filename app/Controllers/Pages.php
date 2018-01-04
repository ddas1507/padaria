<?php require_once 'app/models/Pages.php';

	$pages = new Pages();
	echo "<br><b>Controller</b>: ". 
	$function = $_REQUEST['function'];

	if($function == 'excluirPages'){
		$pages->excluirPages();
		$pages->exibirPages();
		require('app/Views/Pages/exibirPages.php');
	}
	
	if($function == 'alterarPages'){
		$pages->alterarPages();
		require('app/Views/Pages/formAlterarPages.php');
	}

	if($function == 'alteracaoPages'){
		$pages->alteracaoPages();
		$pages->exibirPages();
		require('app/Views/Pages/exibirPages.php');
	}

	if($function == 'salvarPages'){
		$pages->salvarPages();
		$pages->exibirPages();
		require('app/Views/Pages/exibirPages.php');
	}

	if($function == 'formNewPages'){
		require('app/Views/Pages/formNewPage.php');
	}

	if($function == 'exibirPages'){
		$pages->exibirPages();
		require('app/Views/Pages/exibirPages.php');
	}

?>