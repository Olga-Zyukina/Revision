"use strict"
document.addEventListener(DOMContentLoaded, function () {
    const form = document.getElementById('form');
    form.addEventListener('submit',formSend);


    async function formSend(e) {
        e.preventDefault();

        let formData = new FormData(form);
        let response = await fetch('contact.php',{
            method: 'POST',
            body: formData
        });
        if( response.ok ) {
      
          }
        
          } else {
            alert(`Ошибка!`); 
          }

    }
});