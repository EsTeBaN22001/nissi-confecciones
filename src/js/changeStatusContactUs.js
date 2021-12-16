// Este código cambia el status de visto o no visto del mensaje de contacto

const listMessages = document.querySelector('.listMessages');

// Listener para cambiar el status del mensaje
listMessages.addEventListener('click', messageActions);

// Revisa el status del mensaje al que se le dió click
function messageActions(e){
  e.preventDefault();

  if(e.target.classList.contains('fa-check-circle')){
    
    if(e.target.classList.contains('complet')){
      e.target.classList.remove('complet');
      taskStatusChange(e.target, 0);
    }else{
      e.target.classList.add('complet');
      taskStatusChange(e.target, 1);
    }

  }
}

// Marca como leído o no un mensaje
function taskStatusChange(message, status){

  const idMessage = message.parentElement.parentElement.id;
  const check = message;

  // Crear petición ajax
  const xhr = new XMLHttpRequest();

  const data = new FormData();
  data.append('id', idMessage);
  data.append('status', status);

  // Abrir la conexión ajax
  xhr.open('POST', 'http://localhost:3000/admin/list-messages/changeStatus', true);

  // Enviar la petición
  xhr.send(data);

}