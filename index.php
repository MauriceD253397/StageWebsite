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
        <a id="step_counter" class="navbar-brand" href="#">Step #1</a>
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
        <form action="">
            <div id="step1Form">
                <div class="row">
                    <h1>Contact information</h1>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="first_name">First name
                            <input class="input_step1" name="step1" type="text" id="first_name" placeholder="Enter your first name here" required>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="last_name">Last name
                            <input class="input_step1" name="step1" type="text" id="last_name" placeholder="Enter your last name here" required>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="telephone_number">Telephone number
                            <input class="input_step1" name="step1" type="text" id="telephone_number" placeholder="Enter your phone number here" required>
                        </label>
                    </div>
                </div>
            </div>
        </form>
        
        <div id="step2Form">
            <div class="row">
                <h1>License fees</h1>
            </div>
            <div class="row">
                <div class="text-center col mr-5" id="col_step2">
                    <span>Register price</span>
                    <p id="totalRegister"></p>
                    <input class="input_step2" type="range" min="1" max="5" value="1" class="slider" id="register">
                </div>
                <div class="text-center col mr-5" id="col_step2">
                    <span>Printer price</span>
                    <p id="totalPrinter"></p>
                    <input class="input_step2" type="range" min="1" max="3" value="1" class="slider" id="printer">
                </div>
                <div class="text-center col" id="col_step2">
                    <span>Total price</span>
                    <p id="totalAmount"></p>
                </div>
            </div>
        </div>

        <div id="step3Form" class="step3">
            <div class="row">
                <h1>Hardware</h1>
            </div>
            <form action="">
                <div class="row">
                    <div class="col">
                        <label for="terminal">Terminal</label>
                        <input type="number" name="step3Number" id="terminal" min="0" max="2" placeholder="0">
                        <label for="tablet">Tablet</label>
                        <input type="number" name="step3Number" id="tablet" min="0" max="2" placeholder="0">
                        <label for="">Tablet holder</label>
                        <input type="number" name="step3Number" id="tablet_holder" min="0" max="1" placeholder="0">
                        <label for="phone">Phone</label>
                        <input type="number" name="step3Number" id="phone" min="0" max="1" placeholder="0">
                        <label for="receipt_printer">Receipt printer</label>
                        <input type="number" name="step3Number" id="receipt_printer" min="0" max="1" placeholder="0">
                        <label for="kitchen_printer">Kitchen printer</label>
                        <input type="number" name="step3Number" id="kitchen_printer" min="0" max="1" placeholder="0">
                        <label for="cash_drawer">Cash drawer</label>
                        <input type="number" name="step3Number" id="cash_drawer" min="0" max="1" placeholder="0">
                    </div>
                </div>
            </form>
            <p id="totalPrice"></p>
        </div>

        <div id="step4Form" class="step4">
            <div class="row">
                <h1>Payment method:</h1>
            </div>
            <form action="">
                <div class="row">
                    <div class="col mr-5" id="col_step4">
                        <label for="payment_month">Monthly</label>
                        <input name="payment" type="radio" id="payment_month">
                    </div>
                    <div class="col mr-5" id="col_step4">
                        <label for="payment_year">Yearly</label>
                        <input name="payment" type="radio" id="payment_year" selected>
                    </div>
                    <div class="col" id="col_step4">
                        <label for="payment_three_years">Triannual</label>
                        <input name="payment" type="radio" id="payment_three_years">
                    </div>
                </div>
            </form>         
        </div>

        <div id="step5Form" class="step5">
            <div class="row">
                <h1>Installation</h1>
            </div>
            <div class="row">
                <div class="col-3" id="col_step5-6">
                    <p>Standard costs: €300</p>
                </div>
            </div>
            <div class="row">
                <div class="col-3" id="col_step5-6">
                    <label for="wiring">Wiring cost €50 per:
                        <input type="number" id="wiring" min="0" max="2" placeholder="0">
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-3" id="col_step5-6">
                    <p id="total_installation_cost">Total cost: €300</p>
                </div>
            </div>
        </div>

        <div id="step6Form" class="step6">
            <div class="row">
                <h1>Overview</h1>
            </div>
            <div class="row">
                <div class="col-3" id="col_step5-6">
                    <p id="total_license_costs">License costs:</p>
                </div>
            </div>
            <div class="row">
                <div class="col-3" id="col_step5-6">
                    <p id="total_hardware_install_costs">Hardware and installation costs: </p>
                </div>
            </div>
        </div>

        <button class="btn btn-danger" name="submitButton" id="submitButton">Next</button>
    </div>
    <script src="script.js"></script>
</body>
</html> 