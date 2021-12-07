const btnAddAbility = document.getElementById('add_ability');
const ulAbilities = document.getElementById('abilities');
const inputHabilidades = document.getElementById('habilidades');
const formCreateVaga = document.getElementById('form_create_vaga');
const abilities = [];
const dt_inicio = document.getElementById('start_date');


const n =  new Date();
const y = n.getFullYear();
const m = n.getMonth() + 1;
const d = n.getDate();

btnAddAbility.addEventListener('click', function(event) {

    event.preventDefault();
    
    addAbilityToArray();

    reloadUlAbilities();
});

formCreateVaga.addEventListener('submit', function(event) {
    event.preventDefault();
    alert("nada não");
});

function addAbilityToArray() {
    
    const { value } = inputHabilidades;
    abilities.push(value);
}

function removeAbility(index){
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

dt_inicio.value = formatDate(`${y}-${m}-${d}`); 


function formatDate(date){
    let [y,m,d] = date.split('-');
    m = String(m).length != 2 ? `0${m}` : String(m);
    d = String(d).length != 2 ? `0${d}` : String(d);
    return `${y}-${m}-${d}`;
}

inputHabilidades.addEventListener('input', function(event){

    if(event.target.value.length >= 3 ){
    btnAddAbility.disabled = false;
        
    }else{
        btnAddAbility.disabled = true;
    }
});
