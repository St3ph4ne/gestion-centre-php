<?php
$host = 'db'; //Nom donné dans le docker-compose.yml
$user = 'myuser'; // user et pwd du docker compose
$password = 'monpassword';
$db = 'tutoseu';
$conn = new mysqli($host,$user,$password,$db);
if(!$conn) {echo "Erreur de connexion à MSSQL<br />";}
else{
        echo "Connexion à mySQL ok<br />";
        mysqli_close($conn);
}
echo "ici on met le reste ...";
?>
