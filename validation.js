ocument.addEventListener("DOMContentLoaded", function() {
    document.getElementById("registrationForm").addEventListener("submit", function(event) {
        var name = document.getElementById("name").value;
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        var namePattern = /^[a-zA-Z\s]{4,}$/;
        var usernamePattern = /^[a-zA-Z0-9]{8,}$/;
        var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}$/;

        if (!namePattern.test(name)) {
            alert("El nombre debe contener al menos 4 letras y no debe contener números ni caracteres especiales.");
            event.preventDefault();
            return false;
        }

        if (!usernamePattern.test(username)) {
            alert("El nombre de usuario debe contener al menos 8 caracteres y solo puede incluir letras y números.");
            event.preventDefault();
            return false;
        }

        if (!passwordPattern.test(password)) {
            alert("La contraseña debe contener al menos 8 caracteres, incluida al menos una letra mayúscula y un caracter especial.");
            event.preventDefault();
            return false;
        }

        return true;
    });
});