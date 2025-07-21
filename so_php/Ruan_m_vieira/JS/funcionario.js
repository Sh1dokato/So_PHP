document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("formFuncionario");

    form.addEventListener("submit", function (event) {
        event.preventDefault();

        const nome = form.nome.value.trim();
        const email = form.email.value.trim();
        const telefone = form.telefone.value.trim();
        const cpfcnpj = form.cpfcnpj.value.trim();
        const admissao = form.admissao.value;
        const endereco = form.endereco.value.trim();
        const cargo = form.cargo.value;

        if (!nome || !email || !telefone || !cpfcnpj || !admissao || !endereco || !cargo) {
            alert("Por favor, preencha todos os campos.");
            return;
        }

        const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!regexEmail.test(email)) {
            alert("Email inválido.");
            return;
        }

        const regexTelefone = /^\d{10,11}$/;
        if (!regexTelefone.test(telefone)) {
            alert("Telefone inválido. Digite somente números com DDD.");
            return;
        }

        const regexCPF = /^\d{11}$/;
        const regexCNPJ = /^\d{14}$/;
        if (!regexCPF.test(cpfcnpj) && !regexCNPJ.test(cpfcnpj)) {
            alert("CPF/CNPJ inválido. Use 11 (CPF) ou 14 (CNPJ) dígitos numéricos.");
            return;
        }

        alert("Funcionário cadastrado com sucesso!");
        form.reset();
    });
});
