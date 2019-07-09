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
                <button name="submitButton" id="submitButton" class="btn btn-danger">Next</button>          
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
        <div class="row" id="step3Form">
            <div class="col">
                <button name="submitButton" id="submitButton">Next</button>
            </div>
        </div> 
    </div>
    <script src="script.js"></script>
</body>

</html>