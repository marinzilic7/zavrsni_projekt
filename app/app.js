let carouselSlide = document.querySelector('.rec');
let carouselImages = document.querySelector('.guests');


let left = document.getElementById('lijevo'); 
let right = document.getElementById('desno'); 

let counter = 1; 
let size = carouselImages.clientWidth;

carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';

right.addEventListener('click', ()=> {
    carouselSlide.style.transition = "transform 0.4s ease-in-out";
    counter++; 
    console.log(counter);
    carouselSlide.style.transform  = 'translateX(' + (-size * counter) + 'px)';
})

left.addEventListener('click', ()=> {
    carouselSlide.style.transition = "transform 0.4s ease-in-out";
    counter--; 
    console.log(counter);
    carouselSlide.style.transform  = 'translateX(' + (-size * counter) + 'px)';
})

const third = document.querySelector('#lastClone'); 
console.log(third.id);

/* carouselSlide.addEventListener('transitionend', () => {
    if(third.id === 'lastClone'){
        carouselSlide.style.transition = "none"; 
        counter = carouselImages.length - 2; 
        carouselSlide.style.transform  = 'translateX(' + (-size * counter) + 'px)';
    }

    if(carouselImages.id === 'firstClone'){
        carouselImages.style.transition = "none"; 
        counter = carouselImages.length - counter; 
        carouselSlide.style.transform  = 'translateX(' + (-size * counter) + 'px)';
    }
})

*/

