<?php
    include '../conecta.php';

    $titulo = ($_POST['titulo']);
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $paginas = $_POST['paginas'];
    $exemplares = $_POST['exemplares'];
    $genero = $_POST['select'];

    

    $consulta = $conexao -> prepare("INSERT INTO livro (titulo,genero,autor,editora,paginas,qntd_exemplares) VALUES ('$titulo','$genero','$autor','$editora','$paginas','$exemplares')");

    $consulta -> execute();

    header('Location: index.php');


 ?>                                 
        