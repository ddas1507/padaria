<hr><style>.nav{display: block;}</style>
<div class="container">
      <h3>Configuração > Concursos</h3>
<form name="lotofacilgravaraposta" action="index.php" method="post">
  <div class="form-group">
      <table class="table">
        <tr>
          <td>
            <h4>Selecione a quantidade de concursos que deseja visualizar:</h4>
          </td>
          <td><input class="form-control" type="text" size="1" name="config_qtde" id="lfna_b1" value="<?php echo $oquefazer->registros->CONFIG_QTDE;?>" maxlength="2" required autofocus/></td>
          <td>

            <input class="btn btn-success" type="submit" value="Salvar" name="Salvar" />
            <input type="hidden" value="SalvarConfigQtdeConcurso" name="view"/>
            <input type="hidden" value="SalvarConfigQtdeConcurso" name="function"/>
            <input type="hidden" value="<?php echo $oquefazer->registros->CONFIG_CODIGO;?>" name="config_codigo"/>
          </td>
        </tr>
      </table>
</div>
</form>
  </div>
</div>