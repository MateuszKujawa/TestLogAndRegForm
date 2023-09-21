<?php
// Connect db
$servername = "localhost";
$name = "root";
$password = "";
$dbname = "mkcompany_db";

$conn = new mysqli($servername, $name, $password, $dbname);

// Check connection 
if ($conn->connect_error) {
    die("Błąd połączenia z bazą danych: " . $conn->connect_error);
}


// odebranie danych z formularza
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


// Insert data to database
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: registration_succes.html");
} else {
    echo "Błąd podczas rejestracji: " . $conn->error;
}

$conn->close();
?>