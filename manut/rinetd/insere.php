<html>
<head>
<title> Inserindo nova regra</title>
<body bgcolor="#FFFFFF">
<center>
<br>
<br>
<font size="5" face="Tahoma"><b>Aguarde, efetuando as devidas modificações</b>
<br>
<img src="../includes/load.gif" />

<?php
include_once('../includes/files.inc.php');
$arquivoTmp = "$rinetdTmp";	
$arquivo = "$rinetd";
	if (file_exists($arquivo)){
	$urlFree= $_POST["regra"];
//Validacao 
            {
	$arqOpen  = fopen($arquivo, "a");
	$urlInser = "".$urlFree."\n";
	fwrite($arqOpen, $urlInser);
	fclose ($arqOpen);
	exec("cat $arquivoTmp > $arquivo.bkp |cp $arquivoTmp /tmp |rm -f $arquivoTmp");
	echo '<meta http-equiv="refresh" content="1;url=index.php">';
	echo '</head>';
            }
}
else
{
   echo "O arquivo não existe";
}
?>
</center>
</font>
</body>
</html>
