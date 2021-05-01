
let formSignUp = document.getElementById('formSignup');
let labelMessage = document.getElementById('message');

formSignUp.addEventListener('submit', (e) => {
    e.preventDefault();
    var data = new FormData(formSignUp);
    fetch('../../controller/profile/sign_upController.php',{
        method : 'POST',
        body : data
    })
    .then(res => res.json())
    .then(({respounse}) =>{

        switch(respounse){

            case  'success' :
                labelMessage.innerHTML = "User created successfully";
                showMessage();
            break
            case  'dataTypeLong' :
                labelMessage.innerHTML = "The password or user has many characters";
                cleanInputs();
                showMessage();
            break
            case  'problemPoints' :
                labelMessage.innerHTML = "User should be match the example";
                cleanInputs();
                showMessage();
            break
            case  'noLetters' :
                labelMessage.innerHTML = "User must have only letters"
                cleanInputs();
                showMessage();
            break
            case  'failed' :
                labelMessage.innerHTML = "User already exist";
                cleanInputs();
                showMessage();
            break
            case  'dataNull' :
                labelMessage.innerHTML = "Field must be full";
                showMessage();
                cleanInputs();
            break

        }
    })
});

const showMessage = () => {

     return setTimeout(()=> {
        labelMessage.innerHTML = ""
    },2000)

}

function cleanInputs(){
    formSignUp['user_name'].value = "";
    formSignUp['user_password'].value = "";
}
