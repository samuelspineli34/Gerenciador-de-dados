//O Javascript vai ser utilizado só para realizar validações sem precisar recarregar a página

document.addEventListener("DOMContentLoaded", function () {
    document.querySelector("form").addEventListener("submit", function (event) {

        //Recebe os dados do formulário
        var nome = document.getElementById("nome").value;
        var idade = document.getElementById("idade").value;
        var sexo = document.getElementById("sexo").value;

        //Verifica os dados
        if (nome.trim() === "" || isNaN(idade) || idade > 124 || idade < 1 || (sexo !== 'M' && sexo !== 'F')) {
            event.preventDefault(); //Evita o envio do formulário
            alert("Dados inválidos, tente novamente.");
        }
    });
});
