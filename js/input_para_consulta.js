document.addEventListener('DOMContentLoaded', function () {
    const alertBox = document.getElementById('alertBox');
    const alertHeading = document.getElementById('alertHeading');
    const alertMessage = document.getElementById('alertMessage');

    document.getElementById('data').addEventListener('input', function (e) {
        var input = e.target;
        var value = input.value;
        var length = value.length;

        // Impede que caracteres não numéricos sejam digitados
        if (isNaN(value[length - 1])) {
            input.value = value.substring(0, length - 1);
            return;
        }

        // Adiciona as barras nas posições corretas (formato DD/MM/AAAA)
        if (length === 2 || length === 5) {
            input.value += '/';
        }
    });
    
    // Valida a data no evento de 'blur' (quando o campo perde o foco)
    document.getElementById('data').addEventListener('blur', function () {
        var input = this.value;
        var dateParts = input.split('/');
        
        if (dateParts.length === 3) {
            var day = parseInt(dateParts[0], 10);
            var month = parseInt(dateParts[1], 10);
            var year = parseInt(dateParts[2], 10);
            var today = new Date();
            var selectedDate = new Date(year, month - 1, day);

            // Verifica se a data é válida e se é posterior ao dia de hoje
            if (selectedDate < today) {
                // Atualiza o alerta para mostrar a mensagem de erro
                alertHeading.textContent = 'Data Inválida';
                alertMessage.textContent = 'A data deve ser posterior ao dia atual.';
                alertBox.classList.remove('d-none'); // Torna o alerta visível
                this.value = '';  // Limpa o campo
            } else {
                alertBox.classList.add('d-none'); // Oculta o alerta se a data for válida
            }
        } else {
            // Atualiza o alerta para mostrar a mensagem de erro
            alertHeading.textContent = 'Formato Inválido';
            alertMessage.textContent = 'O formato da data deve ser DD/MM/AAAA.';
            alertBox.classList.remove('d-none'); // Torna o alerta visível
            this.value = '';  // Limpa o campo
        }
    });
});