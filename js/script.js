document.getElementById("registrationForm").addEventListener("submit", function (event) {
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;
    const terms = document.querySelector('input[name="terms"]:checked');

    // Check if the passwords match
    if (password !== confirmPassword) {
        alert("Passwords do not match!");
        event.preventDefault(); // Prevent form submission
    }

    // Check if terms and conditions are agreed
    if (!terms) {
        alert("You must agree to the terms and conditions!");
        event.preventDefault(); // Prevent form submission
    }
});
