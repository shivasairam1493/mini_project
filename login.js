document.addEventListener("DOMContentLoaded", function() {
  // Function to toggle password visibility
  function togglePasswordVisibility() {
      var passwordField = document.querySelector('.password');
      var pwToggle = document.getElementById('pw_hide');
      
      if (passwordField.type === "password") {
          passwordField.type = "text";
          pwToggle.classList.remove('fa-eye-slash');
          pwToggle.classList.add('fa-eye');
      } else {
          passwordField.type = "password";
          pwToggle.classList.remove('fa-eye');
          pwToggle.classList.add('fa-eye-slash');
      }
  }

  // Event listener for password visibility toggle
  document.getElementById('pw_hide').addEventListener('click', function() {
      togglePasswordVisibility();
  });

  // Event listener for form submission
  document.getElementById('form-open').addEventListener('click', function() {
      var email = document.querySelector('input[type="text"]').value;
      var password = document.querySelector('.password').value;

      // Perform any validation or further actions here
      console.log("Email: ", email);
      console.log("Password: ", password);
      // For now, just logging the email and password to console
  });
});
