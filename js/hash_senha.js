function hashPassword() {
    var senhaInput = document.getElementById('senha');
    var senha = senhaInput.value;

    // Hashear a senha usando SHA-256
    var senhaHash = CryptoJS.SHA256(senha).toString();

    // Substituir o valor do campo de senha pelo hash
    senhaInput.value = senhaHash;

    return true; // Prosseguir com o envio do formulário
}