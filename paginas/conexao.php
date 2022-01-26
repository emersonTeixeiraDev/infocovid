<?php
	$host = $_ENV["host"];
	$user = $_ENV["user"];
	$senha = $_ENV["password"];
	$banco = $_ENV["db"];
	
	$conn  = new mysqli($host,$user,$senha,$banco);
	
	if($conn->connect_error){
		die("Falha na conexão: ".$conn->connect_error);		
	}
?>