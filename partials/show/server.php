<?php
/********************************************************
  
*              SERVER.PHP __di__ SHOW.PHP               *
 
********************************************************/


include __DIR__ . '/../database.php';   // Connesione alla logica del DATABASE

/**
 *  
 * Richiesta id della stanza
 *  
**/

$id_room = $_GET['id'];
$sql = "SELECT * FROM `stanze` WHERE `id` = $id_room";  // Query string che permette l'accesso all id della tabella stanze
$result = $conn->query($sql);                           // Associazione dei dati ad una variabile

/**
 * 
 * Controllo della presenza di risultati dal server
 * 
**/

if ( $conn && $result->num_rows > 0 ) {
    $room = $result->fetch_assoc();

} elseif ($result) {
    echo 'Non ci sono risultati';
} else {
    echo 'Errore di connesione';
}


$conn->close(); // End connection