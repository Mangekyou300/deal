const btnAddAbility = document.getElementById('add_ability');
const ulAbilities = document.getElementById('abilities');
const inputHabilidades = document.getElementById('habilidades');
const formCreateVaga = document.getElementById('form_create_vaga');
const inputDtAbertura = document.getElementById('dt_abertura');
const abilities = [];

// iniciando a data de início com a data atual
inputDtAbertura.value = new Date().toISOString().slice(0, 10);

btnAddAbility.addEventListener('click', function(event) {

    event.preventDefault();

    addAbilityToArray();

    reloadUlAbilities();
});

formCreateVaga.addEventListener('submit', function(event) {

    event.preventDefault();

    const {titulo, descricao, dt_abertura, dt_fechamento, tipo_vaga } = formCreateVaga;

    const formData = {
        titulo: titulo.value,
        descricao: descricao.value,
        dt_abertura: dt_abertura.value,
        dt_fechamento: dt_fechamento.value,
        habilidades: abilities,
        tipo_vaga: tipo_vaga.value

    }

    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        type: "post",
        url: "/vagas/store",
        data: formData,
        dataType: "json",
        success: function (data) {

            window.location.href = `/vagas/show/${data.id}`;
        },
        error: function(data) {

            const { errors } = data.responseJSON;

            cleanValidationFields();

            showErrorMessages(errors);
        }
    });
});

inputHabilidades.addEventListener('input', function(event){

    if(event.target.value.length >= 3 ){
    btnAddAbility.disabled = false;

    }else{
        btnAddAbility.disabled = true;
    }
});

function addAbilityToArray() {

    const { value } = inputHabilidades;
    abilities.push(value);
}

function removeAbility(index) {

    abilities.splice(index, 1);
    reloadUlAbilities();
}

function reloadUlAbilities() {

    ulAbilities.innerHTML = '';

    if(abilities.length > 0) {

        abilities.forEach((e, i) => {

            const li = document.createElement('li');

            li.innerHTML = `
                <i class="fas fa-angle-double-right"></i>
                <span>${e}</span>
                <button class="less" onclick="removeAbility(${i})">
                <i class="fas fa-minus-circle"></i>
                </button>
                `
            ulAbilities.appendChild(li);
        })
    }

}

function cleanValidationFields() {

    const fields = document.querySelectorAll('.is-invalid');
    const errorMessages = document.querySelectorAll('.invalid-feedback');

    fields.forEach(field => field.classList.remove('is-invalid'));
    errorMessages.forEach(errorMessage => errorMessage.remove());
}

function showErrorMessages(errors) {

    for (const field in errors) {
        // console.log(prop + " = " + errors[prop]);
            const element = $(`#${field}`)
            const parent = element.parent();
            parent.append(`
                <small id="invalid-feedback-${field}" class="invalid-feedback">
                    ${errors[field]}
                </smal>
            `);

            element.addClass('is-invalid');
        }
}
