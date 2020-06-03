<?php

/**
 * 
 *  Get all from table DB
 * 
 */

function getAll($conn,$table) {

    $sql = "SELECT * FROM `$table`";
    $result = $conn->query($sql);

    if ( $result && $result->num_rows > 0 ) {
        $records = [];

        while ( $row = $result->fetch_assoc() ) { 
            $records[] = $row;
        }

    } elseif ( $result ) {
        $records = [];
    } else {
        $records = false;
    }
    // End Connection
    $conn->close();

    return $records;
}

/**
 * 
 * Function delete
 * 
 */

function getById ($conn, $table, $id) {
    $sql = "SELECT * FROM `$table` WHERE `id` = $id"; 
    $result = $conn->query($sql);  

    if ( $conn && $result->num_rows > 0 ) {
        $record = $result->fetch_assoc();
    } elseif ($result) {
        $record = [];
    } else {
        $record = false;
    }

    $conn->close(); 

    return $record;
}