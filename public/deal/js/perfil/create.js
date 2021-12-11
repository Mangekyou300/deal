const formCreatePerfilContratante = document.forms.create_perfil_contratante;
const divRowNomeFantasia = document.getElementById('row_nome_fantasia');

const { 
    pf_pj: radioPfPj,
    sobre_mim: inputSobreMim, 
    nome_fantasia: inputNomeFantasia,
    cpf_cnpj: inputCpfCnpj

} = formCreatePerfilContratante;

const nomeFantasiaPf = inputNomeFantasia.value;

formCreatePerfilContratante.pf_pj.forEach( e => {

    e.onchange = () => handleFormChanges(radioPfPj.value);

});

function handleFormChanges(perfil) {
    
    if(perfil === 'pf') formChangePF(); else formChangePJ() 
}

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
}
