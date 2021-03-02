
let formSignIn = document.getElementById('formSignin');
let labelMessage = document.getElementById('message');


formSignIn.addEventListener('submit', (e) =>{
    e.preventDefault();

    var data = new FormData(formSignIn);
    fetch('../controller/sign_in_controller.php',{
        method: 'POST',
        body:data
    })
    .then(Response => Response.json())
    .then(({ respounse }) =>{
        if(respounse === 'success'){
            location.href = 'home.php';
        }else{
            labelMessage.innerHTML = 'Incorrect username or password.';
            cleanInputs();
            showMessage();
        }
    })
})

let  showMessage = () =>{
    return setTimeout(()=> {
        labelMessage.innerHTML = ""
    },2000)
}

function cleanInputs(){
    formSignIn['user_name'].value = "";
    formSignIn['user_password'].value = "";
}