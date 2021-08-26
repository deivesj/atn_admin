<html>
<head>
<title>Alterar senhas</title>
<link href="../includes/style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Expires" CONTENT="0">
<meta http-equiv="pragma" content="no-cache">
</head>
<body> 

<script Language="JavaScript">
	function Aplicar() {
	window.open( "aplica.php", "Atualizando senhas", "status = 1, height = 300, width = 300, resizable = 0" )
}
</script>
<?
include("seguranca.php");
protegePagina(); 
?>
<?php
include_once('../includes/files.inc.php');
	echo "<form name='insere' method='post'>";
	echo "<p class='titulo'>Após alterar as senhas clique em Aplicar e ignore a mensagem de 15 minutos para efetivar.</p>";
	echo "<input class='botao_users' type='button' onClick='Aplicar()' value='Aplicar'>";
	echo  "</form>";
?>
</body>
</html>
