fetch('stampapreferiti.php').then(onResponse).then(onJson);


function onResponse(response)
{
    return response.json();
}

function onJson(json)
{

    console.log(json);
    const Padre = document.querySelector('#telefono');
    for(doc of json){
    const container= document.createElement('div');
    const containertesto=document.createElement('div')
    // Dati
    const brand= document.createElement('h1');
    const nome = document.createElement('p');
    const immagine=document.createElement('img') ;
    const aggiungi= document.createElement("button")
    aggiungi.textContent="Rimuovi ai preferiti"
    aggiungi.addEventListener('click',rimuovipreferiti)
    
    brand.textContent=doc[1];
    nome.textContent=doc[0];
    immagine.src=doc[2];
  
    container.appendChild(immagine)
    containertesto.appendChild(brand)
    containertesto.appendChild(nome)
  
  
    container.appendChild(containertesto)
    container.appendChild(aggiungi)
  
    Padre.appendChild(container)
        
    }
}

function rimuovipreferiti(event)
{

  const bottone= event.currentTarget;
  const div= bottone.parentNode;
  const nome= div.querySelector("p").textContent;
  const querynome = encodeURIComponent(nome);
  console.log(querynome);
  fetch("rimuovipreferiti.php?q="+querynome).then(onResponseText).then(onText);
  bottone.classList.add("hidden");
  div.classList.add("hidden");
}

function onResponseText(response)
{
  return response.text();
}
function onText(text)
{
  console.log(text);
}
