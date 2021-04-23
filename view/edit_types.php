<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edite Types</title>
</head>
<?php 
    include_once 'header.php';
?>
<body>
    <div class="edit-income">
        <p class = "title-types">Edit income</p>
        <form id="formIncome" class="form-types">
            <div class="cost-income">
                <label>
                    <input type="radio" name="type_income" value="passive">
                    Passive income
                </label>
                <label>
                    <input type="radio" name="type_income" value="active">
                    Active income
                </label>
                <input type="text" name="description_income">
                <button class="btnCommon" id="btnSaveIncome" type="submit">Save</button>
            </div>
        </form>
        <div class="messages_">
            <p id = "message"></p>
        </div>
    </div>
</body>
<footer>
    <script src="../js/insert_income.js"></script>
</footer>
</html>
