<html>
<head>
<title>Gerenciar Firewall</title>
<link href="../includes/style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Expires" CONTENT="0">
<meta http-equiv="pragma" content="no-cache">
</head>
<body> 

<script Language="JavaScript">
	function Aplicar() {
	window.open( "aplica.php", "Aplicando Regras", "status = 1, height = 300, width = 300, resizable = 0" )
}
function AbrePop (editar) {
window.open('editar.php?num=' + editar, '', 'width=450, height=200, status = 1,resizable = 0');
}
</script>
<?php
// Incluimos o arquivo de restrição
require_once("restrito.php"); 
?>
<?php
include_once('../includes/files.inc.php');
	echo "<form name='insere' method='post'>";
	echo "<p class='titulo'>Após editar clique em Aplicar para efetivar</p>";
#	echo "<input class='input' type='text' width='400' name='regra' /> ";
#	echo "<input class='botao' type='button' align='right' name='InsereAplicaRegra' onClick='javascript:InsereAplica()' value='Inserir'> ";
	echo "<input class='botao' type='button' onClick='Aplicar()' value='Aplicar'>";
	echo  "</form>";

echo '<table class="tabela">';
	echo '<td class="id"><b>ID</b></td>';
	echo '<td class="opcao"><b>Opção</b></td>';
	echo '<td><b>Lista de sites cadastrados</b></td>';

//NOVO METODO PARA CONTAR    
$arquivo = "$rulesD";
  if (file_exists($arquivo)){
$num =  0;
$abre = fopen($arquivo, "r");
while ($linhas = fgets($abre)) {
if(trim($linhas) != '')
$num++;

echo '<tr>';
echo '<td class="id">';
echo $num;
echo '</td>';
echo '<td class="tabela">';
echo "<a href='javascript:AbrePop(";
echo $num;
echo ")'><img src='../includes/pencil.png' alt='Editar Regra' title='Editar Regra'></img></a>";
echo '</td>';
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
