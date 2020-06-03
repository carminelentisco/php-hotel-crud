<?php
/********************************************************
  
*              SERVER.PHP __di__ SHOW.PHP               *
 
********************************************************/


include_once __DIR__ . '/../function.php';
include __DIR__ . '/../database.php';   // Connesione alla logica del DATABASE

$id_room = $_GET['id'];
$room = getById ($conn, 'stanze', $id_room);
