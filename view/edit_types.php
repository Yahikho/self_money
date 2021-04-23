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
            <div class="income">
                <label>
                    <input type="radio" name="type_income" value="pasives" checked>
                    Passive income
                </label>
                <label>
                    <input type="radio" name="type_income" value="actives">
                    Active income
                </label>
                <input type="text" name="description_income" onkeyup="javascript:this.value=this.value.toLowerCase();">
                <button class="btnCommon" id="btnSaveIncome" type="submit">Save Income</button>
            </div>
        </form>
        <div class="messages_">
            <p id = "message"></p>
        </div>
    </div>
    <div class="edit-cost">
        <p class = "title-types">Edit Costs</p>
        <form id="formCosts" class="form-types">
            <div class="costs">
                <label>
                    <input type="radio" name="type_income" value="costs" checked>
                    Costs
                </label>
                <label>
                    <input type="radio" name="type_income" value="expenses">
                    Expensses
                </label>
                <input type="text" name="description_costs" onkeyup="javascript:this.value=this.value.toLowerCase();">
                <button class="btnCommon" id="btnSaveIncome" type="submit">Save Cost</button>
            </div>
        </form>
    </div>
</body>
<footer>
    <script src="../js/insert_income.js"></script>
</footer>
</html>
