function validateUserName(username) {
    if (username=== "") {
        alert('Fill the your register Username Properly');
        return false;
    }

    return true;
}

function email(email) {
    if (email === "") {
        alert('Please provide your register email');
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
   
    let userName = document.getElementById('UserName').value;
    let emailInput = document.getElementById('email').value;

    if (
        !email(emailInput) ||
        !validateUserName(userName)
       
    ) 
    {
        return false;
    }

    return true;
}