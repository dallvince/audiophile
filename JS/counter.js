// MORE / LESS BUTTONS
    // JS

    let value = document.getElementById('result').textContent;
    let number = parseInt(value);
    
    console.log(number);
    
    document.getElementById('more').addEventListener("click", ()=>{
        if(number >= 1 && number < 4){
                number++;
                document.getElementById('result').textContent = number;
        }
    });

    document.getElementById('less').addEventListener("click", ()=>{
        if(number >= 2){
            number--;
            document.getElementById('result').textContent = number;
        }
    });

