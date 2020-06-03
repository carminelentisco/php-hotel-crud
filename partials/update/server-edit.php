<?php 
/*******************************************
  
 *            SERVER-EDIT.PHP              *
  
********************************************/


include_once  __DIR__ . '/../database.php'; // Connessione alla logica DATABASE

/**
 * 
 * Prelevamento dell id della stanza
 * 
**/


if ( !empty($_GET['id']) ) {
    
    $id_room = $_GET['id'];
    $sql = "SELECT * FROM `stanze` WHERE `id` = $id_room";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $room = $result->fetch_assoc();
    } else {
        die('ID non esistente');
    }
} else {
    die('Impossibile ottenere la stanza da editare');
}

// End connection
include_once __DIR__ . '/../templates/end-connect.php';