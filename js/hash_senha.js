function hashPassword() {
    var senhaInput = document.getElementById('senha');
    var senha = senhaInput.value;

   
    var senhaHash = CryptoJS.SHA256(senha).toString();

    
    senhaInput.value = senhaHash;

    return true;
}