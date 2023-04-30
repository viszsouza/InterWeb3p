<?php
    include('../php/conn.php');

    //Cadastro Funcionario

    $nome = $_POST["NOME"];
    $email = $_POST["EMAIL"];
    $senha = $_POST["SENHA"];
    $senhaconfirm = $_POST["SENHACONFIRM"];
    $dataa = $_POST["DATANASC"];

//Inserindo dados no Banco

    if (isset($nome) && isset($email) && isset($senha) && isset($senhaconfirm) && isset($dataa)) {

        $insere = "INSERT INTO cadastro_f (nome, email, senha, senhaconfirm, dataa) VALUES ('$nome', '$email', '$senha', '$senhaconfirm', '$dataa')";

        mysqli_query($conn, $insere) or die("Não foi possível executar a inserção");
    }

    header('Location: ../pages/cadastro-funcionario-dono.php');
?>