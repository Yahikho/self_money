//Primer Modal

if(document.getElementById("btnAddCosts")){
    let modal = document.getElementById('mdlAddCoast');
    let btn = document.getElementById("btnAddCosts");
    let btnEquiz = document.getElementsByClassName('close-model')[0];
    //let body = document.getElementsByTagName("body")[0];

    btn.onclick = () => {
        modal.style.display = "block";
    }
    btnEquiz.onclick = () => {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    
}