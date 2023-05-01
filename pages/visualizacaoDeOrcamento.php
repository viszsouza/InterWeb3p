<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sua-integridade-aqui" crossorigin="anonymous" />
    <link rel="stylesheet" href="../styles/visualizacaoDeOrcamento.css">
    <title>Orcamento</title>
</head>
<body>
    <main>
        <h1>Orçamento</h1>
        <div class="campo numero">
            <p class="label">Nᵒ do Orçamento</p>
            <p class="input"></p>
        </div>
        <div class="campo data">
            <p class="label">Data em que foi feito</p>
            <p class="input"></p>
        </div>
        <div class="servico-informacoes">
            <h2>Informações do Serviço</h2>
            <div class="campo">
                <p class="label">Tipo de serviço</p>
                <p class="input"></p>
            </div>
            <div class="campo">
                <p class="label">Descrição detalhada do serviço</p>
                <p class="input textarea"></p>
            </div>
            <div class="campo">
                <p class="label">Limitações do serviço</p>
                <p class="input textarea"></p>
            </div>
        </div>
        <div class="servicos">
            <h2>Materiais / Serviços</h2>
            <div class="linha-servicos-nome">
                <p class="label">Item</p>
                <p class="label">Quant</p>
                <p class="label">Material / Serviço</p>
                <p class="label">Preço Unitário</p>
                <p class="label">Preço Final</p>
            </div>
            <div class="linha-servicos">
                <p class="input"></p>
                <p class="input"></p>
                <p class="input"></p>
                <p class="input"></p>
                <p class="input"></p>
            </div>
            <div class="linha-servicos">
                <p class="input"></p>
                <p class="input"></p>
                <p class="input"></p>
                <p class="input"></p>
                <p class="input"></p>
            </div>
            <div class="linha-servicos">
                <p class="input"></p>
                <p class="input"></p>
                <p class="input"></p>
                <p class="input"></p>
                <p class="input"></p>
            </div>
            <div class="linha-servicos">
                <p class="input"></p>
                <p class="input"></p>
                <p class="input"></p>
                <p class="input"></p>
                <p class="input"></p>
            </div>
        </div>
        <div class="mo">
            <h2>Mão de Obra</h2>
            <div class="linha-mo-nome">
                <p class="label">Função</p>
                <p class="label">Pessoas</p>
                <p class="label">Dias</p>
                <p class="label">Dias R$</p>
                <p class="label">Horas</p>
                <p class="label">Horas R$</p>
            </div>
            <div class="linha-mo">
                <p class="input"></p>
                <p class="input"></p>
                <p class="input"></p>
                <p class="input"></p>
                <p class="input"></p>
                <p class="input"></p>
            </div>
            <div class="linha-mo">
                <p class="input"></p>
                <p class="input"></p>
                <p class="input"></p>
                <p class="input"></p>
                <p class="input"></p>
                <p class="input"></p>
            </div>
            <div class="linha-mo">
                <p class="input"></p>
                <p class="input"></p>
                <p class="input"></p>
                <p class="input"></p>
                <p class="input"></p>
                <p class="input"></p>
            </div>
            <div class="linha-mo">
                <p class="input"></p>
                <p class="input"></p>
                <p class="input"></p>
                <p class="input"></p>
                <p class="input"></p>
                <p class="input"></p>
            </div>
        </div>
        <div class="taxas">
            <h2>Taxas</h2>
            <div class="linha-taxa">
                <p class="input taxa-mo"><b>Mão de Obra</b></p>
                <p class="input"></p>
            </div>
            <div class="linha-taxa">
                <p class="input taxa-deslocamento"><b>Deslocamento</b></p>
                <p class="input"></p>
            </div>
            <div class="linha-taxa">
                <p class="input"><b>Seguro Garantia</b></p>
                <p class="input"></p>
                <p class="input"></p>
            </div>
            <div class="linha-taxa">
                <p class="input"><b>Seguro Respon. Civil</b></p>
                <p class="input"></p>
                <p class="input"></p>
            </div>
            <div class="linha-taxa">
                <p class="input"><b>TX ADMINISTRATIVA</b></p>
                <p class="input"></p>
                <p class="input"></p>
            </div>
            <div class="linha-taxa">
                <p class="input"><b>LUCRO</b></p>
                <p class="input"></p>
                <p class="input"></p>
            </div>
            <div class="linha-taxa">
                <p class="input"><b>IMPOSTOS</b></p>
                <p class="input"></p>
                <p class="input"></p>
            </div>
            <div class="linha-taxa">
                <p class="input desconto"><b>DESCONTO à vista(%)</b></p>
                <p class="input desconto-taxa"></p>
                <p class="input desconto"></p>
            </div>
        </div>
        <div class="profissionais">
            <h2>Nome dos profissionais</h2>
            <div class="linha-profissionais-nome">
                <p class="label">Nome</p>
                <p class="label">CFT/CREA</p>
            </div>
            <div class="linha-profissionais">
                <p class="input"></p>
                <p class="input"></p>
            </div>
            <div class="linha-profissionais">
                <p class="input"></p>
                <p class="input"></p>
            </div>
        </div>
        <div class="pagamento">
            <h2>Formas de Pagamento</h2>
            <div>
                <div class="campo">
                    <p class="label">Banco</p>
                    <p class="input"></p>
                </div>
                <div class="campo">
                    <p class="label">Agência</p>
                    <p class="input"></p>
                </div>
                <div class="campo">
                    <p class="label">Conta Corrente</p>
                    <p class="input"></p>
                </div>
            </div>
            <p class="input"><b>PIX:</b><span></span></p>
            <p class="input"><b>Email:</b><span></span>placeservicos@gmail.com</p>
        </div>
        <div class="valor-total">
            <h2>Deslocamento</h2>
            <div class="campo">
                <p class="label">Distância</p>
                <p class="input"></p>
            </div>
            <div class="campo">
                <p class="label">Valor / KM</p>
                <p class="input"></p>
            </div>
            <div class="campo">
                <h2>Valor Total</h2>
                <p class="input valor-total-preco">R$27873.09</p>
            </div>
        </div>
        <div class="observacao">
            <h2>Observações</h2>
            <div class="campo-observacoes">
                <p class="label">1 - Se o serviço não por problemas estruturais do imóvel ou outro de responsabilidade do
                    cliente, este deverá pagar o valor referente á visita técnica, frete e logística do serviço programado.</p>
                <p class="input"></p>
            </div>
            <div class="campo-observacoes">
                <p class="label">2 - Caso haja desistência e cancelamento do serviço, o cliente deverá pagar o valor da
                    compra de material e insumos e multa de 20% do valor do serviço.
                </p>
                <p class="input"></p>
            </div>
            <div class="campo-observacoes">
                <p class="label">3 - O Cliente pagará o valor antecipado como adiantamento e garantia da execuação do
                    serviço, compra de materiais e insumos, no valor de:
                </p>
                <p class="input"></p>
            </div>
        </div>
        <div class="prazos">
            <h2>Prazos</h2>
            <div class="campo">
                <p class="label">Quantidade de dias do prazo de validade do Orçamento</p>
                <p class="input"></p>
            </div>
            <div class="campo">
                <p class="label">Data do Serviço</p>
                <p class="input"></p>
            </div>
            <div class="campo">
                <p class="label">Horário</p>
                <p class="input"></p>
            </div>
        </div>
    </main>
</body>
</html>