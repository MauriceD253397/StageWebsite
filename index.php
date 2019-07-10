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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="container">
        <div class="row" id="step1Form">
            <h1>Step #1</h1>
            <div class="row">
                <div class="col">
                    <label for="first_name">First name
                        <input name="step1" type="text" id="first_name" value="">
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="last_name">Last name
                        <input name="step1" type="text" id="last_name" value="">
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="telephone_number">Telephone number
                        <input name="step1" type="text" id="telephone_number" value="">
                    </label>
                </div>
            </div>
        </div>
        
        <div class="row" id="step2Form">   
            <div class="col">
                <p id="totalRegister"></p>
                <p id="totalPrinter"></p>
                <p id="totalAmount"></p>

                <label for="register">Register</label>
                <input type="range" min="1" max="5" value="1" class="slider" id="register">
                <label for="printer">Printer</label>
                <input type="range" min="1" max="3" value="1" class="slider" id="printer"> 

                <button name="submitButton" id="submitButton">Next</button>
            </div>
        </div>
        <div id="step3Form" class="step3">
            <form action="">
                <label for="terminal">Terminal</label>
                <input type="number" name="step3Number" id="terminal" min="0" max="2">
                <label for="tablet">Tablet</label>
                <input type="number" name="step3Number" id="tablet" min="0" max="2">
                <label for="">Tablet holder</label>
                <input type="number" name="step3Number" id="tablet_holder" min="0" max="1">
                <label for="phone">Phone</label>
                <input type="number" name="step3Number" id="phone" min="0" max="1">
                <label for="receipt_printer">Receipt printer</label>
                <input type="number" name="step3Number" id="receipt_printer" min="0" max="1">
                <label for="kitchen_printer">Kitchen printer</label>
                <input type="number" name="step3Number" id="kitchen_printer" min="0" max="1">
                <label for="cash_drawer">Cash drawer</label>
                <input type="number" name="step3Number" id="cash_drawer" min="0" max="1">
            </form>        
            <p id="totalPrice"></p>
        </div> 
        <div id="step4Form" class="step4">
            <h2>Payment method:</h2>
            <form action="">
                <label for="payment_month">Monthly</label>
                <input name="payment" type="radio" id="payment_month">
                <label for="payment_year">Yearly</label>
                <input name="payment" type="radio" id="payment_year" selected>
                <label for="payment_three_years">Triannual</label>
                <input name="payment" type="radio" id="payment_three_years">
            </form>         
        </div>
        <div id="step5Form" class="step5">
            <h2>Installation</h2>
            <p>Standard costs: $300</p>
            <label for="wiring">Wiring cost</label>
            <input type="number" id="wiring" min="0" max="2">
            <p id="total_installation_cost">Total cost: $300</p>
        </div>
        <div id="step6Form" class="step6">
            <h2>Overview</h2>
            <p id="total_licence_costs">Licence costs:</p>
            <p id="total_hardware_install_costs">Hardware and installation costs: </p>
        </div>
        <button name="submitButton" class="submitButton" id="submitButton" class="btn btn-danger">Next</button>
    </div>
    <script src="script.js"></script>
</body>

</html> 