<html>
<head>
<title>Aplicando Regras</title>
<body bgcolor="#FFFFFF">
<script language="javascript" type="text/javascript"> 
window.setTimeout("window.close()", 20000); 
</script> 
<center>
<br>
<br>
<font size="5" face="Tahoma"><b>Aguarde, Aplicando as novas Regras</b>
<br>
<img src="../includes/load.gif" />
</center>
<?php
system('sudo /usr/sbin/rinetd');
system('sudo /usr/bin/limpaiptables');
system('sudo /usr/sbin/rinetd');
?>
</font>
</body>
</html>
