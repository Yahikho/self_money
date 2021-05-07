listDataCosts();
listDataIncomes();

let formSaveCosts = document.getElementById('formCosts');
let formSaveIncome = document.getElementById('formIncome');
let formEditCosts = document.getElementById('mdlEditCost');
let formEditIncomes = document.getElementById('mdlEditIncome');

let labelMessage = document.getElementById('message');
let labelMessageModal =  document.getElementById('print_message'); 

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

    let modal = document.getElementById('mdlUpIncome');
    let btnEquiz = document.getElementsByClassName('close-model-incomes')[0];

    modal.style.display = "block";
    
    btnEquiz.onclick = () => {
        modal.style.display = "none";
    }

    window.onclick = event => {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    callDataIncome(idIncome);

}

function callDataIncome(idIncome){
    fetch('../controller/edit_income.php',{
        method:'POST',
        body : idIncome
    })
    .then(res => res.json())
    .then(respounse => {
        if(respounse){
            if(respounse[0]['type_income'] === "pasives"){
                document.getElementById('radPasives').checked = true;
            }else{
                document.getElementById('radActives').checked = true;
            }
            formEditIncomes['edit_description_income'].value = respounse[0]['description_income'];
            formEditIncomes['id_income'].value = respounse[0]['id_income'];
        }else{
            console.log('surgio un error');
        }
    })
}

formEditIncomes.addEventListener('submit', (e)=>{
    e.preventDefault();

    var data = new FormData(formEditIncomes);

    fetch('../controller/edit_income.php',{
        method : 'POST',
        body: data
    })
    .then(res => res.json())
    .then(({respounse}) => {
        console.log(respounse)
        if(respounse === 'success'){
            labelMessageModal.innerHTML = "Edited sucessfuly";
            listDataIncomes();
        }else{
            labelMessageModal.innerHTML = "Type income exists";
        }
    })

})

function updateTypeCost(idCost){
    
    let modal = document.getElementById('mdlUpCosts');
    let btnEquiz = document.getElementsByClassName('close-model-costs')[0];

    modal.style.display = "block";
    
    btnEquiz.onclick = () => {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    callDataCost(idCost);


}

function callDataCost(idCost){
    fetch('../controller/edit_cost.php',{
        method:'POST',
        body : idCost
    })
    .then(res => res.json())
    .then(respounse => {
        if(respounse){
            if(respounse[0]['type_cost'] === "costs"){
                document.getElementById('radCosts').checked = true;
            }else{
                document.getElementById('radExpenses').checked = true;
            }
            formEditCosts['edit_description_cost'].value = respounse[0]['description_cost'];
        }else{
            console.log('surgio un error');
        }
    })
}

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
