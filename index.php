<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

            <button name="submitButton" id="submitButton">Next</button>
        </div>
        <div id="step2Form" class="step2">
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
        <div id="step4Form" class="step4">
            
            <button name="submitButton" id="submitButton">Next</button>
        </div>
     
    </div>
    <script src="script.js"></script>
</body>

</html>