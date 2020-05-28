<?php

// Connection database
include __DIR__ . '/../database.php';

// ID della stanza 
$id_room = $_GET['id'];
$sql = "SELECT * FROM `stanze` WHERE `id` = $id_room";
$result = $conn->query($sql);

if ( $conn && $result->num_rows > 0 ) {
    $room = $result->fetch_assoc();

} elseif ($result) {
    echo 'Non ci sono risultati';
} else {
    echo 'Errore di connesione';
}

// End connection
$conn->close();