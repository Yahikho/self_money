
let formSignUp = document.getElementById('formSignup');
//let btnSubmit = document.getElementById('btnSingUp');

formSignUp.addEventListener('submit', (e) => {
    e.preventDefault();

    var data = new FormData(formSignUp);
    //console.log(data)
    fetch('../controller/sign_upController.php',{
        method : 'POST',
        body : data
    })
    .then(res => res.json())
    .then(data => {
        console.log(data)
    })
});