require('./bootstrap');

let users = document.querySelectorAll('.user');
let receiver_id = '';
let my_id = users.forEach(user => {
    let user_id = user.getAttribute('id');
    return user_id
});


users.forEach(user => {
    user.addEventlistener('click', function(){
        user.classList.add('active')
        getData();
        })
    }
)


const getData = async function() {
    const request = await fetch('message/' + my_id);
    const data = request.json();
    console.log(data)
}




// users.forEach(user => user.addEventListener('click', function(){
//      let user_id = user.getAttribute('id');
//         console.log(user_id);
// }))



// .addEventListener('click', function(){
//     let user_attribute = user_id.getAttribute('id');
//     console.log(user_attribute);
// })

