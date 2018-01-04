<?php 

class Funcionarios
{
	public $consulta;
	public $registros;
	public $conexao;

	public function Funcionarios(){
		$this->conexao = new Conexao();
	}

	public function exibirFuncionarios(){
		$sql = "SELECT * FROM padaria_funcionarios ORDER BY FUNC_ID ASC";
		$this->consulta = $this->conexao->banco->Execute($sql);
	}

	public function alterarFuncionario(){
		$sql = "SELECT * FROM padaria_funcionarios WHERE FUNC_ID =".$_REQUEST['func_id'];
		$this->consulta = $this->conexao->banco->Execute($sql);
		$this->registros = $this->consulta->FetchNextObject();
	}

	public function alterarCargo(){

	}

	public function salvarFuncionario(){
		$sql = "INSERT INTO padaria_funcionarios
		(
			FUNC_CARGO,
			FUNC_NOME,
			FUNC_SALARIO,
			FUNC_CESTA,
			FUNC_AJUDA,
			FUNC_BONUS
		)	
		VALUES 	
		(
		'".$_REQUEST['func_cargo']."',
		'".$_REQUEST['func_nome']."',
		'".$_REQUEST['func_salario']."',
		'".$_REQUEST['func_cesta']."',
		'".$_REQUEST['func_ajuda']."',
		'".$_REQUEST['func_bonus']."'
		)";

		if($this->consulta = $this->conexao->banco->Execute($sql)){
			// alerta("Funcionário cadastrada com sucesso!");
				return true;
		}
		else{
			alerta("Ocorreu um erro ao tentar cadastrar o funcionário!");
				return false;
		}
	}

	public function alteracaoFuncionario(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i:s', strtotime("-2 hours"));	
		$data_hora = "$dt - $hr";

		$sql = "UPDATE padaria_funcionarios SET 
		FUNC_CARGO = '".$_POST['func_cargo']."',
		FUNC_NOME = '".$_POST['func_nome']."',
		FUNC_SALARIO = '".$_POST['func_salario']."',
		FUNC_CESTA = '".$_POST['func_cesta']."',
		FUNC_AJUDA = '".$_POST['func_ajuda']."',
		FUNC_BONUS = '".$_POST['func_bonus']."'
		WHERE FUNC_ID = ".$_POST['func_id'];
		if($this->consulta = $this->conexao->banco->Execute($sql)){
			//alerta("Funcionário alterado com sucesso!");
				return true;
		}
		else{
			alerta("Erro ao tentar realizar a alteração do funcionário!");
				return false;
		}

	}

		public function excluirFuncionario(){
			$sql = "DELETE FROM padaria_funcionarios WHERE FUNC_ID =".$_REQUEST['func_id'];
				if($this->consulta = $this->conexao->banco->Execute($sql)){
					// alerta("Funcionário excluida com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar excluir o funcionário!");
						return false;
				}
		}	

}

?>