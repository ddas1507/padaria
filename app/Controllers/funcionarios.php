<?php
	require_once 'app/models/funcionarios.php';
	require_once 'app/models/cargos.php';

		$funcionarios = new Funcionarios();
		$cargos = new Cargos();
			// echo "<br><b>Function</b>: ". 
			$function = $_REQUEST['function'];

	if($function == 'excluirFuncionario'){
		$funcionarios->excluirFuncionario();
		$funcionarios->exibirFuncionarios();
		require('app/views/funcionarios/exibirFuncionarios.php');
	}
	
	if($function == 'alterarFuncionario'){
		$funcionarios->alterarFuncionario();
		$funcionarios->alterarCargo();
		require('app/views/funcionarios/formAlterarFuncionario.php');
	}

	if($function == 'alteracaoFuncionario'){
		$funcionarios->alteracaoFuncionario();
		$funcionarios->exibirFuncionarios();
		require('app/views/funcionarios/exibirFuncionarios.php');
	}

	if($function == 'salvarFuncionario'){
		$funcionarios->salvarFuncionario();
		$funcionarios->exibirFuncionarios();
		require('app/views/funcionarios/exibirFuncionarios.php');
	}

	if($function == 'formNovoFuncionario'){
		$cargos->exibirCargos();
		require('app/views/funcionarios/formNovoFuncionario.php');
	}

	if($function == 'exibirFuncionarios'){
		$funcionarios->exibirFuncionarios();
		require('app/views/funcionarios/exibirFuncionarios.php');
	}

?>