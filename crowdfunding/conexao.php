<?php
	$conn = mysqli_connect('localhost', 'root', '', 'track_money');
	mysqli_set_charset($conn, 'utf8');
	if($conn->connect_error){
		die("ERRO: Falha ao fazer a conexão " .$conn->connection_error);
	}
?>