<?php 

include __DIR__ . '/../env.php';

// Connessione al database
$conn = new mysqli($server_name,$username,$password,$db_name);

// Controllo della connessione
if ($conn && $conn->connect_error) {
    die('Si è verificato un errore di connessione con il db');
}

