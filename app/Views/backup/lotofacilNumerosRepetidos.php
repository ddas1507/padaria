<hr><?php 			
	$conn = mysql_connect("localhost", "root", ""); 
	$ok = mysql_select_db("loteria", $conn); 
?>
<h3>Recorrências</h3><hr>
<div class="form-group">
	<table class="table">
		<tr>
			<td>
				<table class="table">
					<thead>
						<tr>
							<th>01</th>
							<th>02</th>
							<th>03</th>
							<th>04</th>
							<th>05</th>
						</tr>
					</thead>
					<tbody>
						<tr>
					<?php for ($i=1; $i <= 5; $i++): ?>
							<td>
							<?php				
								$query = "SELECT COUNT(*) FROM lotofacil_numeros_sorteados 		
										WHERE  
								LFNS_B1 = $i OR 
								LFNS_B2 = $i OR 
								LFNS_B3 = $i OR 
								LFNS_B4 = $i OR 
								LFNS_B5 = $i";
								$result = mysql_query($query, $conn);
							?><input class="form-control" type="text" value="<?php echo mysql_result($result,0); ?>" disabled />
							</td>
					<?php endfor;?>
						</tr>
					</tbody>
				</table>	
				<table class="table">
					<thead>
						<tr>
							<th>06</th>
							<th>07</th>
							<th>08</th>
							<th>09</th>
							<th>10</th>
						</tr>
					</thead>
					<tbody>
						<tr>
					<?php for ($i=6; $i <= 10; $i++): ?>
							<td>
							<?php				
								$query = "SELECT COUNT(*) FROM lotofacil_numeros_sorteados 		
										WHERE  
								LFNS_B1 = $i OR 
								LFNS_B2 = $i OR 
								LFNS_B3 = $i OR 
								LFNS_B4 = $i OR 
								LFNS_B5 = $i OR 
								LFNS_B6 = $i OR 
								LFNS_B7 = $i OR 
								LFNS_B8 = $i OR 
								LFNS_B9 = $i OR 
								LFNS_B10 = $i OR 
								LFNS_B11 = $i OR 
								LFNS_B12 = $i OR 
								LFNS_B13 = $i OR 
								LFNS_B14 = $i OR 
								LFNS_B15 = $i";
								$result = mysql_query($query, $conn);
							?><input class="form-control" type="text" value="<?php echo mysql_result($result,0); ?>" disabled />
							</td>
					<?php endfor;?>
						</tr>
					</tbody>
				</table>	
				<table class="table">
					<thead>
						<tr>
							<th>11</th>
							<th>12</th>
							<th>13</th>
							<th>14</th>
							<th>15</th>
						</tr>
					</thead>
					<tbody>
						<tr>
					<?php for ($i=11; $i <= 15; $i++): ?>
							<td>
							<?php				
								$query = "SELECT COUNT(*) FROM lotofacil_numeros_sorteados 		
										WHERE  
								LFNS_B1 = $i OR 
								LFNS_B2 = $i OR 
								LFNS_B3 = $i OR 
								LFNS_B4 = $i OR 
								LFNS_B5 = $i OR 
								LFNS_B6 = $i OR 
								LFNS_B7 = $i OR 
								LFNS_B8 = $i OR 
								LFNS_B9 = $i OR 
								LFNS_B10 = $i OR 
								LFNS_B11 = $i OR 
								LFNS_B12 = $i OR 
								LFNS_B13 = $i OR 
								LFNS_B14 = $i OR 
								LFNS_B15 = $i";
								$result = mysql_query($query, $conn);
							?><input class="form-control" type="text" value="<?php echo mysql_result($result,0); ?>" disabled />
							</td>
					<?php endfor;?>
						</tr>
					</tbody>
				</table>	
				<table class="table">
					<thead>
						<tr>
							<th>16</th>
							<th>17</th>
							<th>18</th>
							<th>19</th>
							<th>20</th>
						</tr>
					</thead>
					<tbody>
						<tr>
					<?php for ($i=16; $i <= 20; $i++): ?>
							<td>
							<?php				
								$query = "SELECT COUNT(*) FROM lotofacil_numeros_sorteados 		
										WHERE  
								LFNS_B1 = $i OR 
								LFNS_B2 = $i OR 
								LFNS_B3 = $i OR 
								LFNS_B4 = $i OR 
								LFNS_B5 = $i OR 
								LFNS_B6 = $i OR 
								LFNS_B7 = $i OR 
								LFNS_B8 = $i OR 
								LFNS_B9 = $i OR 
								LFNS_B10 = $i OR 
								LFNS_B11 = $i OR 
								LFNS_B12 = $i OR 
								LFNS_B13 = $i OR 
								LFNS_B14 = $i OR 
								LFNS_B15 = $i";
								$result = mysql_query($query, $conn);
							?><input class="form-control" type="text" value="<?php echo mysql_result($result,0); ?>" disabled />
							</td>
					<?php endfor;?>
						</tr>
					</tbody>
				</table><table class="table">
					<thead>
						<tr>
							<th>21</th>
							<th>22</th>
							<th>23</th>
							<th>24</th>
							<th>25</th>
						</tr>
					</thead>
					<tbody>
						<tr>
					<?php for ($i=21; $i <= 25; $i++): ?>
							<td>
							<?php				
								$query = "SELECT COUNT(*) FROM lotofacil_numeros_sorteados 		
										WHERE  
								LFNS_B1 = $i OR 
								LFNS_B2 = $i OR 
								LFNS_B3 = $i OR 
								LFNS_B4 = $i OR 
								LFNS_B5 = $i OR 
								LFNS_B6 = $i OR 
								LFNS_B7 = $i OR 
								LFNS_B8 = $i OR 
								LFNS_B9 = $i OR 
								LFNS_B10 = $i OR 
								LFNS_B11 = $i OR 
								LFNS_B12 = $i OR 
								LFNS_B13 = $i OR 
								LFNS_B14 = $i OR 
								LFNS_B15 = $i";
								$result = mysql_query($query, $conn);
							?><input class="form-control" type="text" value="<?php echo  mysql_result($result,0); ?>" disabled />
							</td>
					<?php endfor;?>
						</tr>
					</tbody>
				</table>

			</td>
			<td>
				<h3>Sorteios Repetidos</h3><hr>	
				<table class="table">
					<thead>
						<tr>
							<th>Concurso</th>
						</tr>
					</thead>
					<tbody>
							<tr>
								<td>
						<?php
							$sql = mysql_query("
								SELECT 	b.`LFNSCP_CODIGO`
								FROM `lotofacil_numeros_sorteados` AS a
								INNER JOIN `lotofacil_numeros_sorteados_cp` AS b 
								ON (a.`LFNS_B1` = b.`LFNSCP_B1`)
								AND (a.`LFNS_B2` = b.`LFNSCP_B2`)
								AND (a.`LFNS_B3` = b.`LFNSCP_B3`)
								AND (a.`LFNS_B4` = b.`LFNSCP_B4`)
								AND (a.`LFNS_B5` = b.`LFNSCP_B5`)
								AND (a.`LFNS_B6` = b.`LFNSCP_B6`)
								AND (a.`LFNS_B7` = b.`LFNSCP_B7`)
								AND (a.`LFNS_B8` = b.`LFNSCP_B8`)
								AND (a.`LFNS_B9` = b.`LFNSCP_B9`)
								AND (a.`LFNS_B10` = b.`LFNSCP_B10`)
								AND (a.`LFNS_B11` = b.`LFNSCP_B11`)
								AND (a.`LFNS_B12` = b.`LFNSCP_B12`)
								AND (a.`LFNS_B13` = b.`LFNSCP_B13`)
								AND (a.`LFNS_B14` = b.`LFNSCP_B14`)
								AND (a.`LFNS_B15` = b.`LFNSCP_B15`)
								WHERE a.`LFNS_B1` = b.`LFNSCP_B1`
								AND a.`LFNS_B2` = b.`LFNSCP_B2`
								AND a.`LFNS_B3` = b.`LFNSCP_B3`
								AND a.`LFNS_B4` = b.`LFNSCP_B4`
								AND a.`LFNS_B5` = b.`LFNSCP_B5`
								AND a.`LFNS_B6` = b.`LFNSCP_B6`
								AND a.`LFNS_B7` = b.`LFNSCP_B7`
								AND a.`LFNS_B8` = b.`LFNSCP_B8`
								AND a.`LFNS_B9` = b.`LFNSCP_B9`
								AND a.`LFNS_B10` = b.`LFNSCP_B10`
								AND a.`LFNS_B11` = b.`LFNSCP_B11`
								AND a.`LFNS_B12` = b.`LFNSCP_B12`
								AND a.`LFNS_B13` = b.`LFNSCP_B13`
								AND a.`LFNS_B14` = b.`LFNSCP_B14`
								AND a.`LFNS_B15` = b.`LFNSCP_B15`

								GROUP BY LFNSCP_CODIGO
								HAVING COUNT(*) > 1
							");
							while ($linhas = mysql_fetch_array($sql)) :
								echo "Concurso: ". $linhas['LFNSCP_CODIGO']."<br/>";
							endwhile;
						?>
								 </td>
							</tr>
					</tbody>
				</table>
				</div>
			</td>
		</tr>
	</table>
