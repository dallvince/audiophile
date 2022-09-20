// variables
let count = 0;
let timer, elements, slides, slideWidth;

window.onload = ()=> {
    const diapo = document.querySelector(".diapo");
    elements = document.querySelector(".elements");
    // put all images in an array
    slides = Array.from(elements.children);

    // calcul de la largeur du diaporama
    slideWidth = diapo.getBoundingClientRect().width;

    let next = document.querySelector("#nav_right");
    let prev = document.querySelector("#nav_left");
    
    next.addEventListener("click", slideNext);
    prev.addEventListener("click", slidePrev);

    // SetTimer
    timer = setInterval(slideNext, 4000);

    // MouseOver, MouseOut
    diapo.addEventListener("mouseover", stopTimer);
    diapo.addEventListener("mouseout", startTimer);
};

// Next image function
function slideNext(){
    count++;
    if(count == slides.length){
        count = 0;
    }
    // décalage : width d'une slide * compteur
    let decal = -slideWidth * count;
    elements.style.transform = `translateX(${decal}px)`;

    // responsive resizing
    window.addEventListener("resize", () => {
        slideWidth = diapo.getBoundingClientRect().width;
    });
}

// Previous image function
function slidePrev(){
    count--;
    if(count < 0){
        count = slides.length - 1;
    }
    // décalage : width d'une slide * compteur
    let decal = -slideWidth * count;
    elements.style.transform = `translateX(${decal}px)`;
}

function stopTimer(){
    clearInterval(timer);
}

function startTimer(){
    timer = setInterval(slideNext, 4000); 
}