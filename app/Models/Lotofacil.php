<?php
	class Lotofacil{
		public $resultado;
		public $registros;

		public function Lotofacil(){
			$this->con = new conexao();
		}
		
		public function lotofacilNumerosApostados(){
			$sql = "SELECT * FROM lotofacil_numeros_apostados ORDER BY LFNA_CODIGO ASC";
			$this->resultado = $this->con->banco->Execute($sql);
		}

		public function lotofacilNumerosSorteadosSimulacao(){
			$sql = "SELECT * FROM lotofacil_numeros_sorteados ORDER BY LFNS_CODIGO DESC LIMIT 1"
			;
			$this->resultado = $this->con->banco->Execute($sql);
		}

		public function lotofacilNumerosSorteados(){
		  $conn = mysql_connect("localhost", "root", "");
		  $ok = mysql_select_db("loteria", $conn);
		  $sqlConfig = mysql_query("SELECT * FROM lotofacil_config_concursos");
		  while ($linhas = mysql_fetch_array($sqlConfig)) :
		    $quantidade = $linhas['CONFIG_QTDE'];
		  endwhile;

			$sql = "SELECT * FROM lotofacil_numeros_sorteados ORDER BY LFNS_CODIGO DESC LIMIT ". $quantidade
			;
			$this->resultado = $this->con->banco->Execute($sql);
		}

		public function lotofacilTotalSorteios(){
			$sql = "SELECT COUNT(*) FROM lotofacil_numeros_sorteados";
				$this->resultado = $this->con->banco->Execute($sql);
		}

		public function lotofacilNumerosRepetidos(){
			// $sql = "SELECT * FROM lotofacil_numeros_sorteados ORDER BY LFNS_CODIGO ASC";
			$sql = "SELECT COUNT(*) FROM lotofacil_numeros_sorteados";
				$this->resultado = $this->con->banco->Execute($sql);
		}

		public function ConfigQtdeSorteadas(){
			$sql = "SELECT * FROM lotofacil_simulador_sorteadas WHERE CODIGO_SIMULADOR =". $_REQUEST['codigo_simulador'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		public function ConfigQtdeConcurso(){
			$sql = "SELECT * FROM lotofacil_config_concursos WHERE CONFIG_CODIGO =". $_REQUEST['config_codigo'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		public function lotofacilAlterarAposta(){
			$sql = "SELECT * FROM lotofacil_numeros_apostados WHERE LFNA_CODIGO =".$_REQUEST['lfna_codigo'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}
		
		public function lotofacilAlterarSorteio(){
			$sql = "SELECT * FROM lotofacil_numeros_sorteados WHERE LFNS_CODIGO =".$_REQUEST['lfns_codigo'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		public function lotofacilGravarAltAposta(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i:s', strtotime("-3 hours"));	
		$data_hora = "$dt - $hr";

			$sql = "UPDATE lotofacil_numeros_apostados set 
			LFNA_B1 = '".$_POST['lfna_b1']."',
			LFNA_B2 = '".$_POST['lfna_b2']."',
			LFNA_B3 = '".$_POST['lfna_b3']."',
			LFNA_B4 = '".$_POST['lfna_b4']."',
			LFNA_B5 = '".$_POST['lfna_b5']."',
			LFNA_B6 = '".$_POST['lfna_b6']."',
			LFNA_B7 = '".$_POST['lfna_b7']."',
			LFNA_B8 = '".$_POST['lfna_b8']."',
			LFNA_B9 = '".$_POST['lfna_b9']."',
			LFNA_B10 = '".$_POST['lfna_b10']."',
			LFNA_B11 = '".$_POST['lfna_b11']."',
			LFNA_B12 = '".$_POST['lfna_b12']."',
			LFNA_B13 = '".$_POST['lfna_b13']."',
			LFNA_B14 = '".$_POST['lfna_b14']."',
			LFNA_B15 = '".$_POST['lfna_b15']."'
			WHERE LFNA_CODIGO = ".$_POST['lfna_codigo'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				//alerta("Jogo alterado com sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar registrar a alteração da aposta!");
					return false;
			}
		}

		public function SalvarConfigQtdeSorteadas(){
			$sql = "UPDATE lotofacil_simulador_sorteadas set 
			CONFIG_TTS = '".$_POST['config_tts']."',
			CONFIG_TTA = '".$_POST['config_tta']."'
			WHERE CODIGO_SIMULADOR = ".$_POST['codigo_simulador'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				// alerta("configuração do concurso alterada com sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar alterar a configuração do concurso!");
					return false;
			}
		}

		public function SalvarConfigQtdeConcurso(){
			$sql = "UPDATE lotofacil_config_concursos set 
			CONFIG_QTDE = '".$_POST['config_qtde']."'
			WHERE CONFIG_CODIGO = ".$_POST['config_codigo'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				// alerta("configuração do concurso alterada com sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar alterar a configuração do concurso!");
					return false;
			}
		}

		public function lotofacilGravarAltSorteio(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i:s', strtotime("-3 hours"));	
		$data_hora = "$dt - $hr";

			$sql = "UPDATE lotofacil_numeros_sorteados set 
			LFNS_B1 = '".$_POST['lfns_b1']."',
			LFNS_B2 = '".$_POST['lfns_b2']."',
			LFNS_B3 = '".$_POST['lfns_b3']."',
			LFNS_B4 = '".$_POST['lfns_b4']."',
			LFNS_B5 = '".$_POST['lfns_b5']."',
			LFNS_B6 = '".$_POST['lfns_b6']."',
			LFNS_B7 = '".$_POST['lfns_b7']."',
			LFNS_B8 = '".$_POST['lfns_b8']."',
			LFNS_B9 = '".$_POST['lfns_b9']."',
			LFNS_B10 = '".$_POST['lfns_b10']."',
			LFNS_B11 = '".$_POST['lfns_b11']."',
			LFNS_B12 = '".$_POST['lfns_b12']."',
			LFNS_B13 = '".$_POST['lfns_b13']."',
			LFNS_B14 = '".$_POST['lfns_b14']."',
			LFNS_B15 = '".$_POST['lfns_b15']."'
			WHERE LFNS_CODIGO = ".$_POST['lfns_codigo'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				//alerta("Jogo alterado com sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar alterar a seu jogo!");
					return false;
			}
		}


		public function lotofacilGravarAltSorteioCp(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i:s', strtotime("-3 hours"));	
		$data_hora = "$dt - $hr";

			$sql = "UPDATE lotofacil_numeros_sorteados_cp set 
			LFNSCP_B1 = '".$_POST['lfns_b1']."',
			LFNSCP_B2 = '".$_POST['lfns_b2']."',
			LFNSCP_B3 = '".$_POST['lfns_b3']."',
			LFNSCP_B4 = '".$_POST['lfns_b4']."',
			LFNSCP_B5 = '".$_POST['lfns_b5']."',
			LFNSCP_B6 = '".$_POST['lfns_b6']."',
			LFNSCP_B7 = '".$_POST['lfns_b7']."',
			LFNSCP_B8 = '".$_POST['lfns_b8']."',
			LFNSCP_B9 = '".$_POST['lfns_b9']."',
			LFNSCP_B10 = '".$_POST['lfns_b10']."',
			LFNSCP_B11 = '".$_POST['lfns_b11']."',
			LFNSCP_B12 = '".$_POST['lfns_b12']."',
			LFNSCP_B13 = '".$_POST['lfns_b13']."',
			LFNSCP_B14 = '".$_POST['lfns_b14']."',
			LFNSCP_B15 = '".$_POST['lfns_b15']."'
			WHERE LFNSCP_CODIGO = ".$_POST['lfns_codigo'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				//alerta("Jogo alterado com sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar alterar a seu jogo!");
					return false;
			}
		}

		public function lotofacilGravarAposta(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";

			$sql = "insert into lotofacil_numeros_apostados
			(
				LFNA_B1,
				LFNA_B2,
				LFNA_B3,
				LFNA_B4,
				LFNA_B5,
				LFNA_B6,
				LFNA_B7,
				LFNA_B8,
				LFNA_B9,
				LFNA_B10,
				LFNA_B11,
				LFNA_B12,
				LFNA_B13,
				LFNA_B14,
				LFNA_B15
			)	
			values 	
			(
			'".$_REQUEST['lfna_b1']."',
			'".$_REQUEST['lfna_b2']."',
			'".$_REQUEST['lfna_b3']."',
			'".$_REQUEST['lfna_b4']."',
			'".$_REQUEST['lfna_b5']."',
			'".$_REQUEST['lfna_b6']."',
			'".$_REQUEST['lfna_b7']."',
			'".$_REQUEST['lfna_b8']."',
			'".$_REQUEST['lfna_b9']."',
			'".$_REQUEST['lfna_b10']."',
			'".$_REQUEST['lfna_b11']."',
			'".$_REQUEST['lfna_b12']."',
			'".$_REQUEST['lfna_b13']."',
			'".$_REQUEST['lfna_b14']."',
			'".$_REQUEST['lfna_b15']."'
			)";

				if($this->resultado = $this->con->banco->Execute($sql)){
					// alerta("Aposta cadastrada com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar cadastrar a aposta!");
						return false;
				}
		}


		public function lotofacilGravarSimulacao(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";

			$sql = "insert into lotofacil_numeros_apostados
			(
				LFNA_B1,
				LFNA_B2,
				LFNA_B3,
				LFNA_B4,
				LFNA_B5,
				LFNA_B6,
				LFNA_B7,
				LFNA_B8,
				LFNA_B9,
				LFNA_B10,
				LFNA_B11,
				LFNA_B12,
				LFNA_B13,
				LFNA_B14,
				LFNA_B15
			)	
			values 	
			(
			'".$_REQUEST['lfna_b1']."',
			'".$_REQUEST['lfna_b2']."',
			'".$_REQUEST['lfna_b3']."',
			'".$_REQUEST['lfna_b4']."',
			'".$_REQUEST['lfna_b5']."',
			'".$_REQUEST['lfna_b6']."',
			'".$_REQUEST['lfna_b7']."',
			'".$_REQUEST['lfna_b8']."',
			'".$_REQUEST['lfna_b9']."',
			'".$_REQUEST['lfna_b10']."',
			'".$_REQUEST['lfna_b11']."',
			'".$_REQUEST['lfna_b12']."',
			'".$_REQUEST['lfna_b13']."',
			'".$_REQUEST['lfna_b14']."',
			'".$_REQUEST['lfna_b15']."'
			)";

				if($this->resultado = $this->con->banco->Execute($sql)){
					// alerta("Simulação cadastrada com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar cadastrar a simulação!");
						return false;
				}
		}

		public function lotofacilGravarSorteio(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";

			$sql = "insert into lotofacil_numeros_sorteados
			(
				LFNS_B1,
				LFNS_B2,
				LFNS_B3,
				LFNS_B4,
				LFNS_B5,
				LFNS_B6,
				LFNS_B7,
				LFNS_B8,
				LFNS_B9,
				LFNS_B10,
				LFNS_B11,
				LFNS_B12,
				LFNS_B13,
				LFNS_B14,
				LFNS_B15
			)	
			values 	
			(
			'".$_REQUEST['lfns_b1']."',
			'".$_REQUEST['lfns_b2']."',
			'".$_REQUEST['lfns_b3']."',
			'".$_REQUEST['lfns_b4']."',
			'".$_REQUEST['lfns_b5']."',
			'".$_REQUEST['lfns_b6']."',
			'".$_REQUEST['lfns_b7']."',
			'".$_REQUEST['lfns_b8']."',
			'".$_REQUEST['lfns_b9']."',
			'".$_REQUEST['lfns_b10']."',
			'".$_REQUEST['lfns_b11']."',
			'".$_REQUEST['lfns_b12']."',
			'".$_REQUEST['lfns_b13']."',
			'".$_REQUEST['lfns_b14']."',
			'".$_REQUEST['lfns_b15']."'
			)";

				if($this->resultado = $this->con->banco->Execute($sql)){
					// alerta("Jogo cadastrado com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar cadastrar o jogo!");
						return false;
				}
		}

		public function lotofacilGravarSorteioCopia(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";

			$sql = "insert into lotofacil_numeros_sorteados_cp
			(
				LFNSCP_B1,
				LFNSCP_B2,
				LFNSCP_B3,
				LFNSCP_B4,
				LFNSCP_B5,
				LFNSCP_B6,
				LFNSCP_B7,
				LFNSCP_B8,
				LFNSCP_B9,
				LFNSCP_B10,
				LFNSCP_B11,
				LFNSCP_B12,
				LFNSCP_B13,
				LFNSCP_B14,
				LFNSCP_B15
			)	
			values 	
			(
			'".$_REQUEST['lfns_b1']."',
			'".$_REQUEST['lfns_b2']."',
			'".$_REQUEST['lfns_b3']."',
			'".$_REQUEST['lfns_b4']."',
			'".$_REQUEST['lfns_b5']."',
			'".$_REQUEST['lfns_b6']."',
			'".$_REQUEST['lfns_b7']."',
			'".$_REQUEST['lfns_b8']."',
			'".$_REQUEST['lfns_b9']."',
			'".$_REQUEST['lfns_b10']."',
			'".$_REQUEST['lfns_b11']."',
			'".$_REQUEST['lfns_b12']."',
			'".$_REQUEST['lfns_b13']."',
			'".$_REQUEST['lfns_b14']."',
			'".$_REQUEST['lfns_b15']."'
			)";

				if($this->resultado = $this->con->banco->Execute($sql)){
					// alerta("Copia do Jogo cadastrada com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar cadastrar a cópia do jogo!");
						return false;
				}
		}

		public function lotofacilExcluirAposta(){
			$sql = "delete FROM lotofacil_numeros_apostados WHERE LFNA_CODIGO =".$_REQUEST['lfna_codigo'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					//alerta("Jogo excluida com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar excluir o jogo!");
						return false;
				}
		}
		
		public function lotofacilExcluirSorteio(){
			$sql = "delete FROM lotofacil_numeros_sorteados WHERE LFNS_CODIGO =".$_REQUEST['lfns_codigo'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					//alerta("Jogo excluida com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar excluir o jogo!");
						return false;
				}
		}

	}
?>