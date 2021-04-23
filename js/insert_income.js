let formSaveIncome = document.getElementById('formCost');
let labelMessage = document.getElementById('message');

formSaveIncome.addEventListener('submit', (e) => {
    e.preventDefault();
    var data = new FormData(formSaveIncome);
    fetch('../controller/insert_income.php',{
        method :'POST',
        body : data
    })
    .then(respounse => respounse.text())
    .then(respounse => {
        console.log(respounse)
    })
})