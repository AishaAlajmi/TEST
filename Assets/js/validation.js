
function validateForm() {
    var fName = document.getElementById("fname").value;
    var mName = document.getElementById("mname").value;
    var lName = document.getElementById("lname").value;
    var email = document.getElementsByName("email")[0].value;
    var phone = document.getElementById("phone").value;
    var NationalID = document.getElementById("NationalID").value;
    var place = document.querySelector('input[name="place"]:checked');
    var urgent = document.querySelector('input[name="urgent"]:checked');
    var date = document.getElementById("date").value;
    var brief = document.getElementById("brief").value;
    var file = document.getElementById("file").value;
    // Regex patterns
    var phoneRegex = /^0\d{9}$/;
    var NationalIDRegex = /^\d{10}$/;

    // Clear previous error messages
    document.getElementById("error-message").innerHTML = "";

    var isValid = true; // Track overall form validity

    if (fName === "") {
        displayError("يرجى إدخال الاسم الأول", "fname-error");
        isValid = false;
    } else {
        clearError("fname-error", "fname");
    }

    if (mName === "") {
        displayError("يرجى إدخال الاسم الثاني", "mname-error");
        isValid = false;
    } else {
        clearError("mname-error", "mname");
    }

    if (lName === "") {
        displayError("يرجى إدخال الاسم الأخير", "lname-error");
        isValid = false;
    } else {
        clearError("lname-error", "lname");
    }

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

    if (!phone.match(phoneRegex)) {
        displayError("رقم الجوال يجب أن يبدأ بالرقم 0 ويحتوي على 10 أرقام", "phone-error");
        isValid = false;
    } else {
        clearError("phone-error", "phone");
    }

    if (!NationalID.match(NationalIDRegex)) {
        displayError("رقم الهوية الوطنية يجب أن يحتوي على 10 أرقام", "NationalID-error");
        isValid = false;
    } else {
        clearError("NationalID-error", "NationalID");
    }

    if (!place) {
        displayError("يرجى اختيار نوع الاستشارة", "place-error");
        isValid = false;
    } else {
        clearError("place-error", "place");
    }

       // ... (existing code)

if (!urgent) {
    displayError("يرجى اختيار حالة الاستشارة", "urgent-error");
    isValid = false;
} else {
    
    clearError("urgent-error", "urgent");
}

// ... (remaining code)
   
        // ... (existing code)
    
        if (date === "") {
            displayError("يرجى اختيار تاريخ الموعد", "date-error");
            isValid = false;
        } else {
            const d = new Date(date);
        
            if (urgent && urgent.value === "1") {
                // For "طارئة" appointments, no date/time restrictions
                 clearError("date-error", "date");
            } else {
                if (d.getDay() === 5 || d.getDay() === 6) {
                    displayError("لا يمكن حجز موعد في عطلة نهاية الأسبوع، يرجى اختيار يوم آخر", "date-error");
                    isValid = false;
                } else {
                    // Clear the error message or take action when the date is valid
                    clearError("date-error", "date");
        
                    // Now, make an AJAX request to check availability
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "Saveclientandappointment.php", true);
                    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === 4) {
                            if (xhr.status === 200) {
                                var response = xhr.responseText;
                                if (response === "unavailable") {
                                    // Display an error message or take action when the date is unavailable
                                    displayError("الوقت محجوز, اختر وقتا اخر", "date-error");
                                    isValid = false; // Update isValid if needed
                                    return false;
                                } else if (response === "available") {
                                    // Clear the error message or take action when the date is available
                                    clearError("date-error", "date");
                                    // You can also update isValid here if needed
                                }
                            } 
                        }
                    };
                    xhr.send("date=" + date + "&time=" + time);
                }
            }
        }
    
      

    if (brief === "") {
        displayError("يرجى إدخال نبذة عن الموضوع", "brief-error");
        isValid = false;
    } else {
        clearError("brief-error", "brief");
    }
    if (!file) {
        displayError("يرجى رفع المستندات", "file-error");
        isValid = false;
    } else {
        clearError("file-error");
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
function checkFileSize(input) {
    const fileSize = input.files[0].size;
    const maxSize = 4194304; // 4MB in bytes

    if (fileSize > maxSize) {
        document.getElementById("fileSizeError").textContent = "حجم الملف أكبر من 4MB";
        input.value = ""; // Clear the selected file
    } else {
        document.getElementById("fileSizeError").textContent = "";
    }
}
