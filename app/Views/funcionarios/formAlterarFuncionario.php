<?php require('app/views/funcionarios/styles.php'); ?>
  <h3>Alterar Funcionário</h3>
  <p>Modifique os campos abaixo para realizar uma alteração no perfil do funcionário.</p>

    <form method="POST" name="form-novo-funcionario" action="index.php">
      
      <fieldset>
      
        <div class="form-group">
         <div class="col-md-6">
          <label class="control-label" for="cargo">Cargo</label>
          <select name="func_cargo" class="form-control">
            <?php
              $var = '';
              switch($funcionarios->registros->FUNC_CARGO):
                case 'GERENTE': $var = 'selected';break;
              endswitch;
            ?>
            <option value="GERENTE" <?php echo $var;?>>GERENTE</option>
          </select>
		 </div>
    	</div>

        <div class="form-group">
         <div class="col-md-6">
            <label class="control-label" for="nome">Nome</label>
            <input name="func_nome" class="form-control" placeholder="Nome do Funcionário" value="<?php echo $funcionarios->registros->FUNC_NOME;?>" type="text">
		 </div>
    	</div>

        <div class="form-group">
         <div class="col-md-3">
            <label class="control-label" for="salario">Salário</label>
            <input name="func_salario" class="form-control" placeholder="" value="<?php echo $funcionarios->registros->FUNC_SALARIO;?>" type="text">
		 </div>
    	</div>

        <div class="form-group">
         <div class="col-md-3">
            <label class="control-label" for="cesta">Cesta</label>
            <input name="func_cesta" class="form-control" placeholder="" value="<?php echo $funcionarios->registros->FUNC_CESTA;?>" type="text">
		 </div>
    	</div>

        <div class="form-group">
         <div class="col-md-3">
            <label class="control-label" for="ajuda">Ajuda</label>
            <input name="func_ajuda" class="form-control" placeholder="" value="<?php echo $funcionarios->registros->FUNC_AJUDA;?>" type="text">
		 </div>
    	</div>

        <div class="form-group">
         <div class="col-md-3">
            <label class="control-label" for="bonus">Bônus</label>
            <input name="func_bonus" class="form-control" placeholder="" value="<?php echo $funcionarios->registros->FUNC_BONUS;?>" type="text">
		 </div>
    	</div>

          <div class="form-group">
            <div class="col-md-12">
			<button type="submit" class="btn btn-primary btn-lg btn-block info">Salvar Alteração</button>
			<input type="hidden" value="alteracaoFuncionario" name="view"/>
      <input type="hidden" value="alteracaoFuncionario" name="function"/>
			<input type="hidden" value="<?php echo $funcionarios->registros->FUNC_ID;?>" name="func_id"/>
            </div>
          </div>     
      </fieldset> 
    </form>