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

