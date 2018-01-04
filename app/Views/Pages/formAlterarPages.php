<?php require('app/Views/Pages/styles.php'); ?>
  <h3>Alterar Cargo</h3>
  <p>Modifique os campos abaixo para realizar uma alteração no cargo.</p>

    <form method="POST" name="form-novo-cargo" action="index.php">
      
      <fieldset>
      
      <div class="form-group">
        <div class="col-md-12">
            <label class="control-label" for="nome">Nome</label>
            <input name="page_name" class="form-control" placeholder="Nome da Página" value="<?php echo $pages->registros->PAGE_NAME;?>" type="text">
        </div>
      </div>
      
      <div class="form-group">
        <div class="col-md-12">
            <label class="control-label" for="url">URL</label>
            <input name="page_url" class="form-control" placeholder="Url da Página" value="<?php echo $pages->registros->PAGE_URL;?>" type="text">
        </div>
      </div>      
      
      <div class="form-group">
        <div class="col-md-12">
            <label class="control-label" for="url">ROUTE</label>
            <input name="page_route" class="form-control" placeholder="Rota da Página" value="<?php echo $pages->registros->PAGE_ROUTE;?>" type="text">
        </div>
      </div>
      
          <div class="form-group">
            <div class="col-md-12">
			<button type="submit" class="btn btn-primary btn-lg btn-block info">Salvar Alteração</button>
			<input type="hidden" value="alteracaoPages" name="view"/>
      <input type="hidden" value="alteracaoPages" name="function"/>
			<input type="hidden" value="<?php echo $pages->registros->PAGE_ID;?>" name="page_id"/>
            </div>
          </div>     
      </fieldset> 
    </form>