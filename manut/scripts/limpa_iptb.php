<html>
<head>
<title>Limpando</title>
<body bgcolor="#FFFFFF">
<script language="javascript" type="text/javascript"> 
window.setTimeout("window.close()", 20000); 
</script> 
<center>
<br>
<br>
<font size="3" face="Tahoma"><b>Aguarde, reiniciando o iptables.</b>
<br>
<br>
<img src="../includes/load.gif" />

<?php
system('sudo /usr/bin/limpaiptables');
?>
</center>
</font>
</body>
</html>
