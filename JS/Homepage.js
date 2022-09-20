// NAVIGATION BAR MOTION
document.getElementById('navbar').style.transform = "translateY(0%)";

// MAIN PICTURE MOTION
// document.getElementById('pic_text').style.transform = "translateX(0%)";
document.getElementById('pic_text').style.opacity = 1;

// COOKIES CONSENT
setTimeout(function(){
    
    document.getElementById('cookies_container').style.display = "flex";
}, 2000);

    document.getElementById('accept').addEventListener('click', function(){
        document.getElementById('cookies_container').style.display = "none";
    });
// $('#accept').on('click', ()=>{
//     $('#cookies_container').css({display: "none"});
// });

// DROP DOWN MENU
document.getElementById('menu_bars').addEventListener("click", ()=> {

    let get = document.getElementById('menu_bars').getAttribute("aria-expanded");

    if(get == 'false'){
        document.getElementById('myDropdown').style.display = "flex";
        document.getElementById('menu_bars').setAttribute("aria-expanded", "true");
    } else {
        document.getElementById('myDropdown').style.display = "none";
        document.getElementById('menu_bars').setAttribute("aria-expanded", "false");
    }
});