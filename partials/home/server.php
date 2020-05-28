<?php 
/********************************************************
  
*              SERVER.PHP __di__ HOME.PHP               *
 
********************************************************/

include __DIR__ . '/../database.php';   // Connesione alla logica del DATABASE

/**  
 * 
 * Ottenimento lista stanze nella home 
 * 
**/

$sql = "SELECT * FROM `stanze`";    // Query strin per ottenere la lista della stanze  
$result = $conn->query($sql);

/**  
 * 
 * Controllo dei risultati 
 * 
**/

if ( $result && $result->num_rows > 0 ) {
    $rooms = [];
    
    // Loop per estrapolare le row
    while ( $row = $result->fetch_assoc() ) { 
        $rooms[] = $row;
    }
} elseif ( $result ) {
    echo 'Nessun risultato';
} else {
    echo 'Errore della query';
}

// End Connection
$conn->close();