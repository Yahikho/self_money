<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edite Types</title>
    <link rel="stylesheet" href="../css/modal.css">
    <link rel="stylesheet" href="../css/edit_types.css">
</head>
<?php 
    include_once 'header.php';
?>
<body>
    <div class="messages_">
            <p id = "message"></p>
    </div>
    <div class="edit-income forms-type">
        <p class = "title-types">INCOME</p>
        <form id="formIncome" class="form-types">
            <div class="income">
                <label class="description">
                    <input type="radio" name="type_income" value="pasives" checked>
                    Pasive income
                </label>
                <label class="description">
                    <input type="radio" name="type_income" value="actives">
                    Active income
                </label>
                <input type="text" class="txtType" name="description_income" maxlength="20" onkeyup="javascript:this.value=this.value.toLowerCase();">
                <button class="btnTypes" id="btnSaveIncome" type="submit">Submit Income</button>
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
    <div class="edit-cost forms-type">
        <p class = "title-types">COSTS</p>
        <form id="formCosts" class="form-types">
            <div class="costs">
                <label class="description">
                    <input type="radio" name="type_cost" value="costs" checked>
                    Costs
                </label>
                <label class="description">
                    <input type="radio" name="type_cost" value="expenses">
                    Expensses
                </label>
                <input type="text" class="txtType" name="description_cost" maxlength="20" onkeyup="javascript:this.value=this.value.toLowerCase();">
                <button class="btnTypes" id="btnSaveCost" type="submit">Submit Cost</button>
            </div>
        </form>
        <table id="tblCost">
            <thead>
                <tr>
                    <th>Descripcion Cost</th>
                    <th>Type Cost</th>
                    <th>Options Cost</th>
                </tr>
            </thead>
            <tbody id="tbdCost">
            </tbody>
        </table>
    </div>
    <div class="modal-view" id="mdlUpCosts">
        <div class="model-content">
            <span class="close-model close-model-costs">X</span>
            <p class="title-modal">Edit Cost</p>
                <form id="mdlEditCost">
                    <label>
                        <input type="radio" name="edit_type_cost" value="costs" id="radCosts">
                        Costs
                    </label>
                    <label>
                        <input type="radio" name="edit_type_cost" value="expenses" id="radExpenses">
                        Expensses
                    </label>
                    <input type="text" class="txtModal" name="edit_description_cost" maxlength="20" onkeyup="javascript:this.value=this.value.toLowerCase();">
                    <input type="hidden" name="id_cost">
                    <button class="btnTypes" id="btnEditCost" type="submit">Edit Cost</button>
                    <div id="message_modal">
                        <p id="print_message_cost"></p>
                    </div>
                </form>
        </div>
    </div>

    <div class="modal-view" id="mdlUpIncome">
        <div class="model-content">
            <span class="close-model close-model-incomes">X</span>
                <p class="title-modal">Edit Income</p>
                <form id="mdlEditIncome">                    
                    <label>
                        <input type="radio" name="edit_type_income" value="pasives" id="radPasives">
                        Pasive
                    </label>
                    <label>
                        <input type="radio" name="edit_type_income" value="actives" id="radActives">
                        Active
                    </label>
                    <input type="text" class="txtModal" name="edit_description_income" maxlength="20" onkeyup="javascript:this.value=this.value.toLowerCase();">
                    <input type="hidden" name="id_income">
                    <button class="btnTypes" id="btnEditIncome" type="submit">Edit Income</button>
                    <div id="message_modal">
                        <p id="print_message_income"></p>
                    </div>
                </form>
        </div>
    </div>

</body>
<footer>
    <script src="../js/insert_types.js"></script>
</footer>
</html>
