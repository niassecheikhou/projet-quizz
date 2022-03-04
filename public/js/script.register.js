
const form=document.getElementById('form');
const nom=document.getElementById('nom');
const prenom=document.getElementById('prenom');
const login=document.getElementById('login');
const password=document.getElementById('password');
const password1=document.getElementById('password1');

form.addEventListener('submit',e=>{
    // e.preventDefault();

    ValidateInput();

});

const setError =(element,message)=>{

    const inputControl=element.parentElement;
    const error=inputControl.querySelector('.error');

    error.innerText=message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
}
    const SetSuccess = (element=> {
    const inputControl=element.parentElement;
    const error=inputControl.querySelector('.error');

     error.innerText='';
     inputControl.classList.add('success');
     inputControl.classList.remove('error');

})
const isValidLogin= login =>{
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(login).toLowerCase());
}


const ValidateInput=()=>{

    const nomValue=nom.value.trim();
    const prenomValue=prenom.value.trim();
    const loginValue=login.value.trim();
    const passwordValue=password.value.trim();
    const password1Value=password1.value.trim();

    if(nomValue==''){
    setError(nom,'le nom est obligatoir');

    }else{
        SetSuccess (nom) ;
    }
    if (prenom.value==='') {
        setError(prenom,'le prenom est obligatoire')
    }else{
        SetSuccess (prenom);
    }
    if(loginValue===''){
        setError(login, 'Login obligatoire');
    }else if(!isValidLogin(loginValue)){
        setError(login, 'provide a valid login adress');
    }else{
        SetSuccess(login);
    }
    if(password.value===''){
    setError(password, 'password invalide');
    }else if(passwordValue.length<4){
        setError(password,'le password doit contenir au moins 8 caracteres');
    }else{
         SetSuccess(password);
    }
    if(password1.value===''){
        setError(password1,'veuillez confirmé votre mot de passe');

    }else if(password1value !==passwordValue){
        setError(password1,'password ne correspondent pas');

    }else{
       SetSuccess(password1); 
    }
};