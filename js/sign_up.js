
let formSignUp = document.getElementById('formSignup');
let labelMessage = document.getElementById('message');

formSignUp.addEventListener('submit', (e) => {
    e.preventDefault();

    var data = new FormData(formSignUp);
    fetch('../controller/sign_upController.php',{
        method : 'POST',
        body : data
    })
    .then(res => res.json())
    .then(({ respounse }) =>{

        switch(respounse){

            case  'success' :
                console.log('success');
            break
            case  'dataTypeLong' :
                labelMessage.innerHTML = "Long peroon";
            break
            case  'problemPoints' :
                console.log('problemPoints');
            break
            case  'noLetters' :
                console.log('noLetters');
            break
            case  'failed' :
                console.log('failed');
            break
            case  'sucess' :
                console.log('dataNull');
            break

        }
    })
});