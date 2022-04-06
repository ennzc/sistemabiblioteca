<?php
    include '../conecta.php';

    $nome = strtoupper($_POST['nome']);
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $nascimento = $_POST['nascimento'];
    $turma = strtoupper ($_POST['select']);

    

    $consulta = $conexao -> prepare("INSERT INTO alunos (datanascimento,nome,telefone,email,turma) VALUES ('$nascimento','$nome','$telefone','$email','$turma')");

    $consulta -> execute();

    header('Location: index.php');


 ?>                                 
        