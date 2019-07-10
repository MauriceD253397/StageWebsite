
// step 1 el's
const step1Elements = document.getElementsByClassName("step1"); 

const submitButton = document.getElementById('submitButton');
// step 2 el's 
const register = document.getElementById('register');
const printer = document.getElementById('printer');

const totalAmount = document.getElementById('totalAmount');
const totalPrinter = document.getElementById('totalPrinter');
const totalRegister = document.getElementById('totalRegister');

// step 3 el's 

const totalPriceStep3 = document.getElementById('totalPrice');

let stepCounter = 1;
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
// 
    

// Pagination function

step1Form.style.display = "block";
step2Form.style.display = "none";
step3Form.style.display = "none";
step4Form.style.display = "none";
step5Form.style.display = "none";
step6Form.style.display = "none";

submitButton.onclick = function(){

    switch(stepCounter){
        case 1:
            if(1 == 1){
                step1Form.style.display = "none";
                step2Form.style.display = "block";
                

                console.log(step1Elements);
            }
            else{
                window.alert("You didn't enter that correctly");
            }
            stepCounter++;
            break;
        case 2:
            step2Form.style.display = "none";
            step3Form.style.display = "block";  
            stepCounter++;
            break;
        case 3:
            step3Form.style.display = "none";
            step4Form.style.display = "block";
            stepCounter++;
            break;
        case 4:
            step4Form.style.display = "none";
            step5Form.style.display = "block";
            stepCounter++;
            break;
        case 5:
            step5Form.style.display = "none";
            step6Form.style.display = "block";
            break;
        case 6:
            
            break;
    }
};


// Step 3 attempt

// const step3numbers = document.getElementsByName('step3Number');
// let elCounter = 1;
// let totalStep3Price = 0;
// let totalStep3 = 0;
// let itemPrice = 0;
// step3numbers.forEach((step3Number)=>{
//     step3Number.addEventListener('input',()=>{
        
//         switch(elCounter){
//             case 1:
//                 itemPrice = step3Number.value * 500;
//                 totalStep3Price = totalStep3Price + itemPrice;
//                 console.log(totalStep3Price);
//                 break;
//             case 2:
//                 totalStep3Price + step3Number.value * 250;                
//                 break;
//             case 3:
//                 totalStep3Price + step3Number.value * 100;
//                 break;
//             case 4:
//                 totalStep3Price + step3Number.value * 200;
//                 break;
//             case 5:
//                 totalStep3Price + step3Number.value * 200;
//                 break;
//             case 6:
//                 totalStep3Price + step3Number.value * 325;
//                 break;
//             case 6:
//                 totalStep3Price + step3Number.value * 50;
//                 break;
//         }
//         elCounter++;
//         window.alert(totalStep3Price);
//      });
//     totalPriceStep3.innerHTML = "Total price: " + totalStep3Price;
// });
