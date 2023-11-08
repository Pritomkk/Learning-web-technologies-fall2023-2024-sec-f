function validateName() 
{
    let name = document.getElementById("Name").value;
    let result = document.getElementById("result");

    if (name === "") {
        alert ('Null Name!');
        return false;
    }

    if (name.length < 2) 
    {
        alert("Name must contain at least two words");
        return false;
    }

    let firstChar = name[0];
    if (!(firstChar >= 'A' && firstChar <= 'Z') && !(firstChar >= 'a' && firstChar <= 'z')
    ) 
    {
        alert("Name must start with a letter") ;
        return false;
    }

    for (let i = 0; i < name.length; i++) {
        let char = name[i];
        if ((char >= 'A' && char <= 'Z') || (char >= 'a' && char <= 'z')  || (char ==='.') && (char ==='_')) 
        {
            result.innerHTML = "Name: " + name;;
            return false;
        }
    }

    alert(" invalid");
    return false;
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

function email() {
    let email = document.getElementById("email").value;
    let result = document.getElementById("result");

    if (email === "") 
    {
        alert('Null Email!');
        return false;
    }
    else
    {
        result.innerHTML = "Email: " + email;

    }    
}

function validateGender() {
    let male = document.getElementById("male");
    let female = document.getElementById("female");
    let other = document.getElementById("other");
    if (!male.checked && !female.checked && !other.checked) {
        alert("Please select a gender");
        return;
    }

    alert("Form submitted successfully");
}

function validateDate() 
{
    const dateInput = document.getElementById("dateInput").value;
    const result = document.getElementById("result");

    if (!dateInput) {
        alert("Date cannot be empty");
        return;
    }
    const dateObject = new Date(dateInput);
    const day = dateObject.getDate();
    const month = dateObject.getMonth() + 1; 
    const year = dateObject.getFullYear();

    if (day < 1 || day > 31 || month < 1 || month > 12 || year < 1900 || year > 2016) 
    {
        alert("Invalid date format or out of range.");
        return;
    }

    result.innerHTML = "Date :" + dateInput;
}

function Blood() {
    let blood = document.getElementById("Blood").value;

    if (blood === "") {
        alert("Please select a blood group");
        return;
    }

    alert("Form submitted successfully");
}

function pic() {
    let userId = document.getElementById("userId").value;
    let picture = document.getElementById("picture").value;

    if (userId === "" || isNaN(userId) || parseInt(userId) <= 0) {
        alert("User Id cannot be empty and has to be a positive number");
        return;
    }
    if (picture === "") {
        alert("Picture cannot be empty");
        return;
    }

    alert("Form submitted successfully");
}


