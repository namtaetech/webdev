

// Function called when the form is submitted.

// Function performs the calculation and returns false.

function calculate() 
{
   'use strict';

    var qts = parseInt(document.getElementById('qts').value);
    var price = parseInt(document.getElementById('price').value);
    var taxes = parseInt(document.getElementById('taxes').value);
    var discount = parseInt(document.getElementById('discount').value);
    
    var subtotal = (qts*price)-((qts*price)*(discount/100));
    var total = subtotal+(subtotal*(taxes/100));
     
    
    console.log(total)
    document.getElementById('total').value = total.toFixed(2);
    return false;   

} // End of calculate() function.

 

function init() 
{

   'use strict';
   document.getElementById('calculatorForm').onsubmit = calculate;

} // End of init() function.

window.onload = init;
