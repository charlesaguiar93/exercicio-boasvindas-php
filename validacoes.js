function validarFormulario() {


let camponome = document.getElementById("nome");
let nome = camponome.value.trim();



if (nome === "") {
    alert("O campo nome é obrigatório.");
    camponome.focus();
    return false;

}


}