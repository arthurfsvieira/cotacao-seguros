document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');

    form.addEventListener('submit', function (event) {
        let isValid = true;

        const nome = document.getElementById('nome').value.trim();
        const email = document.getElementById('email').value.trim();
        const valorCarro = parseFloat(document.getElementById('valor_carro').value.trim());

        if (nome === "") {
            alert("Por favor, insira o seu nome completo.");
            isValid = false;
        }

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert("Por favor, insira um email válido");
            isValid = false;
        }

        if (isNaN(valorCarro) || valorCarro <= 0) {
            alert("O valor do carro deve ser um número positivo e maior que zero.");
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault();
        }


    });


});