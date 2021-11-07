/* Start Owl Carousel */
$('.featured-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
/* end Owl Carousel */

/* configuração do menu escondido */
var user_icon = document.querySelector('#on_click');
var hidden = document.querySelector('.user_click');
var cont = document.querySelector('.main');
const vagaSideBar = document.querySelector('.left_bar');
const mainVagaSideBar = document.querySelector('.side_bar');
const buttonToggleSideBar = document.querySelector('.vagas_toggle_button');


user_icon.addEventListener('click', function(){

    hidden.classList.toggle('hidden');


});

document.addEventListener('click', function(event) {

    if(event.target.id !== 'on_click' && event.target.id !== 'icon_perfil_user') {
        hidden.classList.add('hidden');
    }
});
/* end configuração do menu escondido */

function toggleSideBar(event){
    event.preventDefault();
    vagaSideBar.classList.toggle('toggled');
    mainVagaSideBar.classList.toggle('toggled');
    buttonToggleSideBar.classList.toggle('rotated');
}