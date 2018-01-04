<?php require('app/Views/Pages/styles.php'); ?>
<?php require('app/Views/Pages/scripts.php'); ?>
  <h3>Nova Página</h3>
  <p>Preencha os campos abaixo para criar uma nova página.</p>

    <form action="index.php" method="POST">
      
      <fieldset>  
        <div class="form-group">
          <div class="col-md-12">
            <label class="control-label" for="nome">Nome</label>
            <input name="page_name" class="form-control" placeholder="Nome da Página" type="text">
          </div>
          <div class="col-md-12">
            <label class="control-label" for="url">URL</label>
            <input name="page_url" class="form-control" placeholder="Url da Página" type="text">
          </div>

          <div class="col-md-12">
            <label class="control-label" for="url">ROUTE</label>
            <input name="page_route" class="form-control" placeholder="Rota da Página" type="text">
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-12">
    			<button type="submit" class="btn btn-primary btn-lg btn-block info">Salvar Página</button>
    			<input type="hidden" value="salvarPages" name="view"/>
    			<input type="hidden" value="salvarPages" name="function"/>
          </div>
        </div>     
      </fieldset> 
    </form>