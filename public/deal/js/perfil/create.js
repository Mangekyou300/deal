const formCreatePerfil = document.forms.namedItem('form_create_perfil')
const {
    avatar: inputAvatar,
    nome_fantasia: inputNomeFantasia,
    cpf_cnpj: inputCpfCnpj,
    dt_nascimento: inputDtNascimento,
    telefone: inputTelefone,
    telefone2: inputTelefone2,
    cep: inputCep,
    logradouro: inputLogradouro,
    numero: inputNumero,
    complemento: inputComplemento,
    bairro: inputBairro,
    cidade: inputCidade,
    sobre_mim: inputSobreMim,
    uf: inputUf } = formCreatePerfil;

formCreatePerfil.addEventListener('submit', function(event) {

    event.preventDefault();

    const formData = {
        avatar: inputAvatar.value,
        nome_fantasia: inputNomeFantasia.value,
        cpf_cnpj: inputCpfCnpj.value,
        dt_nascimento: inputDtNascimento.value,
        telefone: inputTelefone.value,
        telefone2: inputTelefone2.value,
        cep: inputCep.value,
        logradouro: inputLogradouro.value,
        numero: inputNumero.value,
        complemento: inputComplemento.value,
        bairro: inputBairro.value,
        cidade: inputCidade.value,
        sobre_mim: inputSobreMim.value,
        uf: inputUf.value
    }

    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        type: "post",
        url: "/perfil/store",
        data: formData,
        dataType: "json",
        success: function (data) {

            window.location.href = `/perfil/show/${data.id}`;
        },
        error: function(data) {

            const { errors } = data.responseJSON;

            const validation = new Validation(errors);

            validation.cleanValidationFields();

            validation.showErrorMessages();
        }
    });
});
