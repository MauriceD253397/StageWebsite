
// step 1 el's
const step1Elements = document.getElementsByClassName("step1"); 

const submitButton = document.getElementById('submitButton');

const register = document.getElementById('register');
const printer = document.getElementById('printer');

const totalAmount = document.getElementById('totalAmount');
const totalPrinter = document.getElementById('totalPrinter');
const totalRegister = document.getElementById('totalRegister');


step1Form.style.display = "block";
step2Form.style.display = "none";
step3Form.style.display = "none";


// default step 2 values
let totalPrice = 32.50 + 12.50 + 15;
let totalPrinterPrice = 15;
let totalRegisterPrice = 12.50;

totalRegister.innerHTML = "Total register price: " + totalRegisterPrice;
totalPrinter.innerHTML = "Total printer price: " + totalPrinterPrice;
totalAmount.innerHTML = "Total price: " + totalPrice + " per month (including basic fee)";

// register slider change
register.addEventListener('input',() => {
    totalRegisterPrice = register.value * 12.50;
    totalPrice = totalPrinterPrice + totalRegisterPrice + 32.50;
    totalRegister.innerHTML = "Total register price: " + totalRegisterPrice;
    totalAmount.innerHTML =  "Total price: " + totalPrice + " per month (including basic fee)";
});
// printer slider change
printer.addEventListener('input',() => {
    totalPrinterPrice = printer.value * 15;  
    totalPrice = totalPrinterPrice + totalRegisterPrice + 32.50;
    totalPrinter.innerHTML = "Total printer price: " + totalPrinterPrice;
    totalAmount.innerHTML =  "Total price: " + totalPrice + " per month (including basic fee)";
});

submitButton.onclick = function(){
    let stepCounter = 1;
    switch(stepCounter){
        case 1:
            if(1 == 1){
                step1Form.style.display = "none";
                step2Form.style.display = "block";
                step3Form.style.display = "none";
                
                stepCounter++;
                console.log(step1Elements);
            }
            else{
                window.alert("You didn't enter that correctly");
            }


            
            
            break;
        case 2:
            
            break;
        case 3:
            
            break;
        case 4:
            
            break;
        case 5:
            
            break;
        case 6:
            
            break;
    }
};

function check_form(){

}