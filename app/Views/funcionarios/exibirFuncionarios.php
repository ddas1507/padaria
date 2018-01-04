<?php require('app/views/funcionarios/styles.php'); ?>
<p><h3>Funcionários</h3><hr></p>

<form method="POST" action="index.php">
<div class="form-group">
	<button class="btn btn-primary" autofocus type="submit"><i class="glyphicon glyphicon-plus"></i> Novo Funcionário</button>
	<input type="hidden" value="formNovoFuncionario" name="view"/>
	<input type="hidden" value="formNovoFuncionario" name="function"/>
</div>
</form>

<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>CARGO</th>
			<th>NOME</th>
			<th>SALÁRIO</th>
			<th>CESTA</th>
			<th>AJUDA</th>
			<th>BONUS</th>
			<th colspan="2"><center>AÇÃO</center></th>
		</tr>
	</thead>
	<tbody>
<?php while($funcionarios->registros = $funcionarios->consulta->FetchNextObject()):
		$func_id = $funcionarios->registros->FUNC_ID;
		$func_cargo = $funcionarios->registros->FUNC_CARGO;
		$func_nome = $funcionarios->registros->FUNC_NOME;
		$func_salario = $funcionarios->registros->FUNC_SALARIO;
		$func_cesta = $funcionarios->registros->FUNC_CESTA;
		$func_ajuda = $funcionarios->registros->FUNC_AJUDA;
		$func_bonus = $funcionarios->registros->FUNC_BONUS;
?>
		<tr>
			<td><?php echo $func_id;?></td>
			<td><?php echo $func_cargo;?></td>
			<td><?php echo $func_nome;?></td>
			<td><?php echo 'R$ '. number_format($func_salario, 2);?></td>
			<td><?php echo 'R$ '. number_format($func_cesta, 2);?></td>
			<td><?php echo 'R$ '. number_format($func_ajuda, 2);?></td>
			<td><?php echo 'R$ '. number_format($func_bonus, 2);?></td>
			<td>
				<a href="index.php?view=alterarFuncionario&function=alterarFuncionario&func_id=<?php echo $func_id;?>"><i class="glyphicon glyphicon-pencil"></i> Alterar
				</a>
			</td>
			<td>
				<a href="index.php?view=excluirFuncionario&function=excluirFuncionario&func_id=<?php echo $func_id;?>"><i class="glyphicon glyphicon-remove"></i> Excluir
				</a>
			</td>
		</tr>
<?php endwhile;?>
	</tbody>
</table>