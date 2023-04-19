function mudarPrecoTotal() {
    const valorItens = +document.querySelector("#valor-total-itens").value.replace("R$", "").replace(/(\.)\d{3}/, "").replace(",", ".");
    const valorMO = +document.querySelector("#mo-total").value.replace("R$", "").replace(/(\.)\d{3}/, "").replace(",", ".");
    const deslocamento = +document.querySelector("#deslocamento").value.replace("R$", "").replace(/(\.)\d{3}/, "").replace(",", ".");
    document.querySelector("#valor-total").textContent = "R$" + (valorItens + valorMO + deslocamento).toFixed(2);
}

function mudarPrecoTotalItens() {
    const listaDePrecos = Array.from(document.querySelectorAll(".preco-final"));
    document.querySelector("#valor-total-itens").value = "R$" + listaDePrecos.reduce((total, item) => {
        return (total + +item.value.replace("R$", "").replace(/(\.)\d{3}/, "").replace(",", "."));
    }, 0).toFixed(2);
    mudarPrecoTotal();
}

function mudarPrecoTotalMO() {
    const listaDePrecos = Array.from(document.querySelectorAll(".precoMO"));
    document.querySelector("#mo-total").value = "R$" + listaDePrecos.reduce((total, item) => {
        return (total + +item.value);
    }, 0).toFixed(2);
    mudarPrecoTotal();
}

