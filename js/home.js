let radioValueIncomes = document.getElementById('rdaValueIncomes');
let radioValueCost = document.getElementById('rdaValueCost');
let formSubmitIncomes = document.getElementById('submit_value');
let selectOptions = document.getElementById('select_income');
let selectDate = document.getElementById('value_date');
let lableMessage = document.getElementById('message');

function saveValues(){

    let modal = document.getElementById('model-view');
    let btnEquiz = document.getElementsByClassName('close-model')[0];

    modal.style.display = "block";
    
    btnEquiz.onclick = () => {
        modal.style.display = "none";
    }

    window.onclick = event => {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
}

if(radioValueIncomes){
    radioValueIncomes.addEventListener("change", (e)=>{
        callAllTable(radioValueIncomes.value);
    })
}
if(radioValueCost){
    radioValueCost.addEventListener("change", (e)=>{
        callAllTable(radioValueCost.value);
    })
}


function callAllTable(typeIncome){
    fetch('../controller/home.php',{
        method: 'POST',
        body : typeIncome
    })
    .then(res => res.text())
    .then(repounse =>{
        selectOptions.innerHTML = repounse
    })
}

formSubmitIncomes.addEventListener('submit', (e)=>{
    e.preventDefault();
    let data = new FormData(formSubmitIncomes);
    fetch('../controller/home.php',{
        method : 'POST',
        body : data
    })
    .then(res => res.json())
    .then(({respouse}) => {
        switch(respouse){
            case 'success':
                lableMessage.innerHTML = "Submit"
            break;
            case 'Failed':
                lableMessage.innerHTML = "Could not save";
            break;
            case 'inputs_empty':
                lableMessage.innerHTML = "Some inmput is empty";
            break;
            case 'not_numeric':
                lableMessage.innerHTML = "Value must numeric";
            break;
        }
    })
})