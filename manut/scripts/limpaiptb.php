<html>
<head>
<title>Reiniciar Iptables</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Expires" CONTENT="0">
<meta http-equiv="pragma" content="no-cache">
</head>
<body> 

<script Language="JavaScript">
	function Limpa() {
	window.open( "limpa_iptb.php", "Reiniciando", "status = 1, height = 300, width = 300, resizable = 0" )
}
</script>

<?php
echo "<center>";
	echo "<form name='insere' method='post'>";
	echo "<p class='cuidado'>ATENÇÃO</p>";
	echo "<p class='titulo'>Use estas opções com muito cuidado. Isso ira reiniciar o iptbales.</p>";
	echo "<input class='botao' type='button' onClick='Limpa()' value='Reinicia Iptables'>";
	echo  "</form>";
?>
</body>
</html>
