const btnAddAbility = document.getElementById('add_ability');
const ulAbilities = document.getElementById('abilities');
const inputHabilidades = document.getElementById('habilidades');
const abilities = [];

btnAddAbility.addEventListener('click', function(event) {

    event.preventDefault();
    
    addAbilityToArray();

    reloadUlAbilities();
});

function addAbilityToArray() {
    
    const { value } = inputHabilidades;
    abilities.push(value);
}

function reloadUlAbilities() {

    ulAbilities.innerHTML = '';

    if(abilities.length > 0) {

        abilities.forEach(e => {

            const li = document.createElement('li');

            li.innerHTML = `
                <i class="fas fa-angle-double-right"></i>
                <span>${e}</span>
            `
            ulAbilities.appendChild(li);
        })
    }
}
