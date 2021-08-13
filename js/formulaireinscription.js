const form = document.getElementsByTagName('form')[0];
const email = document.getElementById('email');
const error = document.querySelector('.validityemail');
const password = document.getElementById('password');
const errorPassword = document.getElementById('errorPassword');

email.addEventListener("input", function (event) {
    if (email.validity.valid) {
        validityemail.innerHTML = ""; // On réinitialise le contenu
        validityemail.className = "error"; // On réinitialise l'état visuel du message
    }
}, false);
form.addEventListener("submit", function (event) {
    if (!email.validity.valid) {
        error.innerHTML = "J'attends une adresse e-mail correcte, mon cher !";
        error.className = "error active";
        event.preventDefault();
    }
}, false);