<?php 
    include_once("conexao.php");


    $nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING );
    $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL );
    $telefone = filter_input(INPUT_POST,'telefone', FILTER_SANITIZE_STRING );
    $mensagem = filter_input(INPUT_POST,'mensagem', FILTER_SANITIZE_STRING );

    //echo "nome: $nome <br>";
    //echo "email: $email <br>";
    //echo "telefone: $telefone <br>";
    //echo "mensagem: $mensagem <br>";

$result_usuario = "INSERT INTO CONTATO (Nome, Email, Telefone, Comentario) VALUES ('$nome','$email','$telefone','$mensagem' )";
$resultado_usuario = mysqli_query($conn, $result_usuario);
