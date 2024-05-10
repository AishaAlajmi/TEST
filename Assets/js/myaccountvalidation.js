function validateForm() {
    var fName = document.getElementById("first-name").value;
    var mName = document.getElementById("middle-name").value;
var lName = document.getElementById("last-name").value;
var email = document.getElementById("email").value;
var phone = document.getElementById("phone").value;
var NationalID = document.getElementById("ID").value;
var password = document.getElementById("password").value;
var confirmPassword = document.getElementById("confirm-password").value;
// Clear previous error messages
document.getElementById("error-message").innerHTML = "";

var isValid = true; // Track overall form validity
if (fName === "") {
displayError("يرجى إدخال الاسم الأول", "fname-error");
isValid = false;
} else {
clearError("fname-error", "first-name");
}
if (mName === "") {
displayError("يرجى إدخال الاسم الثاني", "mname-error");
isValid = false;
} else {
clearError("mname-error", "middle-name");
}
if (lName === "") {
displayError("يرجى إدخال الاسم الأخير", "lname-error");
isValid = false;
} else {
clearError("lname-error", "last-name");
}

// Validation for email
if (email === "") {
displayError("يرجى إدخال البريد الإلكتروني", "email-error");
isValid = false;
} else {
var emailRegex = /^\S+@\S+\.\S+$/;
if (!email.match(emailRegex)) {
displayError("البريد الإلكتروني غير صحيح", "email-error");
isValid = false;
} else {
clearError("email-error", "email");
}
}

// Validation for phone
if (phone === "") {
displayError("يرجى إدخال رقم الجوال", "phone-error");
isValid = false;
} else {
var phoneRegex = /^0\d{9}$/;
if (!phone.match(phoneRegex)) {
displayError("رقم الجوال يجب أن يبدأ بالرقم 0 ويحتوي على 10 أرقام", "phone-error");
isValid = false;
} else {
clearError("phone-error", "phone");
}
}

// Validation for National ID
if (NationalID === "") {
displayError("يرجى إدخال الهوية الوطنية", "NationalID-error");
isValid = false;
} else {
var nationalIDRegex = /^\d{10}$/;
if (!NationalID.match(nationalIDRegex)) {
displayError("الهوية الوطنية يجب أن تتألف من 10 أرقام", "NationalID-error");
isValid = false;
} else {
clearError("NationalID-error", "ID");
}
}

// Validation for password
if (password !== "") { // Check if password is not empty
    if (password.length < 6) {
        displayError("كلمة المرور يجب أن تحتوي على ما لا يقل عن 6 أحرف", "password-error");
        isValid = false;
    } else {
        clearError("password-error", "password");
    }
} else {
    clearError("password-error", "password");
}

// Validation for confirm password
if ((password !== "") && confirmPassword== "") { // Check if confirm password is not empty
    if (confirmPassword !== password) {
        displayError("كلمة المرور غير متطابقة", "confirmpassword-error");
        isValid = false;
    } else {
        clearError("confirmpassword-error", "confirm-password");
    }
} else{
    clearError("confirmpassword-error", "confirm-password");
}

// Prevent form submission if there are validation errors
if (!isValid) {
return false;
}

return isValid;
}

function displayError(message, errorElementId) {
var errorMessage = document.getElementById(errorElementId);
errorMessage.style.color = "red";
errorMessage.textContent = message;
}

function clearError(errorElementId, inputElementId) {
var errorMessage = document.getElementById(errorElementId);
errorMessage.textContent = " "; // Clear the error message

// Reset the styling for the input element
var inputElement = document.getElementById(inputElementId);
inputElement.style.border = ""; // Reset border to the default style (empty string)
// You can add more styling changes here if needed
}