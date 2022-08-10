let form = document.querySelector('.php-email-form');
let validateButton = document.querySelector('#validate');
let sentMessage = document.querySelector('.sent-message');
let errorMessage = document.querySelector('.error-message');

validateButton.addEventListener('click', (event) => {
    event.preventDefault();
    event.stopPropagation();
    let forminfo = new FormData(form);
    console.log(forminfo);
    fetch('contact-email.php', {
        method: 'POST',
        body: forminfo,
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
    })
        .then(response => response.json()).then(results => {
            console.log(results);
            if (!results.errors) {
                errorMessage.classList.remove('d-block');
                sentMessage.innerHTML = results.message;
                sentMessage.classList.add('d-block');

            } else if (results.errors) {
                sentMessage.classList.remove('d-block');
                errorMessage.innerHTML = results.message;
                errorMessage.classList.add('d-block');
            } else {
                sentMessage.classList.remove('d-block');
                errorMessage.innerHTML = 'une erreur est survenue';
                errorMessage.classList.add('d-block');
            }
        })
    /* console.log(response);
     
     if (response.ok) {
         sentMessage.classList.add('d-block');
         return response.json;
     } else {
         errorMessage.classList.add('d-block');
     }
 })
 .then((data) => {
     console.log(data);
 })*/
})
