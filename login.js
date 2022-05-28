
function verifica(event){
    if(form.username.value.length==0 || form.password.length==0) 
    {
      alert('Compilare tutti i campi!!');
      event.preventDefault();
    }
}


const form = document.forms['form'];
form.addEventListener('submit', verifica);