<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edite Types</title>
    <link rel="stylesheet" href="../css/modal.css">
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
                <input type="text" name="description_income" maxlength="20" onkeyup="javascript:this.value=this.value.toLowerCase();">
                <button class="btnCommon" id="btnSaveIncome" type="submit">Submit Income</button>
            </div>
        </form>
        <table id="tblIncome">
            <thead>
                <tr>
                    <th>Descripcion Income</th>
                    <th>Type Income</th>
                    <th>Options Income</th>
                </tr>
            </thead>
            <tbody id="tbdIncome">
            </tbody>
        </table>
    </div>
    <div class="edit-cost">
        <p class = "title-types">Edit Costs</p>
        <form id="formCosts" class="form-types">
            <div class="costs">
                <label>
                    <input type="radio" name="type_cost" value="costs" checked>
                    Costs
                </label>
                <label>
                    <input type="radio" name="type_cost" value="expenses">
                    Expensses
                </label>
                <input type="text" name="description_cost" maxlength="20" onkeyup="javascript:this.value=this.value.toLowerCase();">
                <button class="btnCommon" id="btnSaveIncome" type="submit">Submit Cost</button>
            </div>
        </form>
        <table id="tblCost">
            <thead>
                <tr>
                    <th>Descripcion Income</th>
                    <th>Type Income</th>
                    <th>Options Income</th>
                </tr>
            </thead>
            <tbody id="tbdCost">
            </tbody>
        </table>
    </div>
    <div class="messages_">
            <p id = "message"></p>
    </div>
    <div class="modal-view" id="mdlUpCosts">
        <div class="model-content">
            <span class="close-model close-model-costs">X</span>
                <form id="mdlEditCost">
                    <label>
                        <input type="radio" name="edit_type_cost" value="costs" id="radCosts">
                        Costs
                    </label>
                    <label>
                        <input type="radio" name="edit_type_cost" value="expenses" id="radExpenses">
                        Expensses
                    </label>
                    <input type="text" name="edit_description_cost" maxlength="20" onkeyup="javascript:this.value=this.value.toLowerCase();">
                </form>
        </div>
    </div>

    <div class="modal-view" id="mdlUpIncome">
        <div class="model-content">
            <span class="close-model close-model-incomes">X</span>
                <form id="mdlEditIncome">
                    <label>
                        <input type="radio" name="edit_type_income" value="pasives" id="radPasives">
                        Passive
                    </label>
                    <label>
                        <input type="radio" name="edit_type_income" value="actives" id="radActives">
                        Active
                    </label>
                    <input type="text" name="edit_description_income" maxlength="20" onkeyup="javascript:this.value=this.value.toLowerCase();">
                </form>
        </div>
    </div>

</body>
<footer>
    <script src="../js/insert_types.js"></script>
</footer>
</html>
