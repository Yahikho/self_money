let formSaveIncome = document.getElementById('formIncome');
let labelMessage = document.getElementById('message');

formSaveIncome.addEventListener('submit', (e) => {
    e.preventDefault();
    var data = new FormData(formSaveIncome);
    fetch('../controller/insert_income.php',{
        method :'POST',
        body : data
    })
    .then(res => res.json())
    .then(({respounse}) =>{

        switch(respounse){

            case  'success' :
                labelMessage.innerHTML = "Saved successfully";
                cleanInputs();
                showMessage();
            break
            case  'failed' :
                labelMessage.innerHTML = "Type already exist";
                showMessage();
            break
            case  'dataNull' :
                labelMessage.innerHTML = "Field must be full";
                showMessage();
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
    formSaveIncome['description_income'].value = "";
}