const { pf_pj: radioPfPj} = formCreatePerfil;

const divRowNomeFantasia = document.getElementById('row_nome_fantasia');

const nomeFantasiaPf = inputNomeFantasia.value;

radioPfPj.forEach( e => e.onchange = () => handleFormChanges(radioPfPj.value) );

const handleFormChanges = perfil => perfil === 'pf' ? formChangePF() : formChangePJ();

function formChangePF() {

    // esconder o input "nome fantasia"
    divRowNomeFantasia.classList.add('d-none');
    inputNomeFantasia.value = nomeFantasiaPf;

    // mudar de sobre a empresa para sobre mim
    inputSobreMim.labels[0].textContent = 'Sobre mim';
    inputSobreMim.nextElementSibling.textContent = 'Ajude às pessoas a te conhcerem melhor!';

    // mudar label de cnpj para cpf (alterar o placeholder)
    inputCpfCnpj.placeholder = 'Informe o CPF';
    inputCpfCnpj.labels[0].textContent = 'CPF';

    // mudar label de "data de criação da empresa" para "data de nascimento"
    inputDtNascimento.labels[0].textContent = "Data de nascimento";
}

function formChangePJ() {

    // exibir o input "nome fantasia"
    divRowNomeFantasia.classList.remove('d-none');

    // exibir o input "nome fantasia"
    inputNomeFantasia.value = "";
    inputNomeFantasia.placeholder = "Insira o nome fantasia da organização.";

    // mudar de sobre mim para sobre a empresa
    inputSobreMim.labels[0].textContent = 'Sobre a Empresa';
    inputSobreMim.nextElementSibling.textContent = 'Ajude as pessoas a conhecerem melhor sua Organização.';

    // mudar label de cpf para cnpj (alterar o placeholder)
    inputCpfCnpj.placeholder = 'Informe o CNPJ';
    inputCpfCnpj.labels[0].textContent = 'CNPJ';

    // mudar o label de "data de nascimento" para "data de criação da empresa"
    inputDtNascimento.labels[0].textContent = "Criação da empresa";

}
