<?php 

include __DIR__ . '/../database.php';

// Ottenimento lista stanze nella home
$sql = "SELECT * FROM `stanze`";
$result = $conn->query($sql);

// Controllo dei risultati
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

// Chiusura della connesione
$conn->close();