<hr><h3>Apostas</h3>
<div id="conteinar">
<form method="POST" action="index.php">
	<div class="form-group">
	<input class="btn btn-primary" 	type="submit" value="Nova Aposta" name="Nova aposta" autofocus />
	<input type="hidden" value="formNovaAposta" name="view"/>
	<input type="hidden" value="formNovaAposta" name="function"/>
	</div>
</form>	
	<table class="table">
		<thead>	
			<tr>
				<th colspan="15">Bolas sorteadas</th>
				<th><center>Pontos</center></th>
				<th colspan="2"><center>Opções</center></th>
			</tr>
		</thead>
		<tbody>
			<?php
			while($oquefazer->registros = $oquefazer->resultado->FetchNextObject()){
				$lfna_codigo	= $oquefazer->registros->LFNA_CODIGO;
				$lfna_b1	= $oquefazer->registros->LFNA_B1;
				$lfna_b2	= $oquefazer->registros->LFNA_B2;
				$lfna_b3	= $oquefazer->registros->LFNA_B3;
				$lfna_b4	= $oquefazer->registros->LFNA_B4;
				$lfna_b5	= $oquefazer->registros->LFNA_B5;
				$lfna_b6	= $oquefazer->registros->LFNA_B6;
				$lfna_b7	= $oquefazer->registros->LFNA_B7;
				$lfna_b8	= $oquefazer->registros->LFNA_B8;
				$lfna_b9	= $oquefazer->registros->LFNA_B9;
				$lfna_b10	= $oquefazer->registros->LFNA_B10;
				$lfna_b11	= $oquefazer->registros->LFNA_B11;
				$lfna_b12	= $oquefazer->registros->LFNA_B12;
				$lfna_b13	= $oquefazer->registros->LFNA_B13;
				$lfna_b14	= $oquefazer->registros->LFNA_B14;
				$lfna_b15	= $oquefazer->registros->LFNA_B15;		

				$pontos = 0;				
			?>
				<tr>
					<td>
					<?php
					
						$conn = mysql_connect("localhost", "root", ""); 
						$ok = mysql_SELECT_db("loteria", $conn);
						$query = "SELECT * FROM lotofacil_numeros_sorteados ORDER BY LFNS_CODIGO DESC LIMIT 1";
						$result = mysql_query($query, $conn);
						
						while($sorteio = mysql_fetch_array($result)){
							for($i=1;$i<=15;$i++){
								if($lfna_b1 == $sorteio[$i]):?>
									<input type="text" class="form-control" size="1" value="<?php echo $lfna_b1;?>" readonly/>
								<?php 
								$pontos++;
								else:
								endif;
							}
						}
					?>
					</td>

					<td>
					<?php
						$conn = mysql_connect("localhost", "root", ""); 
						$ok = mysql_SELECT_db("loteria", $conn);
						$query = "SELECT * FROM lotofacil_numeros_sorteados ORDER BY LFNS_CODIGO DESC LIMIT 1";
						$result = mysql_query($query, $conn);
						
						while($sorteio = mysql_fetch_array($result)){
							for($i=1;$i<=15;$i++){
								if($lfna_b2 == $sorteio[$i]):?>
									<input type="text" class="form-control" size="1" value="<?php echo $lfna_b2;?>" readonly/>
									<?php
									$pontos++;
								else:
								endif;
							}
						}
					?>
					</td>

					<td>
					<?php
						$conn = mysql_connect("localhost", "root", ""); 
						$ok = mysql_SELECT_db("loteria", $conn);
						$query = "SELECT * FROM lotofacil_numeros_sorteados ORDER BY LFNS_CODIGO DESC LIMIT 1";
						$result = mysql_query($query, $conn);
						
						while($sorteio = mysql_fetch_array($result)){
							for($i=1;$i<=15;$i++){
								if($lfna_b3 == $sorteio[$i]):?>
									<input type="text" class="form-control" size="1" value="<?php echo $lfna_b3;?>" readonly/>
									<?php
									$pontos++;
								else:
								endif;
							}
						}
					?>
					</td>

					<td>
					<?php
						$conn = mysql_connect("localhost", "root", ""); 
						$ok = mysql_SELECT_db("loteria", $conn);
						$query = "SELECT * FROM lotofacil_numeros_sorteados ORDER BY LFNS_CODIGO DESC LIMIT 1";
						$result = mysql_query($query, $conn);
						
						while($sorteio = mysql_fetch_array($result)){
							for($i=1;$i<=15;$i++){
								if($lfna_b4 == $sorteio[$i]):?>
									<input type="text" class="form-control" size="1" value="<?php echo $lfna_b4;?>" readonly/>
									<?php
									$pontos++;
								else:
								endif;
							}
						}
					?>
					</td>

					<td>
					<?php
						$conn = mysql_connect("localhost", "root", ""); 
						$ok = mysql_SELECT_db("loteria", $conn);
						$query = "SELECT * FROM lotofacil_numeros_sorteados ORDER BY LFNS_CODIGO DESC LIMIT 1";
						$result = mysql_query($query, $conn);
						
						while($sorteio = mysql_fetch_array($result)){
							for($i=1;$i<=15;$i++){
								if($lfna_b5 == $sorteio[$i]):?>
									<input type="text" class="form-control" size="1" value="<?php echo $lfna_b5;?>" readonly/>
									<?php
									$pontos++;
								else:
								endif;
							}
						}
					?>
					</td>

					<td>
					<?php
						$conn = mysql_connect("localhost", "root", ""); 
						$ok = mysql_SELECT_db("loteria", $conn);
						$query = "SELECT * FROM lotofacil_numeros_sorteados ORDER BY LFNS_CODIGO DESC LIMIT 1";
						$result = mysql_query($query, $conn);
						
						while($sorteio = mysql_fetch_array($result)){
							for($i=1;$i<=15;$i++){
								if($lfna_b6 == $sorteio[$i]):?>
									<input type="text" class="form-control" size="1" value="<?php echo $lfna_b6;?>" readonly/>
									<?php
									$pontos++;
								else:
								endif;
							}
						}
					?>
					</td>

					<td>
					<?php
						$conn = mysql_connect("localhost", "root", ""); 
						$ok = mysql_SELECT_db("loteria", $conn);
						$query = "SELECT * FROM lotofacil_numeros_sorteados ORDER BY LFNS_CODIGO DESC LIMIT 1";
						$result = mysql_query($query, $conn);
						
						while($sorteio = mysql_fetch_array($result)){
							for($i=1;$i<=15;$i++){
								if($lfna_b7 == $sorteio[$i]):?>
									<input type="text" class="form-control" size="1" value="<?php echo $lfna_b7;?>" readonly/>
									<?php
									$pontos++;
								else:
								endif;
							}
						}
					?>
					</td>

					<td>
					<?php
						$conn = mysql_connect("localhost", "root", ""); 
						$ok = mysql_SELECT_db("loteria", $conn);
						$query = "SELECT * FROM lotofacil_numeros_sorteados ORDER BY LFNS_CODIGO DESC LIMIT 1";
						$result = mysql_query($query, $conn);
						
						while($sorteio = mysql_fetch_array($result)){
							for($i=1;$i<=15;$i++){
								if($lfna_b8 == $sorteio[$i]):?>
									<input type="text" class="form-control" size="1" value="<?php echo $lfna_b8;?>" readonly/>
									<?php
									$pontos++;
								else:
								endif;
							}
						}
					?>
					</td>

					<td>
					<?php
						$conn = mysql_connect("localhost", "root", ""); 
						$ok = mysql_SELECT_db("loteria", $conn);
						$query = "SELECT * FROM lotofacil_numeros_sorteados ORDER BY LFNS_CODIGO DESC LIMIT 1";
						$result = mysql_query($query, $conn);
						
						while($sorteio = mysql_fetch_array($result)){
							for($i=1;$i<=15;$i++){
								if($lfna_b9 == $sorteio[$i]):?>
									<input type="text" class="form-control" size="1" value="<?php echo $lfna_b9;?>" readonly/>
									<?php
									$pontos++;
								else:
								endif;
							}
						}
					?>
					</td>

					<td>
					<?php
						$conn = mysql_connect("localhost", "root", ""); 
						$ok = mysql_SELECT_db("loteria", $conn);
						$query = "SELECT * FROM lotofacil_numeros_sorteados ORDER BY LFNS_CODIGO DESC LIMIT 1";
						$result = mysql_query($query, $conn);
						
						while($sorteio = mysql_fetch_array($result)){
							for($i=1;$i<=15;$i++){
								if($lfna_b10 == $sorteio[$i]):?>
									<input type="text" class="form-control" size="1" value="<?php echo $lfna_b10;?>" readonly/>
									<?php
									$pontos++;
								else:
								endif;
							}
						}
					?>
					</td>

					<td>
					<?php
						$conn = mysql_connect("localhost", "root", ""); 
						$ok = mysql_SELECT_db("loteria", $conn);
						$query = "SELECT * FROM lotofacil_numeros_sorteados ORDER BY LFNS_CODIGO DESC LIMIT 1";
						$result = mysql_query($query, $conn);
						
						while($sorteio = mysql_fetch_array($result)){
							for($i=1;$i<=15;$i++){
								if($lfna_b11 == $sorteio[$i]):?>
									<input type="text" class="form-control" size="1" value="<?php echo $lfna_b11;?>" readonly/>
									<?php
									$pontos++;
								else:
								endif;
							}
						}
					?>
					</td>

					<td>
					<?php
						$conn = mysql_connect("localhost", "root", ""); 
						$ok = mysql_SELECT_db("loteria", $conn);
						$query = "SELECT * FROM lotofacil_numeros_sorteados ORDER BY LFNS_CODIGO DESC LIMIT 1";
						$result = mysql_query($query, $conn);
						
						while($sorteio = mysql_fetch_array($result)){
							for($i=1;$i<=15;$i++){
								if($lfna_b12 == $sorteio[$i]):?>
									<input type="text" class="form-control" size="1" value="<?php echo $lfna_b12;?>" readonly/>
									<?php
									$pontos++;
								else:
								endif;
							}
						}
					?>
					</td>

					<td>
					<?php
						$conn = mysql_connect("localhost", "root", ""); 
						$ok = mysql_SELECT_db("loteria", $conn);
						$query = "SELECT * FROM lotofacil_numeros_sorteados ORDER BY LFNS_CODIGO DESC LIMIT 1";
						$result = mysql_query($query, $conn);
						
						while($sorteio = mysql_fetch_array($result)){
							for($i=1;$i<=15;$i++){
								if($lfna_b13 == $sorteio[$i]):?>
									<input type="text" class="form-control" size="1" value="<?php echo $lfna_b13;?>" readonly/>
									<?php
									$pontos++;
								else:
								endif;
							}
						}
					?>
					</td>

					<td>
					<?php
						$conn = mysql_connect("localhost", "root", ""); 
						$ok = mysql_SELECT_db("loteria", $conn);
						$query = "SELECT * FROM lotofacil_numeros_sorteados ORDER BY LFNS_CODIGO DESC LIMIT 1";
						$result = mysql_query($query, $conn);
						
						while($sorteio = mysql_fetch_array($result)){
							for($i=1;$i<=15;$i++){
								if($lfna_b14 == $sorteio[$i]):?>
									<input type="text" class="form-control" size="1" value="<?php echo $lfna_b14;?>" readonly/>
									<?php
									$pontos++;
								else:
								endif;
							}
						}
					?>
					</td>

					<td>
					<?php
						$conn = mysql_connect("localhost", "root", ""); 
						$ok = mysql_SELECT_db("loteria", $conn);
						$query = "SELECT * FROM lotofacil_numeros_sorteados ORDER BY LFNS_CODIGO DESC LIMIT 1";
						$result = mysql_query($query, $conn);
						
						while($sorteio = mysql_fetch_array($result)){
							for($i=1;$i<=15;$i++){
								if($lfna_b15 == $sorteio[$i]):?>
									<input type="text" class="form-control" size="1" value="<?php echo $lfna_b15;?>" readonly/>
									<?php
									$pontos++;
								else:
								endif;
							}
						}
					?>
					</td>
					
					<td align="left">
					<?php 
	if($pontos == 11):?>
		<div class="btn btn-success"><?php echo $pontos;?></div>
	<?php elseif($pontos == 12):?>
		<div class="btn btn-success"><?php echo $pontos;?></div>
	<?php elseif($pontos == 13):?>
		<div class="btn btn-success"><?php echo $pontos;?></div>
	<?php elseif($pontos == 14):?>
		<div class="btn btn-success"><?php echo $pontos;?></div>
	<?php elseif($pontos == 15):?>
		<div class="btn btn-success"><?php echo $pontos;?></div>
	<?php else:?>
		<div class="btn btn-light">	<?php echo $pontos;?></div>
	<?php endif;?>
					</td>

					<td>
						<a class="btn btn-warning" href="index.php?view=formAlterarAposta&function=formAlterarAposta&lfna_codigo=<?php echo $lfna_codigo;?>">
							editar
						</a>
					</td>
					<td>
						<a class="btn btn-danger" href="index.php?view=lotofacilExcluirAposta&function=lotofacilExcluirAposta&lfna_codigo=<?php echo $lfna_codigo;?>">
							excluir
						</a>
					</td>
				</tr>
			<?php 
			} ?>
		</tbody>
	</table>
</div>