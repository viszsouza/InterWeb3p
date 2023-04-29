<?php
    include('../php/conn.php');


//Informaçoes do Cliente

    $cliente = $_POST["cliente"];
    $setor = $_POST["setor"];
    $endereco = $_POST["endereco"];
    $cidade = $_POST["cidade"];
    $email = $_POST["email"];
    $whatsapp = $_POST["whatsapp"];

//Inserindo dados no Banco

    if (isset($cliente) && isset($setor) && isset($endereco) && isset($cidade) && isset($email) && isset($whatsapp)) {

        $insere = "INSERT INTO cliente (nome_cliente, setor, endereco, cidade, email, whatsapp) VALUES ('$cliente', '$setor', '$endereco', '$cidade', '$email', '$whatsapp')";

        mysqli_query($conn, $insere) or die("Não foi possível executar a inserção");
    }

//Serviço

    $tipo_servico = $_POST["tipo-servico"];
    $descricao_servico = $_POST["descricao-servico"];
    $limitacao_servico = $_POST["limitacao-servico"];

//Inserindo dados no Banco
    
    if (isset($tipo_servico) && isset($descricao_servico) && isset($limitacao_servico)) {

        $insere = "INSERT INTO servicos (tipo_servico, descricao_servico, limitacao_servico) VALUES ('$tipo_servico', '$descricao_servico', '$limitacao_servico')";

        mysqli_query($conn, $insere) or die("Não foi possível executar a inserção");
    }

//Itens*

    $valor_total_itens = $_POST["valor-total-itens"];


//Mão e Obra*

//Taxas

    $mo_total = $_POST["mo-total"];
    $deslocamento = $_POST["deslocamento"];
    $seguro_garantia = $_POST["seguro-garantia"];
    $seguro_civil = $_POST["seguro-civil"];
    $admin_valor = $_POST["admin-valor"];
    $lucro_valor = $_POST["lucro-valor"];
    $impostos_valor = $_POST["impostos-valor"];
    $taxa_desconto = $_POST["taxa-desconto"];
    $desconto_valor + $_POST["desconto-valor"];

//Inserindo dados no Banco

    if (isset($mo_total) && isset($deslocamento) && isset($seguro_garantia) && isset($seguro_civil) && isset($admin_valor) && isset($lucro_valor) && isset($impostos_valor) && isset($taxa_desconto) && isset($desconto_valor)) {

        $insere = "INSERT INTO taxa (mb_total, deslocamento, seguro_garantia, seguro_civil, admin_valor, lucro_valor, imposto_valor, taxa_desconto, desconto_valor) VALUES ('$mo_total', '$deslocamento', '$seguro_garantia', '$seguro_civil', '$admin_valor', '$luccro_valor', '$impostos_valor', '$taxa_desconto', '$desconto_valor')";

        mysqli_query($conn, $insere) or die("Não foi possível executar a inserção");
    }


//Nome dos Profissionais*

    $nome_profissional1 = $_POST["nome-profissional1"];
    $cft_crea1 = $_POST["cft-crea1"];
    $nome_profissional2 = $_POST["nome-profissional2"];
    $cft_crea2 = $_POST["cft-crea2"];


//Inserindo dados no Banco*

    if (isset($nome_profisional) && isset($cft_crea)) {

        $insere = "INSERT INTO nome_dos_profissionais (nome_profissional, cft_crea) VALUES ('$nome_profisional', '$cft_crea')";

        mysqli_query($conn, $insere) or die("Não foi possível executar a inserção");
    }
    //Formas de Pagamento**

    //Deslocamento

    $distancia = $_POST["distancia"];
    $distancia_valor = $_POST["distancia-valor"];

//Inserindo dados no Banco

    if (isset($distancia) && isset($distancia_valor)) {

        $insere = "INSERT INTO frete (distancia, distancia_valor) VALUES ('$distancia', '$distancia_valor')";

        mysqli_query($conn, $insere) or die("Não foi possível executar a inserção");
    }

//Observações**

    $observacao1 = $_POST["observacao1"];
    $observacao2 = $_POST["observacao2"];
    $observacao3 = $_POST["observacao3"];

//inserindo dados no Banco

    if (isset($observacao1) && isset($observacao2) && isset($observacao3)) {

        $insere = "INSERT INTO observacao (observacao1, observacao2, observacao3) VALUES ('$observacao1', '$observacao2', '$observacao3')";

        mysqli_query($conn, $insere) or die("Não foi possível executar a inserção");
    }

//Prazos

    $validade_orcamento = $_POST["validade-orcamento"];
    $data_servico = $_POST["data-servico"];
    $horario = $_POST["horario"];

//Inserindo dados no Banco

    if (isset($validade_orcamento) && isset($data_servico) && isset($horario)) {

        $insere = "INSERT INTO prazos (validade_orcamento, data_servico, horario) VALUES ('$validade_orcamento', '$data_servico', '$horario')";

        mysqli_query($conn, $insere) or die("Não foi possível executar a inserção");
    }

    //Cliente**

    $nome_cliente =  $_POST['nome-cliente'];
    $cpf_cliente = $_POST['cpf-cliente'];

    if (isset($nome_cliente) && isset($cpf_cliente)) {

        $insere = "INSERT INTO cliente (nome, cpf) VALUES ('$nome_cliente', '$cpf_cliente')";

        mysqli_query($conn, $insere) or die("Não foi possível executar a inserção");
    };

    header('Location: preencherOrcamento-dono.php');
?>