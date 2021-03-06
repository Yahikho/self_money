let formSignUpdate = document.getElementById('form_edit_profile');
let btnUgradeDataUser = document.getElementById('upgrade_data');

btnUgradeDataUser.addEventListener('submit', (e) =>{
    e.preventDefault();

    let data = new FormData(formSignUpdate);

    fetch('../controller/edit_profile_controller.php', {
        method : 'POST',
        body : data
    })
    .then(res => res.json())
    .then(({response}) => {
        console.log(response);
    })
})