<?php

    include("conexao.php");

    $usuario = $_POST['usuario'];
    $endereço = $_POST['endereço'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $senha2 = $_POST['senha2'];

    $sql =  "INSERT INTO usuarios(usuario,endereço,
    email,telefone,senha,senha2)
    VALUES('$usuario','$endereço','$email','$telefone','$senha','$senha2')";

    if(mysqli_query($conexao,$sql)){
        echo "Cadastro realizado com sucesso";
    }else{
        echo "erro : ".mysqli_connect_error($conexao);
    }

    mysqli_close($conexao);
?>