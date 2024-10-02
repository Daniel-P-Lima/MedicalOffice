function calcularHash() {
    var senha = document.getElementById("senha").value;
    var hash = CryptoJS.SHA256(senha);

    senha.value = hash;
    return hash;

}