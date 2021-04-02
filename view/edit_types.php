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
    <div class="edit-types">
        <div class="sections-types edit-cost">
            <p class = "title-types">Edit Cost</p>
            <div class="type-cost">
                <label>
                    <input type="radio" name="type-cost">
                    Expensses
                </label>
                <label>
                    <input type="radio" name="type-cost">
                    Costs
                </label>
            </div>
        </div>
        <div class="sections-types edit-income">
            <p class = "title-types">Edit income</p>
            <div class="type-income">
                <label>
                    <input type="radio" name="type-income" >
                    Passive income
                </label>
                <label>
                    <input type="radio" name="type-income">
                    Active income
                </label>
            </div>
        </div>
    </div>
</body>
</html>
