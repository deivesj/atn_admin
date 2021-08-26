<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>Área de Administração do Servidor</title>
<link rel="stylesheet" href="resources/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="resources/css/invalid.css" type="text/css" media="screen" />	
<script type="text/javascript" src="resources/scripts/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="resources/scripts/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="resources/scripts/facebox.js"></script>
<script type="text/javascript" src="resources/scripts/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="resources/scripts/jquery.datePicker.js"></script>
<script type="text/javascript" src="resources/scripts/jquery.date.js"></script>
</head>
<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
<h1 id="sidebar-title"><a href="#">ATN Server Admin 2.0</a></h1>
<?php
// Incluimos o arquivo de restrição
require_once("restrito.php"); 
?>
</div>   
<br>     
<ul id="main-nav">  <!-- MENU -->
<li> 
<a href="#" class="nav-top-item" > <!-- Add the class "current" to current menu item -->
Squid Proxy
</a>
<ul>
<li><a href="squid/includes/manual_squid.txt" target="frame"> Manual do Proxy</a></li>
<li><a href="squid/altera_senha/index.html" target="frame"> Alterar senha de Usuário</a></li>
<li><a href="squid/adiciona_usuario/index.php" target="frame">Usuário Liberado</a></li>
<li><a href="squid/adiciona_usuarioip/index.php" target="frame">Usuário Liberado por IP</a></li>
<li><a href="squid/adiciona_usuarioN1/index.php" target="frame">Usuário Nivel 1</a></li>
<li><a href="squid/adiciona_usuarioN2/index.php" target="frame">Usuário Nivel 2</a></li>
<li><a href="squid/adiciona_usuarioN3/index.php" target="frame">Usuário Nivel 3</a></li>
<li><a href="squid/ip_liberado/index.php" target="frame">IPs Liberados</a></li>
<li><a href="squid/ip_liberadouser/index.php" target="frame">IPs Liberados por usuário</a></li>
<li><a href="squid/ip_bloqueado/index.php" target="frame">IPs Bloqueados</a></li>
<li><a href="squid/site_semproxy/index.php" target="frame">Sites Sem Proxy</a></li>
<li><a href="squid/site_liberado/index.php" target="frame">Sites Liberados</a></li>
<li><a href="squid/site_nivel1/index.php" target="frame">Sites Nivel 1</a></li>
<li><a href="squid/site_nivel2/index.php" target="frame">Sites Nivel 2</a></li>
<li><a href="squid/site_nivel3/index.php" target="frame">Sites Nivel 3</a></li>
<li><a href="squid/site_bloqueadoN1/index.php" target="frame">Sites Bloqueados nível 1</a></li>
<li><a href="squid/site_bloqueado/index.php" target="frame">Sites Bloqueados</a></li>
<li><a href="squid/tempol/index.php" target="frame">Horário Liberado</a></li>
<li><a href="squid/adiciona_usuarioH/index.php" target="frame">Usuário H Liberado</a></li>
</ul>
</li>
<li> 
<a href="#" class="nav-top-item" > <!-- Add the class "current" to current menu item -->
Squid Proxy Avançado
</a>
<ul>
<li><a href="squid/log/index.php" target="frame">Trafego em Tempo Real</a></li>
<li><a href="../squid-reports/index.html" target="frame">Relátorio</a></li>
<li><a href="squid/script/limpa.php" target="frame">Limpar Cache</a></li>
<li><a href="squid/script/reinicia.php" target="frame">Reiniciar Serviço</a></li>
<li><a href="squid/squidaf/index.php" target="frame">Abrir / Fechar Squid</a></li>
</ul>
</li>
				
<li>
<a href="#" class="nav-top-item">
Rede
</a>
<ul>
<li><a href="dhcp/index.php" target="frame">Scan</a></li>
<li><a href="dhcp/dhcpadd/index.php" target="frame">Vincular IP</a></li>
<li><a href="status_services/index.php" target="frame">Serviços</a></li>
<li><a href="manut/rinetd/index.php" target="frame">Redireciona Portas</a></li>
<li><a href="manut/shorewall/index.php" target="frame">Firewall</a></li>
<li><a href="manut/scripts/limpaiptb.php" target="frame">Reinicia iptables</a></li>
</ul>
</li>    

<li>
<a href="#" class="nav-top-item">
Samba
</a>
<ul>
<li><a href="samba/samba.php" target="frame">Status</a></li>
<li><a href="../../cgi-bin/changepassword.cgi" target="frame">Mudar senha</a></li>
</ul>
</li>    

		
<li>
<a href="#" class="nav-top-item">
Servidor
</a>
<ul>
<li><a href="hardware/index.php" target="frame">Status do Sistema</a></li>
<li><a href="power/index.php" target="frame">Desligar/Reiniciar</a></li>
<li><a href="manut/scripts/limpa.php" target="frame">Limpa logs</a></li>
<li><a href="manut/backlog/index.php" target="frame">Logs de Backup</a></li>
</ul>
</li>      
				
</ul> <!-- FIM MENU -->
<div id="profile-links">
<br>
Servidor: <? $host=''.$_SERVER['SERVER_NAME'].''; echo ($host); ?>
<br>
<? 
$data = date ("j/m/Y");
$hora = date ("H:i:s"); 
$ipa = $_SERVER['REMOTE_ADDR'];	
echo ("Seu IP: $ipa");
echo "<br>";
echo ("Data: $data"); 
echo "<br>";
echo ("Hora: $hora"); 	
echo "<br>";
echo "Usuário: " . $_SESSION['usuarioNome'];
?>
<div id="profile-links">
<br><br>
&#169; Copyright 2020 
<br> developed by Davidson S. Jesus 
<br>based on Marcos Carraro osp
</div>
</div></div></div> <!-- End #sidebar -->
		
		<div id="main-content">
			<div class="clear"></div> <!-- End .clear -->
</body>
</html>
