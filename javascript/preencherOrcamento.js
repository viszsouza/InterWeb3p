/*  <div class="linha">
        <div class="campo item">
            <label for="item">Item</label>
            <input type="text" id="item" name="item1">
        </div>
        <div class="campo quant">
            <label for="quant">Quant</label>
            <input type="text" id="quant" name="quant1">
        </div>
        <div class="campo material-servico">
            <label for="material-servico">Material - Serviço</label>
            <input type="text" id="material-servico" name="material-servico1">
        </div>
        <div class="campo preco-final">
            <label for="ptrco-final">Preço final</label>
            <input type="text" id="preco-final" name="preco-final1">
        </div>
    </div> 
*/

function adicionarItens(id) {
    const linha = document.createElement("div");
    linha.classList.add("linha");
    linha.id = `linha${id}`;

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

    const campoPrecoFinal = document.createElement("div");
    campoPrecoFinal.classList.add("campo");
    campoPrecoFinal.classList.add("preco-final");
    const inputPrecoFinal = document.createElement("input");
    inputPrecoFinal.name = `preco-final${id}`;
    inputPrecoFinal.type = "text";
    campoPrecoFinal.appendChild(inputPrecoFinal);
    linha.appendChild(campoPrecoFinal);

    const itens = document.querySelector(".itens");
    const botao = document.querySelector(".adicionar-campos");
    itens.insertBefore(linha, botao);
}

function adicionarCampoDeTecnico(id) {
    const campo = document.createElement("input");
    campo.name = `tecnico${id}`;
    document.querySelector(".tecnicos").insertBefore(".adicionar-tecnicos");
}

const adicionarCampo = document.querySelector("#adicionar-campos");
adicionarCampo.addEventListener("click", () => {
    adicionarItens(Array.from(document.querySelectorAll(".linha")).length);
});
const adicionarTecnico = document.querySelector("#adicionar-tecnicos");
adicionarTecnico.addEventListener("click", () => {
    adicionarCampoDeTecnico(Array.from(document.querySelectorAll(".tecnicos input")).length);
});