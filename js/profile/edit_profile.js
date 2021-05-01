let formSignUpdate = document.getElementById('formEditProfile');
let labelMessage = document.getElementById('message');

formSignUpdate.addEventListener('submit', (e) =>{
    e.preventDefault();

    let data = new FormData(formSignUpdate);

    fetch('../controller/profile/edit_profile_controller.php', {
        method : 'POST',
        body : data
    })
    .then(res => res.json())
    .then(({respounse}) => {

        switch(respounse){

            case  'success' :
                alert ("Updated user successfully");
                location.href = 'sign_in.php'
            break
            case  'dataTypeLong' :
                labelMessage.innerHTML = "The password or user has many characters";
                cleanInputs();
                showMessage();
            break
            case  'problemPoints' :
                labelMessage.innerHTML = "User error: user.example";
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
            case  'passwordError' :
                labelMessage.innerHTML = "Incorret password";
                showMessage();
                cleanInputs();
            break
            case  'userExist' :
                labelMessage.innerHTML = "User already exist";
                showMessage();
                cleanInputs();
            break

        }
    })
})

const showMessage = () => {

    return setTimeout(()=> {
       labelMessage.innerHTML = ""
   },2000)

}

function cleanInputs(){
    formSignUpdate['new_user_password'].value = "";
    formSignUpdate['user_password'].value = "";
}
