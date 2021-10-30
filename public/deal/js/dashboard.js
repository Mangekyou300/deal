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
            items:5
        }
    }
})
/* end Owl Carousel */

/* configuração do menu escondido (arrumar)*/
var user_icon = document.querySelector('#on_click');
var hidden = document.querySelector('.user_click');
var cont = document.querySelector('.main');

user_icon.addEventListener('click', function(){
    if (hidden.style.display === 'none'){
        hidden.style.display = 'block';
    }else
         hidden.style.display = 'none';
});

cont.addEventListener('click', function(){
    if (hidden.style.display === 'block');{
        hidden.style.display = 'none';
    }
});
/* end configuração do menu escondido (arrumar)*/