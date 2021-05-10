
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/modal.css">
    <title>Home</title>
</head>
<?php include 'header.php';?>
<body>
    <div class="content-user">
        <div class="enter-value">
            <form id="submit_value">
                <input  name="txtValue" tnype="number" placeholder="Enter Values">
                <label>
                    <input id="rdaValueIncomes" name="type_value" type="radio" value="incomes">
                    income
                </label>
                <label>
                    <input id="rdaValueCost" name="type_value"type="radio" value="costs">
                    cots
                </label>
                <select name="" id="select_income">
                </select>
                <input type="date" name="record_date" id="value_date">
                <button id="btnSubmitValue">Submit</button>
            </form>
        </div>
    </div>
</body>
<script src="../js/home.js"></script>
</html>
