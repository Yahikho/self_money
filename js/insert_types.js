listDataCosts();
listDataIncomes();

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
                console.log(respounse);
            break
            case  'empty' :
                labelMessage.innerHTML = "Field must be full";
                showMessage();
            break
        }
    })
});


function deleteTypeIncome(idIncome){
    fetch('../controller/insert_income.php',{
        method: 'POST',
        body : idIncome
    })
    .then(res => res.text())
    .then(respounse => {      
        if(respounse){
            labelMessage.innerHTML = "Succesfully deleted";
            showMessage();
            listDataIncomes();
        }else{
            labelMessage.innerHTML = "Failed";
            showMessage();
            listDataIncomes();
        }
    })
}

function deleteTypeCost(idCost){
    fetch('../controller/insert_costs.php',{
        method: 'POST',
        body : idCost
    })
    .then(res => res.text())
    .then(respounse => {      
        if(respounse){
            labelMessage.innerHTML = "Succesfully deleted";
            showMessage();
            listDataCosts();
        }else{
            labelMessage.innerHTML = "Failed";
            showMessage();
            listDataCosts();
        }
    })
}


function updateTypeIncome(idIncome){
    
}

function updateTypeCost(idCost){}


function listDataIncomes(search){
    fetch('../controller/listIncome.php',{
        method:'POST',
        body : search
    })
    .then(res => res.text())
    .then(respounse => {
        tbdIncome.innerHTML = respounse;
    })
}

function listDataCosts(search){
    fetch('../controller/listCosts.php',{
        method:'POST',
        body : search
    })
    .then(res => res.text())
    .then(respounse => {
        tbdCost.innerHTML = respounse;
    })
}

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