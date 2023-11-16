function validName(name) {

if (name === "") {
  alert('Name is required!');
  return false;
}
if (name.length <2) {
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


function validateBloodGroup(bloodGroup ) {

  alert('Please select a valid Blood Group.');

return true;
}



  function Form() {
      let firstName = document.getElementById('Name').value;
      let emailInput = document.getElementById('email').value;
      let genderInputs = document.getElementsByName('gender');
      let dob = document.getElementById('dateInput').value;
      let image = document.getElementById('Picture').files[0];
      let bloodGroup = document.getElementById('Blood').value;

      if (!validName(firstName) ||
          !email(emailInput) ||
          !validateGender(genderInputs) ||
          !validateDate(dob) ||
          !validateBloodGroup(bloodGroup) ||
          !validimage(image)
      ) {
          return false;
      }

      return true;
  }
