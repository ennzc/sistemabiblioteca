<?php 
include '../conecta.php';

	$ra = $_GET['ra'];
	//echo $ra;
	//echo "<br>";

	$nome = $_POST['nome'];
	$email = $_POST ['email'];
	$datanascimento = $_POST['nascimento'];
	$telefone = $_POST['telefone'];
	

	//echo "$nome <br>";
	//echo "$email <br>";
	//echo "$datanascimento <br>";
	//echo "$telefone <br";

 $consulta = $conexao -> prepare("UPDATE alunos SET
 	datanascimento = '$datanascimento',
 	nome = '$nome',
 	email = '$email',
 	telefone = '$telefone'

 	WHERE ra = '$ra'");

 $consulta -> execute();

header('Location: index.php');

 ?>