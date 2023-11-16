function validName(name) {
    
    if (name === "") {
        alert('Name is required!');
        return false;
    }
    if (name.split(' ').length >2) {
        alert("Name must contain at least two words");
        return false;
    }
 
    for (let i = 0; i < name.split(' ').length; i++) 
    {
        let char = name[i];
        if (!(char >= 'a' && char <= 'z') && !(char >= 'A' && char <= 'Z')) {
            alert("Invalid Name");
            return false;
        }
    }
    return true;
}

function validatePassword(password) {
    if (password === "") {
        alert('Fill the password Properly');
        return false;
    }


    if (password.length<=8) {
        alert("Password must be at least 8 characters long.");
        return false;
    }

    let specialCharacters = ['@', '#', '$', '%'];
    let containsSpecialChar = false;

    for (let char of specialCharacters) {
        if (password.includes(char)) {
            containsSpecialChar = true;
            break;
        }
    }

    if (!containsSpecialChar) {
        alert("Password must contain at least one of the special characters (@, #, $, %).");
        return false;
    }

    return true;
}


function confirmpass(pass, cpass) {
    if (cpass === "") {
        alert("Confirm Password required");
        return false;
    } else if (pass !== cpass) {
        alert("Confirm password doesn't match ");
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

function validateDate(dateInput) {
    if (!dateInput) {
        alert("Date cannot be empty");
        return false;
    }

    let dateObject = new Date(dateInput);
    let day = dateObject.getDate();
    let month = dateObject.getMonth() + 1;
    let year = dateObject.getFullYear();

    if (day < 1 || day > 31 || month < 1 || month > 12 || year < 1900 || year > 2023) {
        alert("Invalid date format or out of range.");
        return false;
    }

    return true;
}

function joingdob(dateInput) 
{
    if (!dateInput) {
        alert("Date cannot be empty");
        return false;
    }

    if (!dateInput) {
        alert("Please Select Today Date");
        return false;
    }

    return true;
}

function Phone(phone) {
    
   
    if (phone.trim() === "") {
        alert("Phone number is required");
        return false;
    } else if (phone.length !== 11 || isNaN(phone)) {
        alert("Phone number must be 11 digits");
        return false;
    }

    return true;
}

function validimage(image) {

    if (!image) {
        alert("Please Provide image");
        return false;
    }


    if (image && image.size > 4000000) 
    {
        alert("Image Size Is Too Large");
        return false;
    }

    return true;
}

function validateUserName(name) {
    if (name.trim() === "") {
        alert("User name can't be empty");
        return false;
    }

    if (name.split(' ').length>2) {
        alert("User Name must contain at least two words");
        return false;
    }

    let firstChar = name[0];
    if (!(firstChar >= 'A' && firstChar <= 'Z') && !(firstChar >= 'a' && firstChar <= 'z')) {
        alert("UserName must start with a letter");
        return false;
    }

    for (let i = 0; i < name.length; i++) {
        let char = name[i];
        if (!((char >= 'A' && char <= 'Z') || (char >= 'a' && char <= 'z') || char === '.' || char === '_')) {
            alert("Invalid character in the Username contain alpha period nad dash");
            return false;
        }
    }

    return true;
}

function validateGender(genderInputs) {
    let selectedGender = false;

    for (let i = 0; i < genderInputs.length; i++) {
        if (genderInputs[i].checked) {
            selectedGender = true;
            break;
        }
    }

    if (!selectedGender) {
        alert("Please select a gender");
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
    let firstName = document.getElementById('firstName').value;
    let lastName = document.getElementById('lastName').value;
    let userName = document.getElementById('userName').value;
    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('confirmPassword').value;
    let emailInput = document.getElementById('email').value;
    let genderInputs = document.getElementsByName('Gender');
    let dob = document.getElementById('dob').value;
    let joiningDob = document.getElementById('joiningDob').value;
    let phone = document.getElementById('phone').value;

    let image = document.getElementById('image').files[0];

    if (!validName(firstName) ||
         !validName(lastName) ||
        !email(emailInput) ||
        !validateUserName(userName) ||
        !validatePassword(password) ||
        !confirmpass(password, confirmPassword) ||
        !validateDate(dob) ||
        !validateGender(genderInputs)||
        !Phone(phone) ||
        !joingdob(joiningDob) ||
        !validimage(image) 
       
    ) 
    {
        return false;
    }

    return true;
}