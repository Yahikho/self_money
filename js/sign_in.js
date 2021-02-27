
let formSignIn = document.getElementById('formSignin');

formSignIn.addEventListener('submit', (e) =>{
    e.preventDefault();

    var data = new FormData(formSignIn);
    fetch('../controller/sign_in_controller.php',{
        method: 'POST',
        body:data
    })
    .then(Response => Response.text())
    .then(text =>{
        console.log(text)
    })
    // .catch(function(){
    //     console.log(Response);
    // })
})
