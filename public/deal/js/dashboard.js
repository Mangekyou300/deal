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

/* configuração do menu escondido (arrumar)*/
var user_icon = document.querySelector('#on_click');
var hidden = document.querySelector('.user_click');
var cont = document.querySelector('.main');



user_icon.addEventListener('click', function(){

    hidden.classList.toggle('hidden');


});

document.addEventListener('click', function(event) {

    if(event.target.id !== 'on_click' && event.target.id !== 'icon_perfil_user') {
        hidden.classList.add('hidden');
    }
});
/* end configuração do menu escondido (arrumar)*/
