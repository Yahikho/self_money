
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/modal.css">
    <link rel="stylesheet" href="../css/home.css">
    <title>Home</title>
</head>
<?php include 'header.php';?>
<body>
    <div class="content-user">
        <div class="model-view" id="model-view">
            <div id="model-content">
                <p id="message"></p>
                <button class= "close-model">Close</button>
            </div>
        </div>
       <div class="content">
            <div class="enter-value">
                <form id="submit_value">
                    <input  class="txtValues" name="txtValue" type="text" placeholder="Enter Values" min="1">
                    <div class="labels_radios">
                        <label >
                            <input id="rdaValueIncomes" name="type_value" type="radio" value="incomes">
                            income
                        </label>
                        <label>
                            <input id="rdaValueCost" name="type_value"type="radio" value="costs">
                            cots
                        </label>
                    </div>
                    <select name="select_type" id="select_income">
                    </select>
                    <div class="date_submit">
                        <p>Insert Date</p>
                        <input type="date" name="record_date" id="value_date" class="date">
                        <p>Insert Time</p>
                        <input type="time" name="record_time" class="date">
                    </div>
                    <button onclick="saveValues()" id="btnSubmitValue">Submit</button>
                </form>
            </div>
            <div class="get-info-one">
                <p>Proces</p>
            </div>
            <div class="get-info-two">
                <p>Proces</p>
            </div>
        </div>
    </div>
</body>
<script src="../js/home.js"></script>
</html>
