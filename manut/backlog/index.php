<html>
<head>
<title>Gerenciar Log de backup</title>
<link href="../includes/style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Expires" CONTENT="0">
<meta http-equiv="pragma" content="no-cache">
</head>
<body> 

<script Language="JavaScript">
	function Aplicar() {
	window.open( "limpa.php", "Limpando Logs", "status = 1, height = 300, width = 300, resizable = 0" )
	}
</script>
<?php
// Incluimos o arquivo de restrição
require_once("restrito.php"); 
?>
<?php
include_once('../includes/files.inc.php');
	echo "<form name='insere' method='post'>";
	echo "<p class='titulo'>Para limpar logs de backup clique no botão abaixo</p>";
	echo "<input class='botao' type='button' onClick='Aplicar()' value='LImpar Logs'>";
	echo  "</form>";

echo '<table class="tabela">';
	echo '<td><b>Logs de Backups</b></td>';

//NOVO METODO PARA CONTAR    
$arquivo = "$Logback";
  if (file_exists($arquivo)){
$num =  0;
$abre = fopen($arquivo, "r");
while ($linhas = fgets($abre)) {
if(trim($linhas) != '')
$num++;

echo '<tr>';
echo '<td align="left" class="tabela">';
echo  $linhas;
echo '</td>';
echo '</tr>';
	}
}
else
{
   echo "O arquivo não existe";
}
?>
</table>
</body>
</html>
