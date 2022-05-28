function checkPassword(event)
{
  //seleziono nuovamente la label "username"
  const password = document.forms['form'].elements['password'];
  let value = password.value;
  //verifico che il valore della label rispetti un certo pattern
  if(!/^[a-zA-Z0-9_àòùè]{8,15}$/.test(password.value))
  {
    password.style.backgroundColor = 'red';
    password.value='';
  }
  else
  {
    password.style.backgroundColor = 'green';
  }
}



 function checkUsername(event)
{
  const username = document.forms['form'].elements['username'];
  let value = username.value;

  if(!/^[ a-z A-Z 0-9 _ àòùè]{4,15}$/.test(username.value))
  {
    username.style.backgroundColor = 'red';
    username.value='';
  }
  else
  {
    username.style.backgroundColor = 'green';

  }
}

function checknome(event)
{
  const nome = document.forms['form'].elements['nome'];
  let value = nome.value;
  console.log(value);
  if(!/^[a-z A-Z]{4,15}$/.test(nome.value))
  {
    nome.style.backgroundColor = 'red';
    nome.value='';
  }
  else
  {
    nome.style.backgroundColor = 'green';

  }
}

function checkcognome(event)
{
  const cognome = document.forms['form'].elements['cognome'];
  let value = cognome.value;
  console.log(value);
  if(!/^[ a-z A-Z]{4,15}$/.test(cognome.value))
  {
    cognome.style.backgroundColor = 'red';
    cognome.value='';
  }
  else
  {
    cognome.style.backgroundColor = 'green';

  }
}


const nome = document.forms['form'].elements['nome'];
nome.addEventListener('blur', checknome);

const cognome = document.forms['form'].elements['cognome'];
cognome.addEventListener('blur', checkcognome);

const user = document.forms['form'].elements['username'];
user.addEventListener('blur', checkUsername);

const pass = document.forms['form'].elements['password'];
pass.addEventListener('blur', checkPassword);