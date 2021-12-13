const photoContainer = document.querySelector('.photo-container');
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

// script para lidar com a imagem
inputAvatar.onchange = async event => {

    if(!inputAvatar.value) {

        inputAvatar.innerHTML = `<i class="far fa-user"></i>`;
        return;
    } 

    event.preventDefault();

    photoContainer.innerHTML = `<i class="far fa-spinner load"></i>`;

    const file = inputAvatar.files[0];
    const fileReader = new FileReader();

    await loadImage(file, fileReader);
    
}

document.querySelector('.btn-remove-avatar').onclick = event => {

    event.preventDefault();
    inputAvatar.value = ""
    photoContainer.innerHTML = `<i class="far fa-user"></i>`;
} 

async function loadImage(file, fileReader) {

    fileReader.onload = function() {
        const img = document.createElement('img');
        img.src = fileReader.result;
        photoContainer.children[0].classList.add('d-none');
        photoContainer.appendChild(img);
    };
    fileReader.readAsDataURL(file);
}