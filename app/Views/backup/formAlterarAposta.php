<hr><form name="lotofacilgravaraltaposta" action="index.php" method="post">
	<div class="form-group">
	<table class="table">
		<tr>
			<td valign="top">
				<fieldset ><legend >Alterar aposta</legend>
					<table>
						<tr>
							<td><input class="form-control" type="text" size="1" name="lfna_b1" id="lfna_b1" value="<?php echo $oquefazer->registros->LFNA_B1;?>" maxlength="2" required autofocus/></td>
							<td><input class="form-control" type="text" size="1" name="lfna_b2" id="lfna_b2" value="<?php echo $oquefazer->registros->LFNA_B2;?>" maxlength="2" required /></td>
							<td><input class="form-control" type="text" size="1" name="lfna_b3" id="lfna_b3" value="<?php echo $oquefazer->registros->LFNA_B3;?>" maxlength="2" required /></td>
							<td><input class="form-control" type="text" size="1" name="lfna_b4" id="lfna_b4" value="<?php echo $oquefazer->registros->LFNA_B4;?>" maxlength="2" required /></td>
							<td><input class="form-control" type="text" size="1" name="lfna_b5" id="lfna_b5" value="<?php echo $oquefazer->registros->LFNA_B5;?>" maxlength="2" required /></td>
							<td><input class="form-control" type="text" size="1" name="lfna_b6" id="lfna_b6" value="<?php echo $oquefazer->registros->LFNA_B6;?>" maxlength="2" required /></td>
							<td><input class="form-control" type="text" size="1" name="lfna_b7" id="lfna_b7" value="<?php echo $oquefazer->registros->LFNA_B7;?>" maxlength="2" required /></td>
							<td><input class="form-control" type="text" size="1" name="lfna_b8" id="lfna_b8" value="<?php echo $oquefazer->registros->LFNA_B8;?>" maxlength="2" required /></td>
							<td><input class="form-control" type="text" size="1" name="lfna_b9" id="lfna_b9" value="<?php echo $oquefazer->registros->LFNA_B9;?>" maxlength="2" required /></td>
							<td><input class="form-control" type="text" size="1" name="lfna_b10" id="lfna_b10" value="<?php echo $oquefazer->registros->LFNA_B10;?>" maxlength="2" required /></td>
							<td><input class="form-control" type="text" size="1" name="lfna_b11" id="lfna_b11" value="<?php echo $oquefazer->registros->LFNA_B11;?>" maxlength="2" required /></td>
							<td><input class="form-control" type="text" size="1" name="lfna_b12" id="lfna_b12" value="<?php echo $oquefazer->registros->LFNA_B12;?>" maxlength="2" required /></td>
							<td><input class="form-control" type="text" size="1" name="lfna_b13" id="lfna_b13" value="<?php echo $oquefazer->registros->LFNA_B13;?>" maxlength="2" required /></td>
							<td><input class="form-control" type="text" size="1" name="lfna_b14" id="lfna_b14" value="<?php echo $oquefazer->registros->LFNA_B14;?>" maxlength="2" required /></td>
							<td><input class="form-control" type="text" size="1" name="lfna_b15" id="lfna_b15" value="<?php echo $oquefazer->registros->LFNA_B15;?>" maxlength="2" required /></td>
						</tr>
					</table>
				</fieldset> 
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<fieldset >
					<input 
						class="btn btn-warning"
						type="submit" value="Alterar" name="Alterar" 
					/>
						&nbsp;
					<input 
						class="btn btn-light"
						type="reset" value="Restaurar" name="Restaurar"
					/>
					<input type="hidden" value="lotofacilGravarAltAposta" name="view"/>
					<input type="hidden" value="lotofacilGravarAltAposta" name="function"/>
					<input type="hidden" value="<?php echo $oquefazer->registros->LFNA_CODIGO;?>" name="lfna_codigo"/>
				</fieldset>
			</td>
		</tr>
	</table>
	</div>
</form>