<hr><style>.nav{display: block;}</style>
<div class="container">
      <h3>Configuração > Simulação</h3>
<form name="lotofacilgravaraposta" action="index.php" method="post">
  <div class="form-group">
      <table class="table">
        <tr>
          <td>
            <h4>configue as bolas que deveram repetir na simulação:</h4>
          </td>
        </tr>
          
        <tr>
          <td>Bolas Sorteadas:</td>
          <td><input class="form-control" type="text" size="1" name="config_tts" id="config_tts" value="<?php echo $oquefazer->registros->CONFIG_TTS;?>" maxlength="2" required autofocus/></td>
        </tr>
          
        <tr>
          <td>Bolas Ausentes:</td>
          <td><input class="form-control" type="text" size="1" name="config_tta" id="config_tta" value="<?php echo $oquefazer->registros->CONFIG_TTA;?>" maxlength="1" required /></td>
        </tr>

          <td>

            <input class="btn btn-success" type="submit" value="Salvar" name="Salvar" />
            <input type="hidden" value="SalvarConfigQtdeSorteadas" name="view"/>
            <input type="hidden" value="SalvarConfigQtdeSorteadas" name="function"/>
            <input type="hidden" value="<?php echo $oquefazer->registros->CODIGO_SIMULADOR;?>" name="codigo_simulador"/>
          </td>
        </tr>
      </table>
</div>
</form>
  </div>
</div>