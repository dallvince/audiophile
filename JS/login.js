
let register = document.getElementById('register_title');
let registerCont = document.getElementById('register_container');

let login = document.getElementById('login_title');
let loginCont = document.getElementById('login_container');

   
login.style.backgroundColor = "#D87D4A";

    register.addEventListener('click', function(){
        register.setAttribute('aria-expanded', 'true');
        registerCont.style.zIndex = "2";
        register.style.backgroundColor = "#D87D4A";

        login.setAttribute('aria-expanded', 'false');
        loginCont.style.zIndex = "1";
        login.style.backgroundColor = "#FBAF85";
    });

    login.addEventListener('click', function(){
        login.setAttribute('aria-expanded', 'true');
        loginCont.style.zIndex = "2";
        login.style.backgroundColor = "#D87D4A";

        register.setAttribute('aria-expanded', 'false');
        registerCont.style.zIndex = "1";
        register.style.backgroundColor = "#FBAF85";
    });