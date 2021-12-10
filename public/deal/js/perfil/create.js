const formCreatePerfilContratante = document.forms.create_perfil_contratante;

formCreatePerfilContratante.pf_pj.forEach( e => {

    e.onchange = (event) => {

        handleFormChanges(formCreatePerfilContratante.pf_pj.value);
    }
});

function handleFormChanges(perfil) {
    
    if(perfil === 'pf') {
        
        console.log('fazer modificações de PF');
    } else {

        console.log('fazer modificações de PJ');
        
    }
}