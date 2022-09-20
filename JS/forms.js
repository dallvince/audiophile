// let nameRegex = 
let phoneRegex = new RegExp(/^[0-9+][^"'<>]+$/) ;
// let emailRegex = 
let name = document.getElementById('name').value;
let alertName = document.getElementById('p_name');

let email = document.getElementById('email').value;
let alertEmail = document.getElementById('p_email');

let phone = document.getElementById('phone').value;
let alertPhone = document.getElementById('p_phone');

let adress = document.getElementById('adress').value;
let zip = document.getElementById('zip').value;
let city = document.getElementById('city').value;
let country = document.getElementById('country').value;

let btn = document.getElementById('validate_btn');
btn.addEventListener('click', function(event){
    event.preventDefault();


        if(name == "") {
            document.getElementById('name_box').style.border = "1px solid red";
            document.getElementById('name').focus();
            alertName.textContent = "Please enter Fullname";
            alertName.style.color = "red";
            
        }
        if(email == ""){
            document.getElementById('email_box').style.border = "1px solid red";
            document.getElementById('email').focus();
            // if(preg_match)
            alertEmail.textContent = "Unvalid email format";
            alertEmail.style.color = "red";
        }
        if(phone == ""){
            document.getElementById('phone_box').style.border = "1px solid red";
            document.getElementById('phone').focus();
            if(!phone.match(phoneRegex)){
                alertPhone.textContent = "Unvalid Phone number";
                alertPhone.style.color = "red";  
            } 

            
           
            
        }
        if(adress == ""){
            document.getElementById('adress_box_size').style.border = "1px solid red";
            document.getElementById('adress').focus();
        }
        if(zip == ""){
            document.getElementById('zip_box').style.border = "1px solid red";
            document.getElementById('zip').focus();
        }
        if(city == ""){
            document.getElementById('city_box').style.border = "1px solid red";
            document.getElementById('city').focus();
        }
        if(country == ""){
            document.getElementById('country_box').style.border = "1px solid red";
            document.getElementById('country').focus();
        }


});





// if(!empty(name)){
//     echo("please enter name");
// }