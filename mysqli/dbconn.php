<?php
$HOST = 'db'; //Nom donné dans le docker-compose.yml
$USER = 'myuser'; // user et pwd du docker compose
$PASS = 'monpassword';
$DB = 'tutoseu';

$CONN = new mysqli($HOST, $USER, $PASS, $DB);
if(!$CONN) {echo "Erreur de connexion à MSSQL<br />";}
else{
        // echo "Connexion à mySQL ok<br />";
        // mysqli_close($conn);
}