<?php require('config/conexao/conecta.php');
	$conn = mysql_connect("localhost", "root", "");
	$ok = mysql_select_db("system", $conn);
	$sql = mysql_query("SELECT * FROM system_pages");

	echo "<b>View</b>: ".
	@$view = $_REQUEST['view'];

	while ($linhas = mysql_fetch_array($sql)){
	    $page_route = $linhas['PAGE_ROUTE'];
		if($view == "exibirConfig"){
		require('app/Controllers/Config.php');
		} 
		elseif($view == "exibir".$page_route){
		require('app/Controllers/'.$page_route.'.php');
		} 
		elseif($view == "alteracao".$page_route){
		require('app/Controllers/'.$page_route.'.php');
		} 
		elseif($view == "alterar".$page_route){
		require('app/Controllers/'.$page_route.'.php');
		} 
		elseif($view == "salvar".$page_route){
		require('app/Controllers/'.$page_route.'.php');
		} 
		elseif($view == "formNew".$page_route){
		require('app/Controllers/'.$page_route.'.php');
		} 
		elseif($view == "excluir".$page_route){
		require('app/Controllers/'.$page_route.'.php');
		} 
		else{
		require('app/views/main/main.php');
		} 
	}
?>