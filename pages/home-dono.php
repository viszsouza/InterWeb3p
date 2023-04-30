<!DOCTYPE html>
<html class="home" lang="pt-BR">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../styles/home-dono.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sua-integridade-aqui" crossorigin="anonymous"/>
</head>
<body class="home-body">
    <header class="tabs-home">
        <div class="box-imagem">
            <img class="logo-home" src="../images/logo.png" alt="">
            <div class="fundo-logo"></div>
        </div>

        <ul>
            <div class="atual"></div>
            <a href="home-dono.html">
                <li><i class="fas fa-home"></i> Home</li>
            </a>
            <a href="cadastro-funcionario-dono.html">
                <li><i class="fas fa-user-plus"></i> Cadastrar funcionário</li>
            </a>
            <a href="cadastro-cliente-dono.html">
                <li><i class="fas fa-user-plus"></i></i> Cadastrar cliente</li>
            </a>
            <a href="tarifas-dono.html">
                <li><i class="fas fa-file-invoice"></i> Tarifas</li>
            </a>
            <a href="preencherOrcamento-dono.html">
                <li><i class="fas fa-list-alt"></i> Preencher orçamento</li>
            </a>
            <a href="lista-orcamento-dono.html">
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
        <h1>Início</h1>
        <h2>SERVIÇOS</h2>
        <ul>
            <div>
                <li>Serviço #0001  <a href="#"><img src="../images/expandir.png"  width="30" height="30" alt=""></a></li>
                <p class="status01">Em validação</p>
            </div>
            <div>
                <li>Serviço #0002 <a href="#"> <img src="../images/expandir.png"  width="30" height="30" alt=""></a></li>
                <p class="status02">Em execução</p>
            </div>
            <div>
                <li>Serviço #0003 <a href="#"><img src="../images/expandir.png"  width="30" height="30" alt=""></a></li>
                <p class="status03">Finalizado</p>
            </div>
        </ul>
        <div style="display: flex; align-items: center;">
            <button id="more">Ver mais <img id="seta" src="../images/seta-para-baixo.png"></button>
        </div>
    </section>
</body>
</html>