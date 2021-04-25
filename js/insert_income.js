listDataIncomes();
listDataCosts();

let formSaveCosts = document.getElementById('formCosts');
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
                listDataIncomes();
                cleanInputsIcome();
                showMessage();
            break
            case  'failed' :
                labelMessage.innerHTML = "Type already exist";
                showMessage();
            break
            case  'empty' :
                labelMessage.innerHTML = "Field must be full";
                showMessage();
            break
        }
    })
});


formSaveCosts.addEventListener('submit', (e) => {
    e.preventDefault();
    var data = new FormData(formSaveCosts);
    fetch('../controller/insert_costs.php',{
        method :'POST',
        body : data
    })
    .then(res => res.json())
    .then(({respounse}) =>{

        switch(respounse){
            case  'success' :
                labelMessage.innerHTML = "Saved successfully";
                listDataCosts();
                cleanInputsCost();
                showMessage();
            break
            case  'failed' :
                labelMessage.innerHTML = "Type already exist";
                showMessage();
            break
            case  'empty' :
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

function cleanInputsIcome(){
    formSaveIncome['description_income'].value = "";
}

function cleanInputsCost(){
    formSaveCosts['description_cost'].value = "";
}

function listDataIncomes(search){
    fetch('../controller/listIncome.php',{
        method:'POST',
        body : search
    })
    .then(res => res.text())
    .then(respounse => {
        console.log(respounse)
    })
}

function listDataCosts(search){
    fetch('../controller/listCosts.php',{
        method:'POST',
        body : search
    })
    .then(res => res.text())
    .then(respounse => {
        console.log(respounse)
    })
}