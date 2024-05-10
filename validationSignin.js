

    function validateForm() {
      var fName = document.getElementById("fname").value;
      var mName = document.getElementById("mname").value;
      var lName = document.getElementById("lname").value;
      var email = document.getElementsByName("email")[0].value;
      var phone = document.getElementById("phone").value;
      var NationalID = document.getElementById("NationalID").value;
      var password = document.getElementById("signINpassword").value;
      var confirmPassword = document.getElementById("confirm-password").value;
  
      var isValid = true;
  
      // Clear previous error messages
      clearError("fname-error");
      clearError("mname-error");
      clearError("lname-error");
      clearError("email-error");
      clearError("phone-error");
      clearError("NationalID-error");
      clearError("password-error");
      clearError("confirm-password-error");
  
      // Validate each input field
      if (fName === "") {
        displayError("يرجى إدخال الاسم الأول", "fname-error");
        isValid = false;
      }
  
      if (mName === "") {
        displayError("يرجى إدخال الاسم الثاني", "mname-error");
        isValid = false;
      }
  
      if (lName === "") {
        displayError("يرجى إدخال الاسم الأخير", "lname-error");
        isValid = false;
      }
  
      if (email === "") {
        displayError("يرجى إدخال البريد الإلكتروني", "email-error");
        isValid = false;
      } else {
        var emailRegex = /^\S+@\S+\.\S+$/;
        if (!email.match(emailRegex)) {
          displayError("البريد الإلكتروني غير صحيح", "email-error");
          isValid = false;
        }
      }
  
      var phoneRegex = /^0\d{9}$/;
      if (!phone.match(phoneRegex)) {
        displayError("رقم الجوال يجب أن يبدأ بالرقم 0 ويحتوي على 10 أرقام", "phone-error");
        isValid = false;
      }
  
      var NationalIDRegex = /^\d{10}$/;
      if (!NationalID.match(NationalIDRegex)) {
        displayError("رقم الهوية الوطنية يجب أن يحتوي على 10 أرقام", "NationalID-error");
        isValid = false;
      }
  
      if (password === "") {
        displayError("يرجى إدخال كلمة المرور", "password-error");
        isValid = false;
      } else if (password.length < 6) {
        displayError("يجب أن تحتوي كلمة المرور على الأقل على 6 أحرف", "password-error");
        isValid = false;
      }
  
      if (confirmPassword === "") {
        displayError("يرجى تأكيد كلمة المرور", "confirm-password-error");
        isValid = false;
      } else if (password !== confirmPassword) {
        displayError("كلمة المرور وتأكيد كلمة المرور غير متطابقين", "confirm-password-error");
        isValid = false;
      }
  
      return isValid;
    }
    function LoginvalidateForm() {
      var email = document.getElementsByName("email")[0].value;
      var password = document.getElementById("signINpassword").value;
    
      var isValid = true;
    
          clearError("email-error");
    
          clearError("password-error");
    
    
      // Regex patterns
      var phoneRegex = /^0\d{9}$/;
    
    
      if (email === "") {
          displayError("يرجى إدخال البريد الإلكتروني أو رقم الجوال", "email-error");
          isValid = false;
      } else {
        if (email.includes("@") || email.includes("com")){
          var emailRegex = /^\S+@\S+\.\S+$/;
          if (!email.match(emailRegex)) {
              displayError("البريد الإلكتروني غير صحيح", "email-error");
              isValid = false;
          } else {
              clearError("email-error", "email");
          }
        }else{
          var emailRegex = /^\S+@\S+\.\S+$/;
          if (!email.match(emailRegex)) {
              displayError("رقم الجوال غير صحيح", "email-error");
              isValid = false;
          } else {
              clearError("email-error", "email");
          }
      }
    }
    
      if (password === "") {
        displayError("يرجى إدخال كلمة المرور", "password-error");
        isValid = false;
      } else if (password.length < 6) {
        displayError("يجب أن تحتوي كلمة المرور على الأقل على 6 أحرف", "password-error");
        isValid = false;
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

    
 
