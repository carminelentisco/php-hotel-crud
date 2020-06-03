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