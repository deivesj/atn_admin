<html>
<head>
<title>Aplicando Regras</title>
<body bgcolor="#FFFFFF">
<script language="javascript" type="text/javascript"> 
window.setTimeout("window.close()", 5000); 
function fecha() { 
window.close(); 
opener.location.href=opener.location.href; 
}
</script> 
<center>
<br>
<br>
<font size="5" face="Tahoma"><b>Aguarde, Limpando Logs</b>
<br>
<img src="../includes/load.gif" />
</center>
<?php
exec('sudo /usr/bin/limpa-logback.sh');
echo "<center>";
echo "<br>";
echo "<br>";
echo "<font size='5' face='Tahoma'><b>Aguarde, efetuando as devidas modificações</b>";
echo "<br>";
echo "<img src='../includes/load.gif' />";
echo "<body onunload='javascript:fecha()'> ";
echo "</center>";
?>
</font>
</body>
</html>
