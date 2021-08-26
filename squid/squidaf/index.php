<html>
<head>
<title>Squid Abre Fecha</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Expires" CONTENT="0">
<meta http-equiv="pragma" content="no-cache">
</head>
<body> 

<script Language="JavaScript">
	function Aberta(){
	  document.insere.action="";
	  document.insere.action="abre.php";
	  document.insere.submit();
}
	function Fechada(){
	  document.insere.action="";
	  document.insere.action="fecha.php";
	  document.insere.submit();
}
</script>
<?
require_once("restrito.php");
?>
<?php
echo "<center>";
	echo "<form name='insere' method='post'>";
	echo "<p class='cuidado'>ATENÇÃO</p>";
	echo "<p class='titulo'>Use estas opções com muito cuidado.</p>";
	echo "<p>Aberto, internet fica toda liberada, sem qualquer controle.</p>";
	echo "<p>Fechado, internet controlada, opção padrão.</p>";	
	echo "<input class='botao' type='button' onClick='Aberta()' value='Aberto'>";
	echo "<input class='botao' type='button' onClick='Fechada()' value='Fechado'>";
	echo  "</form>";
?>
<?php
$file = '/etc/sysctl.conf';
$searchfor = 'net.ipv4.ip_forward=1';
$contents = file_get_contents($file);
$pattern = preg_quote($searchfor, '/');
$pattern = "/^.*$pattern.*\$/m";
if(preg_match_all($pattern, $contents, $matches)){
	echo "Agora o Squid ESTÁ aberto ( a internet NÃO ESTÁ controlada )";
	}                                                                                                  
else{
	echo "Agora o Squid ESTÁ fechado ( a internet ESTÁ controlada )";
	}
?>
</body>
</html>
