let formSignUpdate = document.getElementById('formEditProfile');
let btnUgradeDataUser = document.getElementById('upgrade_data');

formSignUpdate.addEventListener('submit', (e) =>{
    e.preventDefault();

    let data = new FormData(formSignUpdate);

    fetch('../controller/edit_profile_controller.php', {
        method : 'POST',
        body : data
    })
    .then(res => res.json())
    .then(({response}) => {
        switch(response){
            case 'success':
                console.log('Success');
        }
    })
})