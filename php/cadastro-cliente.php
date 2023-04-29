<?php
    include('../php/conn.php');
    //Cadastro Cliente

    $nome = $_POST["NOME"];
    $cnpj = $_POST["cnpj"];
    $contato = $_POST["contato"];
    $endereco = $_POST["endereco"];
    $email = $_POST["email"];
    $bairro = $_POST["bairro"];
    $n_endereco = $_POST["n-endereco"];
    $complemento = $_POST["complemento"];

//Inserindo dados no Banco

    if (isset($nome) && isset($cnpj) && isset($contato) && isset($endereco) && isset($email) && isset($bairro) && isset($n_endereco)
    && isset($complemento)) {

        $insere = "INSERT INTO cadastro_c (nome, cnpj, contato, endereco, email, bairro, n_endereco, complemento) VALUES ('$nome', '$cnpj', '$contato', '$endereco', '$email', '$bairro', '$n_endereco', '$complemento')";

        mysqli_query($conn, $insere) or die("Não foi possível executar a inserção");
    }
    
    header('Location: cadastro-cliente-dono.php');
    header('Location: cadastro-cliente-funcionario.php');
?>