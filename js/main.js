
const email = document.querySelector("#email");
const pass = document.querySelector("#password");
const btn = document.querySelector("button");

btn.addEventListener('click', function(){
    if(email.value <= 0 ){
        alert("Preencha o Email e tente novamente!");

    }else if(pass.value <= 0){
        alert("Preencha o Senha e tente novamente!");

    }
});


