<?php 
/********************************************************
  
*                      DATABASE.PHP                     *
 
********************************************************/

include __DIR__ . '/../env.php';    // Accesso al file con credenziali

/**
 * Nella stringa seguente avviene la connessione al server.
 * Si inizializza una variablie, dandogli il costrutto { new } ed il metodo { mysqli }
 * 
 * mysqli() è un metodo che accetta i seguenti parametri in questa precisa sequenza.
 *  1 - Nome del server 
 *  2 - Nome Utente
 *  3 - Password
 *  4 - Nome assegnato al database
 * 
 * In questo caso i file sono presenti in un secondo file non versionato con GIT
 *  
 */

$conn = new mysqli($server_name,$username,$password,$db_name);  

/**  
 *  Controllo della connessione:
 * 
 *  Nel seguente if viene controlla l'effettiva connessione al server,
 *  tramite l'elemento dell oggetto connect_error
 *   
 */

if ($conn && $conn->connect_error) {
    die('Si è verificato un errore di connessione con il db');
}

