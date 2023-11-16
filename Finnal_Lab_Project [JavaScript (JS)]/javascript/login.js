function validatePassword(password) {
    if (password === "") {
        alert('Fill the password Properly');
        return false;
    }

    return true;
}

function email(email) {
    if (email === "") {
        alert('Please provide your valid email');
        return false;
    }

    return true;
}

function show() 
{
    let emailInput = document.getElementById("i");
    emailInput.innerHTML = "anything@example.com";
}

function out() {
    let emailInput = document.getElementById("i");
    emailInput.innerHTML = "i";
}



function Form() {
   
    let password = document.getElementById('password').value;
    let emailInput = document.getElementById('email').value;

    if (
        !email(emailInput) ||
        !validatePassword(password)
       
    ) 
    {
        return false;
    }

    return true;
}