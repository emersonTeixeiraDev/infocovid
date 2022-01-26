<?php
	include('conexao.php');
	
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$idade = $_POST['idade'];
	$inicio = $_POST['inicio'];
	$sintomas = $_POST['sintomas'];
	$transmissao = $_POST['transmissao'];
	$diagnostico = $_POST['diagnostico'];
	$previnir = $_POST['previnir'];
	$grupo_risco = $_POST['grupo_risco'];
	$tipos_teste = $_POST['tipos_teste'];
	
	$sql = "INSERT INTO questionario(nome,sobrenome,idade,inicio,sintomas,transmissao,
    diagnostico,previnir,grupo_risco,tipos_teste)VALUES('$nome','$sobrenome','$idade','$inicio',
    '$sintomas','$transmissao','$diagnostico','$previnir','$grupo_risco','$tipos_teste')";

    if($conn->query($sql)=== TRUE){
    echo "<script language='javascript' type='text/javascript'>
        alert('Questionário respondido com sucesso!');
        window.location.href='../index.php';</script>";			
        die();		
    }else{
    echo "Erro: ".$sql."<br/>".$conn->error;
    echo "<br/>";
    echo "Não foi possível realizar o questionário";
}
$conn->close();