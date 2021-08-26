<html>
<head>
<title>Reiniciando Serviço</title>
<body bgcolor="#FFFFFF">
<script language="javascript" type="text/javascript"> 
window.setTimeout("window.close()", 50000); 
</script> 
<center>
<br>
<br>
<font size="2" face="Tahoma"><b>Aguarde, reiniciando serviço, em instantes tudo devera voltar ao normal.</b>
<br>
<br>
<img src="../includes/load.gif" />

<?php
system('sudo /usr/sbin/squid -k reconfigure');
system('sudo /usr/sbin/reinicia_servico');
?>
</center>
</font>
</body>
</html>
