require('./bootstrap');
let form = document.querySelectorAll('#chat-form');

window.addEventListener == function(){
    form.addEventListener('submit', function(e){
        e.preventDefault();
        const message = document.querySelector('#message').value;
        console.log(message);
    })
}


