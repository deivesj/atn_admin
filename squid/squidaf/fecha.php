<html>
<head>
<title>Fechando</title>
<body bgcolor="#FFFFFF">
<script language="javascript" type="text/javascript"> 
window.setTimeout("window.close()", 5000); 
</script> 
<center>
<br>
<br>
<font size="3" face="Tahoma"><b>Aguarde, Reconfigurando o squid para internet controlada.</b>
<br>
<br>
<img src="load.gif" />

<?php
system('sudo /usr/bin/squidf');
echo '<meta http-equiv="refresh" content="1;url=index.php">';
echo '</head>';
?>
</center>
</font>
</body>
</html>
