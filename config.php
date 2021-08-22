<?php

$host = "localhost";
$user = "root";
$password = "root";
$db = "registers";

$connessione = new mysqli($host, $user, $password, $db);

if($connessione === false){
    die("Errore durante la connessione : " . $connessione->connect_error); 
}
else {
    echo("connessione OK OK OK ");
}



?>