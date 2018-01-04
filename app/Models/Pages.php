<?php 

class Pages
{
	public $consulta;
	public $registros;
	public $conexao;

	public function Pages(){
		$this->conexao = new Conexao();
	}

	public function exibirPages(){
		$sql = "SELECT * FROM system_pages ORDER BY PAGE_ID ASC";
		$this->consulta = $this->conexao->banco->Execute($sql);
	}

	public function alterarPages(){
		$sql = "SELECT * FROM system_pages WHERE PAGE_ID =".$_REQUEST['page_id'];
		$this->consulta = $this->conexao->banco->Execute($sql);
		$this->registros = $this->consulta->FetchNextObject();
	}

	public function salvarPages(){
		$sql = "INSERT INTO system_pages
		(
			PAGE_NAME,
			PAGE_URL,
			PAGE_ROUTE
		)
		VALUES 	
		(
		'".$_REQUEST['page_name']."',
		'".$_REQUEST['page_url']."',
		'".$_REQUEST['page_route']."'
		)";

		if($this->consulta = $this->conexao->banco->Execute($sql)){
			// alerta("Page cadastrada com sucesso!");
				return true;
		}
		else{
			alerta("Ocorreu um erro ao tentar cadastrar a page!");
				return false;
		}
	}

	public function alteracaoPages(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i:s', strtotime("-2 hours"));	
		$data_hora = "$dt - $hr";

		$sql = "UPDATE system_pages SET 
		PAGE_NAME = '".$_POST['page_name']."',
		PAGE_URL = '".$_POST['page_url']."',
		PAGE_ROUTE = '".$_POST['page_route']."'
		WHERE PAGE_ID = ".$_POST['page_id'];
		if($this->consulta = $this->conexao->banco->Execute($sql)){
			//alerta("Cargo alterado com sucesso!");
				return true;
		}
		else{
			alerta("Erro ao tentar realizar a alteração do cargo!");
				return false;
		}

	}

		public function excluirPages(){
			$sql = "DELETE FROM system_pages WHERE PAGE_ID =".$_REQUEST['page_id'];
				if($this->consulta = $this->conexao->banco->Execute($sql)){
					// alerta("Page excluida com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar excluir a page!");
						return false;
				}
		}	

}

?>