<?php require('app/views/funcionarios/styles.php'); ?>
  <h3>Novo Funcionário</h3>
  <p>Preencha os campos abaixo para criar um novo perfil de funcionário.</p>

    <form method="POST" name="form-novo-funcionario" action="index.php">
      
      <fieldset>
      
      <div class="form-group">
        <div class="col-md-6">
          <label class="control-label" for="cargo">Cargo</label>
          <select name="func_cargo" class="form-control">
            <option value="###">Selecione um cargo</option>
            <?php while($cargos->registros = $cargos->consulta->FetchNextObject()):
              $cargo_nome = $cargos->registros->CARGO_NOME;
            ?>
            <option value="<?php echo $cargo_nome;?>"><?php echo $cargo_nome;?></option>
          <?php endwhile;?>
          </select>
	      </div>
      </div>

        <div class="form-group">
         <div class="col-md-6">
            <label class="control-label" for="nome">Nome</label>
            <input name="func_nome" class="form-control" placeholder="Nome do Funcionário" type="text">
		 </div>
    	</div>

        <div class="form-group">
         <div class="col-md-3">
            <label class="control-label" for="salario">Salário</label>
            <input name="func_salario" class="form-control" placeholder="" type="text">
		 </div>
    	</div>

        <div class="form-group">
         <div class="col-md-3">
            <label class="control-label" for="cesta">Cesta</label>
            <input name="func_cesta" class="form-control" placeholder="" type="text">
		 </div>
    	</div>

        <div class="form-group">
         <div class="col-md-3">
            <label class="control-label" for="ajuda">Ajuda</label>
            <input name="func_ajuda" class="form-control" placeholder="" type="text">
		 </div>
    	</div>

        <div class="form-group">
         <div class="col-md-3">
            <label class="control-label" for="bonus">Bônus</label>
            <input name="func_bonus" class="form-control" placeholder="" type="text">
		 </div>
    	</div>

          <div class="form-group">
            <div class="col-md-12">
			<button type="submit" class="btn btn-primary btn-lg btn-block info">Salvar Funcionário</button>
			<input type="hidden" value="salvarFuncionario" name="view"/>
			<input type="hidden" value="salvarFuncionario" name="function"/>
            </div>
          </div>     
      </fieldset> 
    </form>