<hr><?php
$conn = mysql_connect("localhost", "root", "");
$ok = mysql_select_db("loteria", $conn);

$sqlA = mysql_query("
	SELECT 
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
	FROM lotofacil_numeros_sorteados 
	ORDER BY LFNS_CODIGO DESC LIMIT 1
");

$bolas = mysql_fetch_array($sqlA);
$todas = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25);
$diff = array_diff($todas, $bolas);
?>

<table class="table">
	<thead>	
		<tr>
			<th align="center" colspan="15">Bolas Sorteadas</th>
		</tr>
	</thead>
	<tbody>
		<?php
		while($oquefazer->registros = $oquefazer->resultado->FetchNextObject()):
			$lfns_codigo	= $oquefazer->registros->LFNS_CODIGO;
			$lfns_b1	= $oquefazer->registros->LFNS_B1;
			$lfns_b2	= $oquefazer->registros->LFNS_B2;
			$lfns_b3	= $oquefazer->registros->LFNS_B3;
			$lfns_b4	= $oquefazer->registros->LFNS_B4;
			$lfns_b5	= $oquefazer->registros->LFNS_B5;
			$lfns_b6	= $oquefazer->registros->LFNS_B6;
			$lfns_b7	= $oquefazer->registros->LFNS_B7;
			$lfns_b8	= $oquefazer->registros->LFNS_B8;
			$lfns_b9	= $oquefazer->registros->LFNS_B9;
			$lfns_b10	= $oquefazer->registros->LFNS_B10;
			$lfns_b11	= $oquefazer->registros->LFNS_B11;
			$lfns_b12	= $oquefazer->registros->LFNS_B12;
			$lfns_b13	= $oquefazer->registros->LFNS_B13;
			$lfns_b14	= $oquefazer->registros->LFNS_B14;
			$lfns_b15	= $oquefazer->registros->LFNS_B15;
		?>
			<tr>
				<td><input class="form-control" type="text" value="<?php echo $lfns_b1;?>" disabled></td>
				<td><input class="form-control" type="text" value="<?php echo $lfns_b2;?>" disabled></td>
				<td><input class="form-control" type="text" value="<?php echo $lfns_b3;?>" disabled></td>
				<td><input class="form-control" type="text" value="<?php echo $lfns_b4;?>" disabled></td>
				<td><input class="form-control" type="text" value="<?php echo $lfns_b5;?>" disabled></td>
				<td><input class="form-control" type="text" value="<?php echo $lfns_b6;?>" disabled></td>
				<td><input class="form-control" type="text" value="<?php echo $lfns_b7;?>" disabled></td>
				<td><input class="form-control" type="text" value="<?php echo $lfns_b8;?>" disabled></td>
				<td><input class="form-control" type="text" value="<?php echo $lfns_b9;?>" disabled></td>
				<td><input class="form-control" type="text" value="<?php echo $lfns_b10;?>" disabled></td>
				<td><input class="form-control" type="text" value="<?php echo $lfns_b11;?>" disabled></td>
				<td><input class="form-control" type="text" value="<?php echo $lfns_b12;?>" disabled></td>
				<td><input class="form-control" type="text" value="<?php echo $lfns_b13;?>" disabled></td>
				<td><input class="form-control" type="text" value="<?php echo $lfns_b14;?>" disabled></td>
				<td><input class="form-control" type="text" value="<?php echo $lfns_b15;?>" disabled></td>
			</tr>
		<?php endwhile; ?>
	</tbody>
</table>

<table class="table">
	<thead>	
		<tr><th align="center" colspan="15">Bolas Ausentes</th></tr>
	</thead>
	<tbody>
	<tr>
<?php foreach ($diff as $value) :?>
	<td><input class="form-control" type="text" value="<?php echo $value;?>" disabled></td>
<?php endforeach; ?>
	</tr>
	</tbody>
</table>

<?php 
	$sql = mysql_query("
	SELECT * FROM lotofacil_numeros_sorteados 
	ORDER BY LFNS_CODIGO DESC LIMIT 1
	");

	while ($linhas = mysql_fetch_array($sql)) :
		$sorteadas = array(
		$linhas['LFNS_B1'],
		$linhas['LFNS_B2'],
		$linhas['LFNS_B3'],
		$linhas['LFNS_B4'],
		$linhas['LFNS_B5'],
		$linhas['LFNS_B6'],
		$linhas['LFNS_B7'],
		$linhas['LFNS_B8'],
		$linhas['LFNS_B9'],
		$linhas['LFNS_B10'],
		$linhas['LFNS_B11'],
		$linhas['LFNS_B12'],
		$linhas['LFNS_B13'],
		$linhas['LFNS_B14'],
		$linhas['LFNS_B15']
		);
	endwhile;
	shuffle($sorteadas);
	shuffle($sorteadas);

	$ausentes = array_diff($todas, $sorteadas);
	shuffle($ausentes);
	shuffle($ausentes);

    $sql_s = mysql_query("select * FROM lotofacil_simulador_sorteadas");
    while ($linhas = mysql_fetch_array($sql_s)) :
    $ttS = $linhas['CONFIG_TTS'];
    $ttA = $linhas['CONFIG_TTA'];
    endwhile;

	for($i = 1 ; $i <= $ttS ; $i++) {$geradorS[] = array_shift($sorteadas);}
	for($i = 1 ; $i <= $ttA ; $i++) {$geradorA[] = array_shift($ausentes);}
	asort($geradorS);
	asort($geradorA);

	if ($geradorS): $i = 1; //echo "9 Sorteadas: ";
		foreach($geradorS as $bolasS):
			$i++; //echo $bolasS. ", ";
		endforeach; 
	else :
		echo "array sem numeros";
	endif;

	if ($geradorA): $i = 1; //echo "<br>4 Ausentes: ";
		foreach($geradorA as $bolasA):
			$i++; //echo $bolasA. ", ";
		endforeach; 
	else :
		echo "array sem numeros";
	endif;// $i=1; 

	$array_1 = $geradorS;
	$array_2 = $geradorA;
	$array_3 = array_merge($array_1, $array_2);//mescla os valores dos arrays
	asort($array_3);//organiza os numeros dentro do array
	?>

<form name="lotofacilGravarSimulacao" action="index.php" method="post">
	<div class="form-group">
		<table class="table">
		</<thead>
			<th colspan="16">Gerador de Resultados</th>
		</thead>
		<tbody>
			<tr>
			<?php 

			if ($array_3) :?>

			<?php $i = 1; foreach($array_3 as $simulador):?>
			<td>
				<input type="text" class="form-control" size="1" 
				name="lfna_b<?php echo $i++;?>" maxlength="2" value="<?php echo $simulador; ?>" readonly />
			</td>
			<?php endforeach; 
			else :
				echo "array sem numeros";
			endif;

			// $i=1; 
			?>
			<td>
			<input class="btn btn-success" type="submit" value="Registrar Simulação" name="Registrar Simulação" autofocus />
			<input type="hidden" value="lotofacilGravarSimulacao" name="view"/>
			<input type="hidden" value="lotofacilGravarSimulacao" name="function"/>
			</td>
		</tr>
		</tbody>
		</table>
	</div>
</form>
	


