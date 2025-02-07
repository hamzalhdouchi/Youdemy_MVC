document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("registrationForm");
  
    form.addEventListener("submit", (event) => {
      event.preventDefault(); // Prevent form submission
  
      const firstName = form.elements["FirstName"].value.trim();
      const lastName = form.elements["LastName"].value.trim();
      const email = form.elements["Email"].value.trim();
      const password = form.elements["Password"].value.trim();
      const rePassword = form.elements["RePassword"].value.trim();
      const image = form.elements["ImageProfile"].files[0];
      const role = form.elements["Role"].value;
      const termsAccepted = document.getElementById("termsCheckbox").checked;
  
      // Validation
      if (!validateFirstName(firstName)) return;
      if (!validateLastName(lastName)) return;
      if (!validateEmail(email)) return;
      if (!validatePassword(password)) return;
      if (!validateRePassword(password, rePassword)) return;
      if (!validateImage(image)) return;
      if (!validateRole(role)) return;
      if (!validateTerms(termsAccepted)) return;
  
      // Success Alert
      Swal.fire({
        icon: "success",
        title: "Registration Successful!",
        text: "Your account has been created.",
        confirmButtonText: "OK",
      }).then(() => {
        form.submit(); // Submit the form after validation
      });
    });
  
    // Validation functions
    function validateFirstName(name) {
      if (name.length < 2) {
        showError("First Name must be at least 2 characters long.");
        return false;
      }
      return true;
    }
  
    function validateLastName(name) {
      if (name.length < 2) {
        showError("Last Name must be at least 2 characters long.");
        return false;
      }
      return true;
    }
  
    function validateEmail(email) {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        showError("Please enter a valid email address.");
        return false;
      }
      return true;
    }
  
    function validatePassword(password) {
      if (password.length < 6) {
        showError("Password must be at least 6 characters long.");
        return false;
      }
      return true;
    }
  
    function validateRePassword(password, rePassword) {
      if (password !== rePassword) {
        showError("Passwords do not match.");
        return false;
      }
      return true;
    }
  
    function validateImage(image) {
      if (!image) {
        showError("Please upload a profile image.");
        return false;
      }
      return true;
    }
  
    function validateRole(role) {
      if (!role) {
        showError("Please select a role.");
        return false;
      }
      return true;
    }
  
    function validateTerms(accepted) {
      if (!accepted) {
        showError("You must accept the Terms and Privacy Policy.");
        return false;
      }
      return true;
    }
  
    // Error Alert Function
    function showError(message) {
      Swal.fire({
        icon: "error",
        title: "Validation Error",
        text: message,
        confirmButtonText: "OK",
      });
    }
  });
  