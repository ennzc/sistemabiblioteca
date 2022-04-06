<?php 
include '../conecta.php';

	$codlivro = $_GET['codlivro'];
	

	$titulo = $_POST['titulo'];
	$autor = $_POST ['autor'];
	$editora = $_POST['editora'];
	$paginas = $_POST['paginas'];
	$exemplares = $_POST['exemplares'];
	$genero = $_POST['genero'];


 $consulta = $conexao -> prepare("UPDATE livro SET
 	titulo = '$titulo',
 	genero = '$genero',
 	autor = '$autor',
 	editora = '$editora',
 	paginas = '$paginas',
 	qntd_exemplares = '$exemplares'

 	WHERE codlivro = '$codlivro'");

 $consulta -> execute();

header('Location: index.php');

 ?>