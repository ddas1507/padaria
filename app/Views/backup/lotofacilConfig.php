<hr><style>.nav{display: block;}</style>
<div class="container">
  <ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="#menu1">Concursos / Simulação</a></li>
  </ul>

  <div class="tab-content">
  	<div id="menu1" class="tab-pane fade in active">

      <h3>Concursos</h3>
    <form name="lotofacilgravaraposta" action="index.php" method="post">
      <div class="form-group">
          <table class="table" width="100%">
            <tr>
              <td><h4>
              <?php 
                $conn = mysql_connect("localhost", "root", "");
                $ok = mysql_select_db("loteria", $conn);
                $sql = mysql_query("select * FROM lotofacil_config_concursos");
                  while ($linhas = mysql_fetch_array($sql)) :
                  $codigo = $linhas['CONFIG_CODIGO'];
                  $quantidade = $linhas['CONFIG_QTDE'];
                  echo "Quantidade de sorteios visiveis na tela: ". $quantidade;
                 endwhile;
              ?>

            </h4></td>
              <td>
                <input class="btn btn-warning" type="submit" value="Alterar" name="Alterar" />
                <input type="hidden" value="ConfigQtdeConcurso" name="view"/>
                <input type="hidden" value="ConfigQtdeConcurso" name="function"/>
                <input type="hidden" value="<?php echo $codigo;?>" name="config_codigo"/>
              </td>
            </tr>
          </table>
      </div>
    </form>
    <form name="lotofacilgravaraposta" action="index.php" method="post">
      <div class="form-group">
          <table class="table">

            <tr>
              <td><h4>
              <?php 
                $conn = mysql_connect("localhost", "root", "");
                $ok = mysql_select_db("loteria", $conn);
                $sql = mysql_query("select * FROM lotofacil_simulador_sorteadas");
                  while ($linhas = mysql_fetch_array($sql)) :
                  $codigo = $linhas['CODIGO_SIMULADOR'];
                  $ttS = $linhas['CONFIG_TTS'];
                  $ttA = $linhas['CONFIG_TTA'];
                  echo "<p>Total de bolas sorteadas que repetiram na simulação: ". $ttS ."</p>";
                  echo "<p>Total de bolas ausentes que estaram presentes na simulação: ". $ttA ."</p>";
                 endwhile;
              ?>

            </h4></td>
              <td>
                <input class="btn btn-warning" type="submit" value="Alterar" name="Alterar" />
                <input type="hidden" value="ConfigQtdeSorteadas" name="view"/>
                <input type="hidden" value="ConfigQtdeSorteadas" name="function"/>
                <input type="hidden" value="<?php echo $codigo;?>" name="codigo_simulador"/>
              </td>
            </tr>
          </table>
      </div>
    </form>
    </div>
</div>