
// Adding the elements to js

    const submitButton = document.getElementById('submitButton');
    const step1Form = document.getElementById('step1Form');
    const step1elements = document.getElementsByName("step1");
    const totalAmount = document.getElementById('totalAmount');
    let totalPrice = 32.50;

    totalAmount.innerHTML = totalPrice + " per month (including basic fee)" ;

    submitButton.onclick = function(){
        let stepCounter = 1;
        switch(stepCounter){
            case 1:
                step1Form.style.display = "none";
                step2Form.style.display = "block";
                stepCounter++;
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