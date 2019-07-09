<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div id="step1Form" class="step1">
            <label for="first_name">First name</label>
            <input name="step1" type="text" id="first_name" value="">

            <label for="last_name">Last name</label>
            <input name="step1" type="text" id="last_name" value="">

            <label for="telephone_number">Telephone number</label>
            <input name="step1" type="text" id="telephone_number" value="">

            <button name="submitButton" id="submitButton" class="btn btn-danger">Next</button>
        </div>
        <div id="step2Form" class="step2">     
            <p id="totalRegister"></p>
            <p id="totalPrinter"></p>
            <p id="totalAmount"></p>

            <label for="register">Register</label>
            <input type="range" min="1" max="5" value="1" class="slider" id="register">
            <label for="printer">Printer</label>
            <input type="range" min="1" max="3" value="1" class="slider" id="printer"> 

            <button name="submitButton" id="submitButton">Next</button>
        </div>
        <div id="step3Form" class="step3">
            <button name="submitButton" id="submitButton">Next</button>
        </div> 
    </div>
    <script src="script.js"></script>
</body>

</html>