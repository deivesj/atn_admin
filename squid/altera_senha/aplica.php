<html>
<head>
<title>Ataulizando senha(s)</title>
<body bgcolor="#FFFFFF">
<script language="javascript" type="text/javascript"> 
window.setTimeout("window.close()", 10000); 
</script> 
<center>
<br>
<br>
<font size="5" face="Tahoma"><b>Aguarde, Ataulizando a(s) senha(s)</b>
<br>
<img src="../includes/load.gif" />
</center>
<?php
system('sudo /usr/sbin/squid -k reconfigure');
system('sudo ../script/service');
?>
</font>
</body>
</html>
