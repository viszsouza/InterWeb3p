function adicionarCampoDeItens(id) {
    const linha = document.createElement("div");
    linha.classList.add("linha-itens");

    const campoItem = document.createElement("div");
    campoItem.classList.add("campo");
    campoItem.classList.add("item");
    const inputItem = document.createElement("input");
    inputItem.name = `item${id}`;
    inputItem.type = "text";
    campoItem.appendChild(inputItem);
    linha.appendChild(campoItem);

    const campoQuant = document.createElement("div");
    campoQuant.classList.add("campo");
    campoQuant.classList.add("quant");
    const inputQuant = document.createElement("input");
    inputQuant.name = `quant${id}`;
    inputQuant.type = "text";
    campoQuant.appendChild(inputQuant);
    linha.appendChild(campoQuant);

    const campoMaterialServico = document.createElement("div");
    campoMaterialServico.classList.add("campo");
    campoMaterialServico.classList.add("material-servico");
    const inputMaterialServico = document.createElement("input");
    inputMaterialServico.name = `material-servico${id}`;
    inputMaterialServico.type = "text";
    campoMaterialServico.appendChild(inputMaterialServico);
    linha.appendChild(campoMaterialServico);

    const campoPrecoUnitario = document.createElement("div");
    campoPrecoUnitario.classList.add("campo");
    campoPrecoUnitario.classList.add("preco-unitario");
    const inputPrecoUnitario = document.createElement("input");
    inputPrecoUnitario.name = `preco-unitario${id}`;
    inputPrecoUnitario.type = "text";
    campoPrecoUnitario.appendChild(inputPrecoUnitario);
    linha.appendChild(campoPrecoUnitario);

    const campoPrecoFinal = document.createElement("div");
    campoPrecoFinal.classList.add("campo");
    campoPrecoFinal.classList.add("preco-final");
    const inputPrecoFinal = document.createElement("input");
    inputPrecoFinal.name = `preco-final${id}`;
    inputPrecoFinal.type = "text";
    campoPrecoFinal.appendChild(inputPrecoFinal);
    linha.appendChild(campoPrecoFinal);

    const itens = document.querySelector(".itens");
    const botao = document.querySelector(".itens .adicionar-campos");
    itens.insertBefore(linha, botao);
}

function adicionarCampoDeMO(id) {
    const linha = document.createElement("div");
    linha.classList.add("linha-mo");

    const campoProfissional = document.createElement("div");
    campoProfissional.classList.add("campo");
    campoProfissional.classList.add("mo");
    const inputProfissional = document.createElement("input");
    inputProfissional.type = "text";
    inputProfissional.name = `profissional${id}`;
    campoProfissional.appendChild(inputProfissional);
    linha.appendChild(campoProfissional);

    const campoPessoas = document.createElement("div");
    campoPessoas.classList.add("campo");
    campoPessoas.classList.add("mo");
    const inputPessoas = document.createElement("input");
    inputPessoas.type = "text";
    inputPessoas.name = `pessoas${id}`;
    campoPessoas.appendChild(inputPessoas);
    linha.appendChild(campoPessoas);

    const campoDias = document.createElement("div");
    campoDias.classList.add("campo");
    campoDias.classList.add("mo");
    const inputDias = document.createElement("input");
    inputDias.type = "text";
    inputDias.name = `dias${id}`;
    campoDias.appendChild(inputDias);
    linha.appendChild(campoDias);

    const campoPrecoDia = document.createElement("div");
    campoPrecoDia.classList.add("campo");
    campoPrecoDia.classList.add("mo");
    const inputPrecoDia = document.createElement("input");
    inputPrecoDia.type = "text";
    inputPrecoDia.name = `preco-dia${id}`;
    campoPrecoDia.appendChild(inputPrecoDia);
    linha.appendChild(campoPrecoDia);

    const campoHoras = document.createElement("div");
    campoHoras.classList.add("campo");
    campoHoras.classList.add("mo");
    const inputHoras = document.createElement("input");
    inputHoras.type = "text";
    inputHoras.name = `horas${id}`;
    campoHoras.appendChild(inputHoras);
    linha.appendChild(campoHoras);

    const campoPrecoHoras = document.createElement("div");
    campoPrecoHoras.classList.add("campo");
    campoPrecoHoras.classList.add("mo");
    const inputPrecoHoras = document.createElement("input");
    inputPrecoHoras.type = "text";
    inputPrecoHoras.name = `preco-horas${id}`;
    campoPrecoHoras.appendChild(inputPrecoHoras);
    linha.appendChild(campoPrecoHoras);

    document.querySelector(".mao-de-obra").insertBefore(linha, document.querySelector(".mao-de-obra .adicionar-campos"));
}

function adicionarCampoDeProf(id) {
    const linha = document.createElement("div");
    linha.classList.add("linha-prof");

    const nomeP = document.createElement("p");
    nomeP.textContent = "Nome:";
    linha.appendChild(nomeP);

    const nomeInput = document.createElement("input");
    nomeInput.type = "text";
    nomeInput.name = `nome-profissional${id}`;
    linha.appendChild(nomeInput);

    const cftP = document.createElement("p");
    cftP.textContent = "CFT/CREA:";
    linha.appendChild(cftP);

    const cftInput = document.createElement("input");
    cftInput.type = "text";
    cftInput.name = `cft-crea${id}`;
    linha.appendChild(cftInput);

    document.querySelector(".profissionais").insertBefore(linha, document.querySelector(".profissionais .adicionar-campos"));
}

// Adicionar Campos em ítens
const botaoAdicionarCampoItens = document.querySelector("#adicionar-campos-itens");
botaoAdicionarCampoItens.addEventListener("click", () => {
    adicionarCampoDeItens(document.querySelectorAll(".linha-itens").length + 1);
});

//Adicionar campos em mão de obra
const botaoAdicionarCampoMO = document.querySelector("#adicionar-campos-mo");
botaoAdicionarCampoMO.addEventListener("click", () => {
    adicionarCampoDeMO(document.querySelectorAll(".linha-mo").length + 1);
});

const botaoAdicionarCampoProf = document.querySelector("#adicionar-campos-prof");
botaoAdicionarCampoProf.addEventListener("click", () => {
    adicionarCampoDeProf(document.querySelectorAll(".linha-prof").length + 1);
});

//Data atual
const date = new Date();
const month = +date.getMonth() + 1 > 9 ? +date.geMonth() + 1 : "0" + (date.getMonth() + 1);
document.querySelector(".data-atual").value = `${date.getFullYear()}-${month}-${date.getDate()}`;