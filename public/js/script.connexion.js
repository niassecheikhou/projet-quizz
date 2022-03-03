const form=document.getElementById('form');
const login=document.getElementById('login');
const password=document.getElementById('password');
const error=document.getElementById('error');

////events 

form.addEventListener('submit',(e) =>{
    let message=[];
    if (login.value===''|| login.value==null){
        message.push('login obligatoire');
    }
    if (password.value.length<=4){
        message.push('le mot de passe doit contenir au moins 4 caracters');
    }
    if(message.length>0){
        e.preventDefault();
        error.innerText=message.join(' ,');

    }


});