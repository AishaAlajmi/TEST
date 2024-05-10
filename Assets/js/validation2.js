function validateEflas() {
    var fName = document.getElementById("fname").value;
    var mName = document.getElementById("mname").value;
    var lName = document.getElementById("lname").value;
    var email = document.getElementsByName("email")[0].value;
    var phone = document.getElementById("phone").value;
    var NationalID = document.getElementById("NationalID").value;
    var brief = document.getElementById("brief").value;
    var orders = document.getElementsByName("orders")[0].value;
    var contact = document.getElementById("contact").value;
    var fileInput = document.getElementById("file");
    var file = fileInput.files[0]; // Get the selected file (if any)

    // Clear previous error messages
    document.getElementById("error-message").innerHTML = "";

    var isValid = true; // Track overall form validity

    if (fname === "") {
        displayError("يرجى إدخال الاسم الأول", "fname-error");
        isValid = false;
    } else {
        clearError("fname-error");
    }

    if (mname === "") {
        displayError("يرجى إدخال الاسم الثاني", "mname-error");
        isValid = false;
    } else {
        clearError("mname-error");
    }

    if (lname === "") {
        displayError("يرجى إدخال الاسم الأخير", "lname-error");
        isValid = false;
    } else {
        clearError("lname-error");
    }

    if (email === "") {
        displayError("يرجى إدخال البريد الإلكتروني", "email-error");
        isValid = false;
    } else {
        var emailRegex = /^\S+@\S+\.\S+$/;
        if (!email.match(emailRegex)) {
            displayError("عنوان البريد الإلكتروني غير صحيح", "email-error");
            isValid = false;
        } else {
            clearError("email-error");
        }
    }

    var phoneRegex = /^0\d{9}$/;
    if (!phone.match(phoneRegex)) {
        displayError("يجب أن يبدأ رقم الجوال بالصفر ويحتوي على 10 أرقام", "phone-error");
        isValid = false;
    } else {
        clearError("phone-error");
    }

    var NationalIDRegex = /^\d{10}$/;
    if (!NationalID.match(NationalIDRegex)) {
        displayError("يجب أن يحتوي رقم الهوية الوطنية على 10 أرقام", "NationalID-error");
        isValid = false;
    } else {
        clearError("NationalID-error");
    }

    if (brief === "") {
        displayError("يرجى إدخال نبذة عن الموضوع", "brief-error");
        isValid = false;
    } else {
        clearError("brief-error");
    }

    if (orders === "") {
        displayError("يرجى إدخال الطلبات", "orders-error");
        isValid = false;
    } else {
        clearError("orders-error");
    }

    if (contact === "") {
        displayError("يرجى إدخال وسائل التواصل", "contact-error");
        isValid = false;
    } else {
        clearError("contact-error");
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

function clearError(errorElementId) {
    var errorMessage = document.getElementById(errorElementId);
    errorMessage.textContent = "";
}

function validateMohasaba() {
    var fname = document.getElementById("fname").value;
    var mname = document.getElementById("mname").value;
    var lname = document.getElementById("lname").value;
    var email = document.getElementsByName("email")[0].value;
    var phone = document.getElementById("phone").value;
    var NationalID = document.getElementById("NationalID").value;
    var clientName = document.getElementById("clientName").value;
    var reportPurpose = document.getElementById("reportPurpose").value;
    var brief = document.getElementById("brief").value;
    var fileInput = document.getElementById("file");
    var file = fileInput.files[0]; // Get the selected file (if any)

    // Clear previous error messages
    document.getElementById("error-message").innerHTML = "";

    var isValid = true; // Track overall form validity

    if (fname === "") {
        displayError("يرجى إدخال الاسم الأول", "fname-error");
        isValid = false;
    } else {
        clearError("fname-error");
    }

    if (mname === "") {
        displayError("يرجى إدخال الاسم الثاني", "mname-error");
        isValid = false;
    } else {
        clearError("mname-error");
    }

    if (lname === "") {
        displayError("يرجى إدخال الاسم الأخير", "lname-error");
        isValid = false;
    } else {
        clearError("lname-error");
    }

    if (email === "") {
        displayError("يرجى إدخال البريد الإلكتروني", "email-error");
        isValid = false;
    } else {
        var emailRegex = /^\S+@\S+\.\S+$/;
        if (!email.match(emailRegex)) {
            displayError("عنوان البريد الإلكتروني غير صحيح", "email-error");
            isValid = false;
        } else {
            clearError("email-error");
        }
    }

    var phoneRegex = /^0\d{9}$/;
    if (!phone.match(phoneRegex)) {
        displayError("يجب أن يبدأ رقم الجوال بالصفر ويحتوي على 10 أرقام", "phone-error");
        isValid = false;
    } else {
        clearError("phone-error");
    }

    var NationalIDRegex = /^\d{10}$/;
    if (!NationalID.match(NationalIDRegex)) {
        displayError("يجب أن يحتوي رقم الهوية الوطنية على 10 أرقام", "NationalID-error");
        isValid = false;
    } else {
        clearError("NationalID-error");
    }

    if (clientName === "") {
        displayError("يرجى إدخال اسم العميل", "clientName-error");
        isValid = false;
    } else {
        clearError("clientName-error");
    }

    if (reportPurpose === "") {
        displayError("يرجى إدخال الغرض من التقرير", "reportPurpose-error");
        isValid = false;
    } else {
        clearError("reportPurpose-error");
    }

    if (brief === "") {
        displayError("يرجى إدخال نبذة عن الموضوع", "brief-error");
        isValid = false;
    } else {
        clearError("brief-error");
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

function clearError(errorElementId) {
    var errorMessage = document.getElementById(errorElementId);
    errorMessage.textContent = "";
}

function validateTagyeem() {
    var fname = document.getElementById("fname").value;
    var mname = document.getElementById("mname").value;
    var lname = document.getElementById("lname").value;
    var email = document.getElementsByName("email")[0].value;
    var phone = document.getElementById("phone").value;
    var NationalID = document.getElementById("NationalID").value;
    var propertyLocation = document.getElementById("propertyLocation").value;
    var propertyDescription = document.getElementById("propertyDescription").value;
    var propertyPurpose = document.getElementById("propertyPurpose").value;
    var brief = document.getElementById("brief").value;
    var fileInput = document.getElementById("file");
    var file = fileInput.files[0]; // Get the selected file (if any)

    // Clear previous error messages
    document.getElementById("error-message").innerHTML = "";

    var isValid = true; // Track overall form validity

    if (fname === "") {
        displayError("يرجى إدخال الاسم الأول", "fname-error");
        isValid = false;
    } else {
        clearError("fname-error");
    }

    if (mname === "") {
        displayError("يرجى إدخال الاسم الثاني", "mname-error");
        isValid = false;
    } else {
        clearError("mname-error");
    }

    if (lname === "") {
        displayError("يرجى إدخال الاسم الأخير", "lname-error");
        isValid = false;
    } else {
        clearError("lname-error");
    }

    if (email === "") {
        displayError("يرجى إدخال البريد الإلكتروني", "email-error");
        isValid = false;
    } else {
        var emailRegex = /^\S+@\S+\.\S+$/;
        if (!email.match(emailRegex)) {
            displayError("عنوان البريد الإلكتروني غير صحيح", "email-error");
            isValid = false;
        } else {
            clearError("email-error");
        }
    }

    var phoneRegex = /^0\d{9}$/;
    if (!phone.match(phoneRegex)) {
        displayError("يجب أن يبدأ رقم الجوال بالصفر ويحتوي على 10 أرقام", "phone-error");
        isValid = false;
    } else {
        clearError("phone-error");
    }

    var NationalIDRegex = /^\d{10}$/;
    if (!NationalID.match(NationalIDRegex)) {
        displayError("يجب أن يحتوي رقم الهوية الوطنية على 10 أرقام", "NationalID-error");
        isValid = false;
    } else {
        clearError("NationalID-error");
    }

    if (propertyLocation === "") {
        displayError("يرجى إدخال موقع العقار", "propertyLocation-error");
        isValid = false;
    } else {
        clearError("propertyLocation-error");
    }

    if (propertyDescription === "") {
        displayError("يرجى إدخال وصف العقار", "propertyDescription-error");
        isValid = false;
    } else {
        clearError("propertyDescription-error");
    }

    if (propertyPurpose === "") {
        displayError("يرجى إدخال الغرض من التقرير", "propertyPurpose-error");
        isValid = false;
    } else {
        clearError("propertyPurpose-error");
    }

    if (brief === "") {
        displayError("يرجى إدخال نبذة عن الموضوع", "brief-error");
        isValid = false;
    } else {
        clearError("brief-error");
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

function clearError(errorElementId) {
    var errorMessage = document.getElementById(errorElementId);
    errorMessage.textContent = "";
}

function validateTagareer() {
    var fname = document.getElementById("fname").value;
    var mname = document.getElementById("mname").value;
    var lname = document.getElementById("lname").value;
    var email = document.getElementsByName("email")[0].value;
    var phone = document.getElementById("phone").value;
    var NationalID = document.getElementById("NationalID").value;
    var date = document.getElementById("date").value;
    var time = document.getElementById("time").value;
    var brief = document.getElementById("brief").value;
    var fileInput = document.getElementById("file");
    var file = fileInput.files[0]; // Get the selected file (if any)

   
    // Regex patterns
    var phoneRegex = /^0\d{9}$/;
    var NationalIDRegex = /^\d{10}$/;
    var emailRegex = /^\S+@\S+\.\S+$/;

    // Clear previous error messages
    document.getElementById("error-message").innerHTML = "";

    var isValid = true; // Track overall form validity

    if (fname === "") {
        displayError("يرجى إدخال الاسم الأول", "fname-error");
        isValid = false;
    } else {
        clearError("fname-error");
    }

    if (mname === "") {
        displayError("يرجى إدخال الاسم الثاني", "mname-error");
        isValid = false;
    } else {
        clearError("mname-error");
    }

    if (lname === "") {
        displayError("يرجى إدخال الاسم الأخير", "lname-error");
        isValid = false;
    } else {
        clearError("lname-error");
    }

    if (email === "") {
        displayError("يرجى إدخال البريد الإلكتروني", "email-error");
        isValid = false;
    } else if (!email.match(emailRegex)) {
        displayError("البريد الإلكتروني غير صحيح", "email-error");
        isValid = false;
    } else {
        clearError("email-error");
    }

    if (!phone.match(phoneRegex)) {
        displayError("رقم الجوال يجب أن يبدأ بالرقم 0 ويحتوي على 10 أرقام", "phone-error");
        isValid = false;
    } else {
        clearError("phone-error");
    }

    if (!NationalID.match(NationalIDRegex)) {
        displayError("رقم الهوية الوطنية يجب أن يحتوي على 10 أرقام", "NationalID-error");
        isValid = false;
    } else {
        clearError("NationalID-error");
    }

    if (date === "") {
        displayError("يرجى اختيار تاريخ الموعد", "date-error");
        isValid = false;
    } else {
        clearError("date-error");
    }

    if (time === "") {
        displayError("يرجى اختيار وقت الموعد", "time-error");
        isValid = false;
    } else {
        clearError("time-error");
    }

    if (brief === "") {
        displayError("يرجى إدخال نبذة عن الموضوع", "brief-error");
        isValid = false;
    } else {
        clearError("brief-error");
    }
    if (!file) {
        displayError("يرجى رفع المستندات", "file-error");
        isValid = false;
    } else {
        clearError("file-error");
    }
    
    return isValid;
}

function displayError(message, errorId) {
    var errorElement = document.getElementById(errorId);
    errorElement.innerHTML = message;
}

function clearError(errorId) {
    var errorElement = document.getElementById(errorId);
    errorElement.innerHTML = "";
}

function validateOgood() {
    var fName = document.getElementById("fname").value;
    var mName = document.getElementById("mname").value;
    var lName = document.getElementById("lname").value;
    var email = document.getElementsByName("email")[0].value;
    var phone = document.getElementById("phone").value;
    var NationalID = document.getElementById("NationalID").value;
    var contractType = document.querySelector('input[name="contractType"]:checked');
    var brief = document.getElementById("brief").value;
    var orders = document.getElementsByName("orders")[0].value;
    var fileInput = document.getElementById("file");
    var file = fileInput.files[0]; // Get the selected file (if any)
    var firstParty = document.getElementById("firstParty").value;
    var secondParty = document.getElementById("secondParty").value;
    
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
    if (!contractType) {
        displayError("يرجى اختيار الطلب", "contractType-error");
        isValid = false;
    } else {
        clearError("contractType-error", "contractType");
    }
    
    if (brief === "") {
        displayError("يرجى إدخال نبذة عن الموضوع", "brief-error");
        isValid = false;
    } else {
        clearError("brief-error", "brief");
    }
    
    if (orders === "") {
        displayError("يرجى إدخال الطلبات", "orders-error");
        isValid = false;
    } else {
        clearError("orders-error", "orders");
    }

if (contractType && (contractType.id === "createContract" )) {
    if (firstParty === "") {
        displayError("يرجى إدخال وصف الطرف الأول", "firstParty-error");
        isValid = false;
    } else {
        clearError("firstParty-error", "firstParty");
    }
}

if (contractType && (contractType.id === "createContract" )) {
    if (secondParty === "") {
        displayError("يرجى إدخال وصف الطرف الثاني", "secondParty-error");
        isValid = false;
    } else {
        clearError("secondParty-error", "secondParty");
    }
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
-
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
    function validateYearlyOgood() {
        // Reset error messages
        document.getElementById("error-message").innerHTML = "";
        
        // Initialize flag to track validation status
        var isValid = true;

        // Validation logic for each input field
        var fname = document.getElementById("fname").value;
        var mname = document.getElementById("mname").value;
        var lname = document.getElementById("lname").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById("phone").value;
        var NationalID = document.getElementById("NationalID").value;
        var conractRequester = document.getElementById("conractRequester").value;
        var requestor = document.getElementById("requestor").value;
        var date = document.getElementById("date").value;
        var time = document.getElementById("time").value;
        var contractRequestPlace = document.getElementById("contractRequestPlace").value;
        var workArea = document.getElementById("workArea").value;
        var contactData = document.getElementById("contactData").value;

        // Regular expression patterns for email, phone, and NationalID
        var emailPattern = /^\S+@\S+\.\S+$/;
        var phonePattern = /^0\d{9}$/;
        var NationalIDPattern = /^\d{10}$/;

        // Validation for each input field
        if (fname === "") {
            displayError("يرجى إدخال الاسم الأول", "fname-error");
            isValid = false;
        } else {
            clearError("fname-error", "fname");
        }

        if (mname === "") {
            displayError("يرجى إدخال الاسم الثاني", "mname-error");
            isValid = false;
        } else {
            clearError("mname-error", "mname");
        }

        if (lname === "") {
            displayError("يرجى إدخال الاسم الأخير", "lname-error");
            isValid = false;
        } else {
            clearError("lname-error", "lname");
        }

        if (!email.match(emailPattern)) {
            displayError("البريد الإلكتروني غير صحيح", "email-error");
            isValid = false;
        } else {
            clearError("email-error", "email");
        }

        if (!phone.match(phonePattern)) {
            displayError("رقم الجوال يجب أن يبدأ بالرقم 0 ويحتوي على 10 أرقام", "phone-error");
            isValid = false;
        } else {
            clearError("phone-error", "phone");
        }

        if (!NationalID.match(NationalIDPattern)) {
            displayError("رقم الهوية الوطنية يجب أن يحتوي على 10 أرقام", "NationalID-error");
            isValid = false;
        } else {
            clearError("NationalID-error", "NationalID");
        }

        if (conractRequester === "") {
            displayError("يرجى اختيار مستفيد الخدمة", "conractRequester-error");
            isValid = false;
        } else {
            clearError("conractRequester-error", "conractRequester");
        }

        if (requestor === "") {
            displayError("يرجى إدخال اسم المنتفع من الخدمة", "requestor-error");
            isValid = false;
        }else {
            clearError("requestor-error", "requestor");
        }

        if (date === "") {
            displayError("يرجى اختيار تاريخ الزيارة", "date-error");
            isValid = false;
        }else {
            clearError("date-error", "date");
        }

        if (time === "") {
            displayError("يرجى اختيار وقت الزيارة", "time-error");
            isValid = false;
        }else {
            clearError("time-error", "time");
        }

        if (contractRequestPlace === "") {
            displayError("يرجى إدخال مقر الزيارة", "contractRequestPlace-error");
            isValid = false;
        }else {
            clearError("contractRequestPlace-error", "contractRequestPlace");
        }

        if (workArea === "") {
            displayError("يرجى إدخال نطاق العمل", "workArea-error");
            isValid = false;
        }else {
            clearError("workArea-error", "workArea");
        }

        if (contactData === "") {
            displayError("يرجى إدخال بيانات التواصل", "contactData-error");
            isValid = false;
        }else {
            clearError("contactData-error", "contactData");
        }

        // Return the validation result (true if all fields are valid, false otherwise)
        return isValid;
    }

    // Helper function to display error messages
    function displayError(message, errorId) {
        document.getElementById(errorId).innerHTML = message;
    }

    // Clear error messages
    function clearError(errorId) {
        document.getElementById(errorId).innerHTML = "";
    }

function validateTahkeem() {
    var fname = document.getElementById("fname").value;
    var mname = document.getElementById("mname").value;
    var lname = document.getElementById("lname").value;
    var email = document.getElementsByName("email")[0].value;
    var phone = document.getElementById("phone").value;
    var NationalID = document.getElementById("NationalID").value;
    var complainant = document.getElementById("complainant").value;
    var defendant = document.getElementById("defendant").value;
    var personRequesting = document.getElementById("personRequesting").value;
    var brief = document.getElementById("brief").value;
    var orders = document.getElementsByName("orders")[0].value;
    var fileInput = document.getElementById("file");
    var file = fileInput.files[0]; // Get the selected file (if any)
    var arbitrationType = document.querySelector('input[name="arbitration"]:checked');

    // Regex patterns
    var phoneRegex = /^0\d{9}$/;
    var NationalIDRegex = /^\d{10}$/;
    var emailRegex = /^\S+@\S+\.\S+$/;

    // Clear previous error messages
    document.getElementById("error-message").innerHTML = "";

    var isValid = true; // Track overall form validity

    if (!arbitrationType) {
        displayError("يرجى اختيار نوع الطلب", "arbitration-error");
        isValid = false;
    } else {
        clearError("arbitration-error");
    }

    if (fname === "") {
        displayError("يرجى إدخال الاسم الأول", "fname-error");
        isValid = false;
    } else {
        clearError("fname-error");
    }

    if (mname === "") {
        displayError("يرجى إدخال الاسم الثاني", "mname-error");
        isValid = false;
    } else {
        clearError("mname-error");
    }

    if (lname === "") {
        displayError("يرجى إدخال الاسم الأخير", "lname-error");
        isValid = false;
    } else {
        clearError("lname-error");
    }

    if (email === "") {
        displayError("يرجى إدخال البريد الإلكتروني", "email-error");
        isValid = false;
    } else if (!email.match(emailRegex)) {
        displayError("البريد الإلكتروني غير صحيح", "email-error");
        isValid = false;
    } else {
        clearError("email-error");
    }

    if (!phone.match(phoneRegex)) {
        displayError("رقم الجوال يجب أن يبدأ بالرقم 0 ويحتوي على 10 أرقام", "phone-error");
        isValid = false;
    } else {
        clearError("phone-error");
    }

    if (!NationalID.match(NationalIDRegex)) {
        displayError("رقم الهوية الوطنية يجب أن يحتوي على 10 أرقام", "NationalID-error");
        isValid = false;
    } else {
        clearError("NationalID-error");
    }

    if (arbitrationType && arbitrationType.id === "firstArbitration") {
        var arbitrarorType = document.getElementById("arbitrarorType").value;
        if (arbitrarorType === "") {
            displayError("يرجى تحديد صفة المحكم", "arbitrarorType-error");
            isValid = false;
        } else {
            clearError("arbitrarorType-error");
        }
    }

    if (arbitrationType && arbitrationType.id === "secondArbitration") {
        var workRequired = document.getElementById("workRequired").value;
        if (workRequired === "") {
            displayError("يرجى تحديد الإجراء المطلوب", "workRequired-error");
            isValid = false;
        } else {
            clearError("workRequired-error");
        }
    }

    if (complainant === "") {
        displayError("يرجى إدخال المدعي/المحتكم", "complainant-error");
        isValid = false;
    } else {
        clearError("complainant-error");
    }

    if (defendant === "") {
        displayError("يرجى إدخال المدعي عليه/المحتكم ضده", "defendant-error");
        isValid = false;
    } else {
        clearError("defendant-error");
    }

    if (personRequesting === "") {
        displayError("يرجى تحديد صاحب الطلب", "personRequesting-error");
        isValid = false;
    } else {
        clearError("personRequesting-error");
    }

    if (brief === "") {
        displayError("يرجى إدخال نبذة عن الموضوع", "brief-error");
        isValid = false;
    } else {
        clearError("brief-error");
    }

    if (orders === "") {
        displayError("يرجى إدخال الطلبات", "orders-error");
        isValid = false;
    } else {
        clearError("orders-error");
    }

    if (!file) {
        displayError("يرجى رفع المستندات", "file-error");
        isValid = false;
    } else {
        clearError("file-error");
    }

    return isValid;
}

function displayError(message, errorId) {
    var errorElement = document.getElementById(errorId);
    errorElement.innerHTML = message;
}

function clearError(errorId) {
    var errorElement = document.getElementById(errorId);
    errorElement.innerHTML = "";
}

 
   
function validateJalast() {
    var fName = document.getElementById("fname").value;
    var mName = document.getElementById("mname").value;
    var lName = document.getElementById("lname").value;
    var email = document.getElementsByName("email")[0].value;
    var phone = document.getElementById("phone").value;
    var NationalID = document.getElementById("NationalID").value;
    var court = document.getElementById("court").value;
    var city = document.getElementById("city").value;
    var authorityNumber = document.getElementById("authorityNumber").value;
    var date = document.getElementById("date").value;
    var time = document.getElementById("time").value;
    var onsetOrOnline = document.getElementById("onsetOrOnline").value;

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

    if (court === "") {
        displayError("يرجى إدخال المحكمة", "court-error");
        isValid = false;
    } else {
        clearError("court-error", "court");
    }

    if (city === "") {
        displayError("يرجى إدخال المدينة", "city-error");
        isValid = false;
    } else {
        clearError("city-error", "city");
    }

    if (authorityNumber === "") {
        displayError("يرجى إدخال رقم القضية", "authorityNumber-error");
        isValid = false;
    } else {
        clearError("authorityNumber-error", "authorityNumber");
    }

    if (date === "") {
        displayError("يرجى اختيار تاريخ الجلسة/التحقيق", "date-error");
        isValid = false;
    } else {
        clearError("date-error", "date");
    }

    if (time === "") {
        displayError("يرجى اختيار موعد الجلسة/التحقيق", "time-error");
        isValid = false;
    } else {
        clearError("time-error", "time");
    }

    if (onsetOrOnline === "") {
        displayError("يرجى اختيار نوع الجلسة", "onsetOrOnline-error");
        isValid = false;
    } else {
        clearError("onsetOrOnline-error", "onsetOrOnline");
    }

    return isValid;
}

function displayError(message, errorId) {
    var errorElement = document.getElementById(errorId);
    errorElement.innerHTML = message;
}

function clearError(errorId, fieldId) {
    var errorElement = document.getElementById(errorId);
    errorElement.innerHTML = "";
}


function validateTawtheeg() {
    var fName = document.getElementById("fname").value;
    var mName = document.getElementById("mname").value;
    var lName = document.getElementById("lname").value;
    var email = document.getElementsByName("email")[0].value;
    var phone = document.getElementById("phone").value;
    var NationalID = document.getElementById("NationalID").value;
    var authenticationRequestPlace = document.getElementById("authenticationRequestPlace").value;

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

    if (authenticationRequestPlace === "") {
        displayError("يرجى إدخال مقر تقديم الخدمة", "authenticationRequestPlace-error");
        isValid = false;
    } else {
        clearError("authenticationRequestPlace-error", "authenticationRequestPlace");
    }

    var authenticationRequest = document.getElementById("authenticationRequest").value;
    if (authenticationRequest === "") {
        displayError("يرجى اختيار طلب التوثيق", "authenticationRequest-error");
        isValid = false;
    } else {
        clearError("authenticationRequest-error", "authenticationRequest");
    }

    var date = document.getElementById("date").value;
    if (date === "") {
        displayError("يرجى اختيار تاريخ الخدمة", "date-error");
        isValid = false;
    } else {
        clearError("date-error", "date");
    }

    var time = document.getElementById("time").value;
    if (time === "") {
        displayError("يرجى اختيار وقت الخدمة", "time-error");
        isValid = false;
    } else {
        clearError("time-error", "time");
    }

    return isValid;
}

function displayError(message, errorId) {
    var errorElement = document.getElementById(errorId);
    errorElement.innerHTML = message;
}

function clearError(errorId, fieldId) {
    var errorElement = document.getElementById(errorId);
    errorElement.innerHTML = "";
}

function validateForm() {
    var fName = document.getElementById("fname").value;
    var mName = document.getElementById("mname").value;
    var lName = document.getElementById("lname").value;
    var email = document.getElementsByName("email")[0].value;
    var phone = document.getElementById("phone").value;
    var NationalID = document.getElementById("NationalID").value;
    var Whatlawsuit = document.querySelector('input[name="Whatlawsuit"]:checked');
    var brief = document.getElementById("brief").value;
    var complainant = document.getElementById("complainant").value;
    var defendant = document.getElementById("defendant").value;
    var orders = document.getElementsByName("orders")[0].value;
    var fileInput = document.getElementById("file");
    var file = fileInput.files[0]; // Get the selected file (if any)

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
    if (!Whatlawsuit) {
        displayError("يرجى اختيار نوع الدعوة", "Whatlawsuit-error");
        isValid = false;
    } else {
        clearError("Whatlawsuit-error", "Whatlawsuit");
    }
    if (complainant === "") {
        displayError("يرجى إدخال المدعي", "complainant-error");
        isValid = false;
    } else {
        clearError("complainant-error", "complainant");
    }

    if (defendant === "") {
        displayError("يرجى إدخال المدعي عليه", "defendant-error");
        isValid = false;
    } else {
        clearError("defendant-error", "defendant");
    }

    if (brief === "") {
        displayError("يرجى إدخال نبذة عن الموضوع", "brief-error");
        isValid = false;
    } else {
        clearError("brief-error", "brief");
    }
    
    if (orders === "") {
        displayError("يرجى إدخال الطلبات", "orders-error");
        isValid = false;
    } else {
        clearError("orders-error", "orders");
    }
    if (!file) {
        displayError("يرجى رفع المستندات", "file-error");
        isValid = false;
    } else {
        clearError("file-error", "file");
    }
    
    return isValid;
}


function displayError(errorMessage, errorSpanId) {
    document.getElementById(errorSpanId).innerHTML = errorMessage;
}

function clearError(errorSpanId, inputId) {
    document.getElementById(errorSpanId).innerHTML = "";
}

function checkFileSize(fileInput) {
    var maxSize = 4194304; // 4MB
    if (fileInput.files.length > 0 && fileInput.files[0].size > maxSize) {
        displayError("حجم الملف يجب أن يكون أقل من 4MB", "brief-error");
        fileInput.value = ""; // Clear the file input
    } else {
        clearError("brief-error");
    }
}

function displayError(message, errorElementId) {
    var errorMessage = document.getElementById(errorElementId);
    errorMessage.style.color = "red";
    errorMessage.textContent = message;
}
-
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