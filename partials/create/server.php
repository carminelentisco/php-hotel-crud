<?php

include __DIR__ . '/../database.php';

// Controllo della presenza di un contenuto
if ( empty($_POST['room_number']) || empty($_POST['beds']) || empty($_POST['floor']) ) {
    die('Missing Parameters');
}

// Associazione alle variabili
$room_number = $_POST['room_number'];
$beds = $_POST['beds'];
$floor = $_POST['floor'];

// Query inserimento nuova stanza

$sql = "INSERT INTO `stanze` (`room_number`, `beds`, `floor`, `created_at`, `updated_at`)
        VALUES (?, ?, ?, NOW(), NOW() )";

$stmt = $conn->prepare($sql);
$stmt->bind_param('iii', $room_number , $beds, $floor);
$stmt->execute();

if ($stmt && $stmt->insert_id) {
    $id_room = $stmt->insert_id;
    header("Location: $base_path" . "show.php?id=$id_room");
} else {
    die ('Room creation error');
}