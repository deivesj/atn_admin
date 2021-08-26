<?php
echo "<HTML>".
"<HEAD>".
"<link rel='stylesheet' href='style.css' type='text/css'>".
"</HEAD>".
"<BODY TOPMARGIN=30>";

include 'services_conf.php';

echo  shell_exec ('/usr/bin/servicos');

?>

