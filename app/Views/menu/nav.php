<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">PDV</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <?php 
        $conn = mysql_connect("localhost", "root", "");
        $ok = mysql_select_db("system", $conn);
        $sql = mysql_query("SELECT * FROM system_pages");
        while ($linhas = mysql_fetch_array($sql)) :
        $page_route = $linhas['PAGE_ROUTE'];
        $page_name = $linhas['PAGE_NAME'];
      ?>
      <li><a href="index.php?view=exibir<?php echo $page_route;?>&function=exibir<?php echo $page_route;?>"><?php echo $page_name;?></a></li>
      <?php endwhile; ?>
      <li><a href="index.php?view=exibirConfig&function=exibirConfig">Config</a></li>
      <!-- <li><a href="index.php?view=exibirFuncionarios&function=exibirFuncionarios">Funcionários</a></li> -->
<!--       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Produtos <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#">Lanches</a></li>
        <li><a href="#">Bebidas</a></li>
      </ul>
    </li>
     -->    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>