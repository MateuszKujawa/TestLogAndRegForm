<?php
// Connect db
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mkcompany_db"


$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn -> connect_error) {
    die("Błąd połączenia z bazą danych: " . $conn->connect_error);
}

// odbieranie danych z formularza
$email = $_POST['email'];
$password = $_POST['password'];

// Wyszukiwanie użytkownika w bazie danych
// TUTAJ JEST GDZIEŚ BŁĄD W 'PASSWORD
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'"; 




$result = $conn->query($sql);

if($result->num_rows > 0) {
    header("Location: home.html");
}else {
    echo "Dane logowania są nieprawidłowe. Spróbuj ponownie.";
}

$conn->close();
?>