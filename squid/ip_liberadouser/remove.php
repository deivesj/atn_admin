<html>
<head>
<title> Removendo IP Liberado por usuario</title>
<body bgcolor="#FFFFFF">
<center>
<br>
<br>
<font size="5" face="Tahoma"><b>Aguarde, removendo ip selecionado</b>
<br>
<img src="../includes/load.gif" />
</center>

<?php
include_once('../includes/files.inc.php');
$arquivoTmp = "$ipsliberadosuserTmp";	
$arquivo = "$ipsliberadosuser";
	if (file_exists($arquivo)){
	$urlDel  = $_POST["remove_regra"];
	$arqOpen = fopen($arquivo, "r");
	$arqNewOpen = fopen($arquivoTmp,"a");
	$contLinhas = 0 ;
	while (!feof ($arqOpen)) {
	$contLinhas++;
	$lineArqFree = fgets($arqOpen, 4096);
	if ($contLinhas != $urlDel) {
	fwrite($arqNewOpen,$lineArqFree);
	}
	}
	fclose($arqOpen);
	fclose($arqNewOpen);
	exec("sudo /bin/mv '$arquivoTmp' '$arquivo'");
	exec("sudo /usr/sbin/squid -k reconfigure");
	echo '<meta http-equiv="refresh" content="1;url=index.php">';
}
else
{
   echo "O arquivo não existe.";
}
?>
</body>
</html>
