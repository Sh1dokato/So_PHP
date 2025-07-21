document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("formCadastro");

    form.addEventListener("submit", function (event) {
        event.preventDefault();

        const nome = form.nome.value.trim();
        const cpf = form.cpf.value.trim();
        const telefone = form.telefone.value.trim();
        const email = form.email.value.trim();
        const cep = form.cep.value.trim();
        const senha = form.senha.value;
        const repetirSenha = form.repetirSenha.value;

        if (!nome || !cpf || !telefone || !email || !cep || !senha || !repetirSenha) {
            alert("Por favor, preencha todos os campos.");
            return;
        }

        const regexCPF = /^\d{11}$/;
        if (!regexCPF.test(cpf)) {
            alert("CPF inválido. Digite apenas os 11 números.");
            return;
        }
        if (!regexEmail.test(email)) {
            alert("Email inválido.");
            return;
        }

        if (senha.length < 6) {
            alert("A senha deve ter no mínimo 6 caracteres.");
            return;
        }

        if (senha !== repetirSenha) {
            alert("As senhas não coincidem.");
            return;
        }

        alert("Cadastro realizado com sucesso!");
        form.reset(); // limpa o formulário após sucesso
    });
});
