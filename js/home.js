let radioValueIncomes = document.getElementById('rdaValueIncomes');
let radioValueCost = document.getElementById('rdaValueCost');
let formSubmitIncomes = document.getElementById('submit_value');
let selectOptions = document.getElementById('select_income');
let selectDate = document.getElementById('value_date');


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
    var today = new Date();
    var DateSave = selectDate.value+" "+today.getHours()+":"+today.getMinutes()+":"+today.getSeconds();
    console.log(DateSave);

})