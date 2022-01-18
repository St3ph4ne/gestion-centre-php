<?php
 
    include "./pdo/dbconn.php";

    $sql_request = "SHOW TABLES;";

    $request = $CONN -> prepare($sql_request);
    $request -> execute();

    $result = $request -> fetchAll(PDO::FETCH_COLUMN);
?>