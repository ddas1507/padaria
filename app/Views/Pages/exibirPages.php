<?php require('app/Views/Pages/styles.php'); ?>
<div class="col-md-12">
<div class="col-md-10"><h3>Pages</h3></div>
<div class="col-md-2">
	<form method="POST" action="index.php">
		<div class="form-group">
			<button class="btn btn-primary" autofocus type="submit"><i class="glyphicon glyphicon-plus"></i> Inserir Novo</button>
			<input type="hidden" value="formNewPages" name="view"/>
			<input type="hidden" value="formNewPages" name="function"/>
		</div>
	</form>
</div>
</div>


<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>NOME</th>
			<th>URL</th>
			<th>ROUTE</th>
			<th colspan="2">
				ACTION
			</th>
		</tr>
	</thead>
	<tbody>
<?php while($pages->registros = $pages->consulta->FetchNextObject()):
		$page_id = $pages->registros->PAGE_ID;
		$page_name = $pages->registros->PAGE_NAME;
		$page_url = $pages->registros->PAGE_URL;
		$page_route = $pages->registros->PAGE_ROUTE;
?>
		<tr>
			<td><?php echo $page_id;?></td>
			<td><?php echo $page_name;?></td>
			<td><?php echo $page_url;?></td>
			<td><?php echo $page_route;?></td>
			<td>
				<a href="index.php?view=alterarPages&function=alterarPages&page_id=<?php echo $page_id;?>"><i class="glyphicon glyphicon-pencil"></i> Alterar
				</a>
			</td>
			<td>
				<a href="index.php?view=excluirPages&function=excluirPages&page_id=<?php echo $page_id;?>"><i class="glyphicon glyphicon-remove"></i> Excluir
				</a>
			</td>
		</tr>
<?php endwhile;?>
	</tbody>
</table>