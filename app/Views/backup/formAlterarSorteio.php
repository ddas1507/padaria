<hr><form name="lotofacilgravaraltsorteio" action="index.php" method="post">
	<div class="form-group">
	<table class="table ">
		<tr>
			<td valign="top">
				<fieldset ><legend >Alterar concurso</legend>
					<table class="table">
						<tr>
							<td><input class="form-control"	type="text" class="form-control"size="1" name="lfns_b1" id="lfns_b1" value="<?php echo $oquefazer->registros->LFNS_B1;?>" maxlength="2" required autofocus/></td>
							<td><input type="text" class="form-control"size="1" name="lfns_b2" id="lfns_b2" value="<?php echo $oquefazer->registros->LFNS_B2;?>" maxlength="2" required /></td>
							<td><input type="text" class="form-control"size="1" name="lfns_b3" id="lfns_b3" value="<?php echo $oquefazer->registros->LFNS_B3;?>" maxlength="2" required /></td>
							<td><input type="text" class="form-control"size="1" name="lfns_b4" id="lfns_b4" value="<?php echo $oquefazer->registros->LFNS_B4;?>" maxlength="2" required /></td>
							<td><input type="text" class="form-control"size="1" name="lfns_b5" id="lfns_b5" value="<?php echo $oquefazer->registros->LFNS_B5;?>" maxlength="2" required /></td>
							<td><input type="text" class="form-control"size="1" name="lfns_b6" id="lfns_b6" value="<?php echo $oquefazer->registros->LFNS_B6;?>" maxlength="2" required /></td>
							<td><input type="text" class="form-control"size="1" name="lfns_b7" id="lfns_b7" value="<?php echo $oquefazer->registros->LFNS_B7;?>" maxlength="2" required /></td>
							<td><input type="text" class="form-control"size="1" name="lfns_b8" id="lfns_b8" value="<?php echo $oquefazer->registros->LFNS_B8;?>" maxlength="2" required /></td>
							<td><input type="text" class="form-control"size="1" name="lfns_b9" id="lfns_b9" value="<?php echo $oquefazer->registros->LFNS_B9;?>" maxlength="2" required /></td>
							<td><input type="text" class="form-control"size="1" name="lfns_b10" id="lfns_b10" value="<?php echo $oquefazer->registros->LFNS_B10;?>" maxlength="2" required /></td>
							<td><input type="text" class="form-control"size="1" name="lfns_b11" id="lfns_b11" value="<?php echo $oquefazer->registros->LFNS_B11;?>" maxlength="2" required /></td>
							<td><input type="text" class="form-control"size="1" name="lfns_b12" id="lfns_b12" value="<?php echo $oquefazer->registros->LFNS_B12;?>" maxlength="2" required /></td>
							<td><input type="text" class="form-control"size="1" name="lfns_b13" id="lfns_b13" value="<?php echo $oquefazer->registros->LFNS_B13;?>" maxlength="2" required /></td>
							<td><input type="text" class="form-control"size="1" name="lfns_b14" id="lfns_b14" value="<?php echo $oquefazer->registros->LFNS_B14;?>" maxlength="2" required /></td>
							<td><input type="text" class="form-control"size="1" name="lfns_b15" id="lfns_b15" value="<?php echo $oquefazer->registros->LFNS_B15;?>" maxlength="2" required /></td>
						</tr>
					</table>
				</fieldset> 
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<fieldset >
					<input 
						class="btn btn-warning" type="submit" value="Alterar" name="Alterar" 
					/>
					<input type="hidden" value="lotofacilGravarAltSorteio" name="view"/>
					<input type="hidden" value="lotofacilGravarAltSorteio" name="function"/>
					<input type="hidden" value="<?php echo $oquefazer->registros->LFNS_CODIGO;?>" name="lfns_codigo"/>
				</fieldset>
			</td>
		</tr>
	</table>
</div>
</form>