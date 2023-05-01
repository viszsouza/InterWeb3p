<?php
    include('../php/conn.php');

    $sql_code_servicos = "SELECT tipo_servico FROM servicos";
    $sql_query_servicos = $conn->query($sql_code_servicos) or die ("Erro ao consultar!");

    $sql_code_orcamento = "SELECT id_orcamento_final FROM ver_orcamento_final";
    $sql_query_orcamento = $conn->query($sql_code_orcamento) or die ("Erro ao consultar!");
?>

<!DOCTYPE html>
<html class="home" lang="pt-BR">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista orçamento</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sua-integridade-aqui" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../styles/lista-orcamento-dono.css">
    <style>
        h1#titulo {
            margin-bottom: 15px;
        }
        div.container {
            display: flex;
            width: 100%;
            margin-top: 20px;
            padding: 0 7em 0 7em;
        }

        div.campos label {
            display: block;
            color: black;
            margin-left: 10px;
            font-size: .7em;
        }

        div.campos input {
            background-color: #D9D9D9;
            border: none;
            height: 35px;
            border-radius: 10px;
            font-size: .9em;
            padding-left: 5px; 
        }

        div.campo1 input {
            width: 75%;
            font-size: 1em;
            
        }

        div.campo2 {
            margin-left: 5px;
        }
        div.campo2 input {
            width: 31em;
        }

        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        } 
    </style>
</head>
<body class="home-body">
    <header class="tabs-home">
        <div class="box-imagem">
            <img class="logo-home" src="../images/logo.png" alt="">
            <div class="fundo-logo"></div>
        </div>

        <ul>
            <a href="home-dono.php">
                <li><i class="fas fa-home"></i> Home</li>
            </a>
            <a href="cadastro-funcionario-dono.php">
                <li><i class="fas fa-user-plus"></i> Cadastrar funcionário</li>
            </a>
            <a href="cadastro-cliente-dono.php">
                <li><i class="fas fa-user-plus"></i></i> Cadastrar cliente</li>
            </a>
            <a href="tarifas-dono.php">
                <li><i class="fas fa-file-invoice"></i> Tarifas</li>
            </a>
            <a href="preencherOrcamento-dono.php">
                <li><i class="fas fa-list-alt"></i> Preencher orçamento</li>
            </a>
            <div class="atual"></div>
            <a href="lista-orcamento-dono.php">
                <li><i class="fas fa-check-circle"></i> Lista de orçamentos</li>
            </a>
        </ul>

        <div class="user">
            <div class="user-image">
                
            </div>
            <p>Usuário: Dono</p>
        </div>
    </header>

    <section class="section-home">
        <h1 id="titulo">Lista de orçamentos</h1>

        <h1>
        <?php 
            if (($sql_query_servicos->num_rows == 0) || ($sql_query_orcamento->num_rows == 0)) {
                echo ("Não há nenhum orçamento no banco de dados...");
        ?>
        </h1>

        <?php
            }
            else {
                while (($dados_servicos = $sql_query_servicos->fetch_assoc()) && ($dados_orcamento = $sql_query_orcamento->fetch_assoc())) {
                    echo '
                    <div class="container">
                        <div class="campos campo1">
                            <label>Id</label>
                            <input type="number" name="id" value="'. $dados_orcamento['id'] .'" readonly>
                        </div>
                        <div class="campos campo2">
                            <label>Tipo do serviço</label>
                            <input type="text" name="tipo_servico" value="' . $dados_servicos['tipo_servico'] . '" readonly>
                        </div>
                    </div>';
                }
            };
        ?>
        
        <!--
        <div class="container">
            <div class="campos campo1">
                <label>Id</label>
                <input type="number" name="id">
            </div>
            <div class="campos campo2">
                <label>Tipo do serviço</label>
                <input type="text" name="tipo_servico">
            </div>
        </div>
        -->
    </section>
</body>
</html>