function adicionarCampoDeItens(id) {
    const linha = document.createElement("div");
    linha.classList.add("linha-itens");

    const campoItem = document.createElement("div");
    campoItem.classList.add("campo");
    campoItem.classList.add("item");
    const inputItem = document.createElement("input");
    inputItem.name = `item${id}`;
    inputItem.type = "text";
    inputItem.readOnly = true;
    inputItem.value = id > 9 ? id : "0" + id;
    
    const campoQuant = document.createElement("div");
    campoQuant.classList.add("campo");
    campoQuant.classList.add("quant");
    const inputQuant = document.createElement("input");
    inputQuant.name = `quant${id}`;
    inputQuant.type = "text";

    const campoMaterialServico = document.createElement("div");
    campoMaterialServico.classList.add("campo");
    campoMaterialServico.classList.add("material-servico");
    const inputMaterialServico = document.createElement("input");
    inputMaterialServico.name = `material-servico${id}`;
    inputMaterialServico.type = "text";

    const campoPrecoUnitario = document.createElement("div");
    campoPrecoUnitario.classList.add("campo");
    campoPrecoUnitario.classList.add("preco-unitario");
    const inputPrecoUnitario = document.createElement("input");
    inputPrecoUnitario.name = `preco-unitario${id}`;
    inputPrecoUnitario.type = "text";

    const campoPrecoFinal = document.createElement("div");
    campoPrecoFinal.classList.add("campo");
    const inputPrecoFinal = document.createElement("input");
    inputPrecoFinal.classList.add("preco-final");
    inputPrecoFinal.name = `preco-final${id}`;
    inputPrecoFinal.type = "text";
    inputPrecoFinal.value = "R$0.00"
    inputPrecoFinal.readOnly = true;

    inputQuant.addEventListener("input", () => {
        const quant = inputQuant.value === ""? 0 : +inputQuant.value;
        const valorUnitarioStr = inputPrecoUnitario.value.replace("R$", "").replace(/(\.)\d{3}/, "").replace(",", ".");
        const valorUnitarioNumero = valorUnitarioStr === ""? 0 : +valorUnitarioStr;
        inputPrecoFinal.value = "R$" + (quant * valorUnitarioNumero).toFixed(2); 
        mudarPrecoTotalItens();
    });

    inputPrecoUnitario.addEventListener("input", () => {
        const quant = inputQuant.value === ""? 0 : +inputQuant.value;
        const valorUnitarioStr = inputPrecoUnitario.value.replace("R$", "").replace(/(\.)\d{3}/, "").replace(",", ".");
        const valorUnitarioNumero = valorUnitarioStr === ""? 0 : +valorUnitarioStr;
        inputPrecoFinal.value = "R$" + (quant * valorUnitarioNumero).toFixed(2);
        inputPrecoUnitario.value = "R$" + valorUnitarioStr;
        mudarPrecoTotalItens();
    });
    
    campoItem.appendChild(inputItem);
    linha.appendChild(campoItem);
    campoQuant.appendChild(inputQuant);
    linha.appendChild(campoQuant);
    campoMaterialServico.appendChild(inputMaterialServico);
    linha.appendChild(campoMaterialServico);
    campoPrecoUnitario.appendChild(inputPrecoUnitario);
    linha.appendChild(campoPrecoUnitario);
    campoPrecoFinal.appendChild(inputPrecoFinal);
    linha.appendChild(campoPrecoFinal);
    document.querySelector(".itens").insertBefore(linha, document.querySelector(".itens .adicionar-campos"));
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
    
    const campoPessoas = document.createElement("div");
    campoPessoas.classList.add("campo");
    campoPessoas.classList.add("mo");
    const inputPessoas = document.createElement("input");
    inputPessoas.type = "text";
    inputPessoas.name = `pessoas${id}`;
    
    const campoDias = document.createElement("div");
    campoDias.classList.add("campo");
    campoDias.classList.add("mo");
    const inputDias = document.createElement("input");
    inputDias.type = "text";
    inputDias.name = `dias${id}`;
    
    const campoPrecoDia = document.createElement("div");
    campoPrecoDia.classList.add("campo");
    campoPrecoDia.classList.add("mo");
    const inputPrecoDia = document.createElement("input");
    inputPrecoDia.type = "text";
    inputPrecoDia.name = `preco-dia${id}`;
    
    const campoHoras = document.createElement("div");
    campoHoras.classList.add("campo");
    campoHoras.classList.add("mo");
    const inputHoras = document.createElement("input");
    inputHoras.type = "text";
    inputHoras.name = `horas${id}`;
    
    const campoPrecoHoras = document.createElement("div");
    campoPrecoHoras.classList.add("campo");
    campoPrecoHoras.classList.add("mo");
    const inputPrecoHoras = document.createElement("input");
    inputPrecoHoras.type = "text";
    inputPrecoHoras.name = `preco-horas${id}`;
    
    const precoMO = document.createElement("input");
    precoMO.classList.add("precoMO");
    precoMO.id = `precoMO${id}`;
    precoMO.disabled = true;
    precoMO.style.display = "none";
    
    function mudarPrecoMO(pessoas, dias, precoDia, horas, precoHoras, precoMO) {
        const precoDiaNum = +precoDia.value.replace("R$", "").replace(/(\.)\d{3}/, "").replace(",", ".");
        const precoHorasNum = +precoHoras.value.replace("R$", "").replace(/(\.)\d{3}/, "").replace(",", ".");
        precoMO.value = (+pessoas.value * ((dias.value * precoDiaNum) + (horas.value * precoHorasNum))).toFixed(2);
        mudarPrecoTotalMO();
    }

    inputPessoas.addEventListener("input", () => {mudarPrecoMO(inputPessoas, inputDias, inputPrecoDia, inputHoras, inputPrecoHoras, precoMO);});

    inputDias.addEventListener("input", () => {mudarPrecoMO(inputPessoas, inputDias, inputPrecoDia, inputHoras, inputPrecoHoras, precoMO);});

    inputPrecoDia.addEventListener("input", () => {mudarPrecoMO(inputPessoas, inputDias, inputPrecoDia, inputHoras, inputPrecoHoras, precoMO);});

    inputHoras.addEventListener("input", () => {mudarPrecoMO(inputPessoas, inputDias, inputPrecoDia, inputHoras, inputPrecoHoras, precoMO);});

    inputPrecoHoras.addEventListener("input", () => {mudarPrecoMO(inputPessoas, inputDias, inputPrecoDia, inputHoras, inputPrecoHoras, precoMO);});

    campoProfissional.appendChild(inputProfissional);
    linha.appendChild(campoProfissional);
    campoPessoas.appendChild(inputPessoas);
    linha.appendChild(campoPessoas);
    campoDias.appendChild(inputDias);
    linha.appendChild(campoDias);
    campoPrecoDia.appendChild(inputPrecoDia);
    linha.appendChild(campoPrecoDia);
    campoHoras.appendChild(inputHoras);
    linha.appendChild(campoHoras);
    campoPrecoHoras.appendChild(inputPrecoHoras);
    linha.appendChild(campoPrecoHoras);
    linha.appendChild(precoMO);
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
adicionarCampoDeItens(document.querySelectorAll(".linha-itens").length);
adicionarCampoDeItens(document.querySelectorAll(".linha-itens").length);
adicionarCampoDeItens(document.querySelectorAll(".linha-itens").length);
adicionarCampoDeItens(document.querySelectorAll(".linha-itens").length);
const botaoAdicionarCampoItens = document.querySelector("#adicionar-campos-itens");
botaoAdicionarCampoItens.addEventListener("click", () => {
    adicionarCampoDeItens(document.querySelectorAll(".linha-itens").length);
});

//Adicionar campos em mão de obra
adicionarCampoDeMO(document.querySelectorAll(".linha-mo").length);
adicionarCampoDeMO(document.querySelectorAll(".linha-mo").length);
const botaoAdicionarCampoMO = document.querySelector("#adicionar-campos-mo");
botaoAdicionarCampoMO.addEventListener("click", () => {
    adicionarCampoDeMO(document.querySelectorAll(".linha-mo").length);
});

//Adicionar campos em profissionais
const botaoAdicionarCampoProf = document.querySelector("#adicionar-campos-prof");
botaoAdicionarCampoProf.addEventListener("click", () => {
    adicionarCampoDeProf(document.querySelectorAll(".linha-prof").length + 1);
});

//Data atual
const date = new Date();
const month = +date.getMonth() + 1 > 9 ? +date.geMonth() + 1 : "0" + (date.getMonth() + 1);
document.querySelector(".data-atual").value = `${date.getFullYear()}-${month}-${date.getDate()}`;

//Cálculo de deslocamnto 
const distancia = document.querySelector("#distancia");
const distanciaValor = document.querySelector("#distancia-valor");
distancia.addEventListener("input", () => {
    document.querySelector("#deslocamento").value = "R$" + (+distancia.value * +distanciaValor.value).toFixed(2);
    mudarPrecoTotal();
});
distanciaValor.addEventListener("input", () => {
    document.querySelector("#deslocamento").value = "R$" + (+distancia.value * +distanciaValor.value).toFixed(2);
    mudarPrecoTotal();
});