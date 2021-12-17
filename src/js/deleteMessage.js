// Este código elimina los mensajes guardados en la base de datos del formulario de contacto

if(document.querySelector('.listMessages')){
  
  const listMessages = document.querySelector('.listMessages');
  
  listMessages.addEventListener('click', function(e){
  
    const idMessage = e.target.parentElement.parentElement.id;
    
    if(e.target.classList.contains('deleteMessage')){
  
      // Crear petición ajax
      const xhr = new XMLHttpRequest();
  
      const data = new FormData();
      data.append('id', idMessage);
  
      // Abrir la conexión ajax
      xhr.open('POST', 'https://nissi-confecciones.000webhostapp.com/admin/delete-message', true);
  
      xhr.onload = function(){
        if(this.status == '200'){
          const response = JSON.parse(xhr.responseText);
          if(response.response == 'success'){
             window.location.href = '/admin/list-messages';
          }
        }
      }
  
      // Enviar la petición
      xhr.send(data);
  
    }
  
  })
}