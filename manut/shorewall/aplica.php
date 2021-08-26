<html>
<head>
<title>Aplicando Regras</title>
<body bgcolor="#FFFFFF">
<script language="javascript" type="text/javascript"> 
window.setTimeout("window.close()", 10000); 
</script> 
<center>
<br>
<br>
<font size="5" face="Tahoma"><b>Aguarde, Aplicando as novas Regras</b>
<br>
<img src="../includes/load.gif" />
</center>
<?php
system('sudo cp -f /rules.drakx /etc/shorewall/rules.drakx');
system('sudo /etc/init.d/shorewall restart');
?>
</font>
</body>
</html>
