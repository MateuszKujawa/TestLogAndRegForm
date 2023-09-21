function checkPassword() {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    
    if (password === confirmPassword) {
        document.getElementById('message').innerHTML = ''; // Wyczyszczenie komunikatu
        document.getElementById('submitButton').disabled = false; // Odblokowanie przycisku zatwierdzania
    } else {
        document.getElementById('message').innerHTML = 'Hasła nie są identyczne!'; // Wyświetlenie komunikatu
        document.getElementById('submitButton').disabled = true; // Zablokowanie przycisku zatwierdzania
    }
}