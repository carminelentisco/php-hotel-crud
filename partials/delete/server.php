<?php
// Connection db
include_once __DIR__ . '/../database.php';

// Prendo id stanza
if (empty($_POST['id'])) {
    die('id non corretto');
}

$id_room = $_POST['id'];

$sql = "DELETE FROM `stanze` WHERE `id` = $id_room";
$result = $conn->query($sql);

if ( $result && $conn->affected_rows > 0 ) {

    header("Location: $base_path?delete=1");

} elseif ($result) {
    echo 'Nessuna stanza trovata';
} else {
    echo 'Si è verificato un errore';
}
