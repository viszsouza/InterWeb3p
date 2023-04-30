<?php
    include('../php/conn.php');

    //Cadastro Funcionario

    $nome = $_GET["NOME"];
    $email = $_GET["EMAIL"];
    $senha = $_GET["SENHA"];
    $senhaconfirm = $_GET["SENHACONFIRM"];
    $dataa = $_GET["DATANASC"];

//Inserindo dados no Banco

    if (isset($nome) && isset($email) && isset($senha) && isset($senhaconfirm) && isset($dataa)) {

        $insere = "INSERT INTO cadastro_f (nome, email, senha, senhaconfirm, dataa) VALUES ('$nome', '$email', '$senha', '$senhaconfirm', '$dataa')";

        mysqli_query($conn, $insere) or die("Não foi possível executar a inserção");
    }

    header('Location: ../pages/cadastro-funcionario-dono.php');
?>