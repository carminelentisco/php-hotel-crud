<?php

include_once __DIR__ . '/../database.php';
include_once __DIR__ . '/../function.php';


if (empty($_POST['id'])) {
    die('id non corretto');
}

$id_room = $_POST['id'];
echo deleteRoom($conn, 'stanze', $id_room, $base_path);
