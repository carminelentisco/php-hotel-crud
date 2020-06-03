<?php 
/********************************************************
  
*              SERVER.PHP __di__ HOME.PHP               *
 
********************************************************/
include __DIR__ . '/../database.php';       // Connesione alla logica del DATABASE
include_once __DIR__ . '/../function.php';  // Connesione a function.php

$rooms = getAll($conn, 'stanze');
