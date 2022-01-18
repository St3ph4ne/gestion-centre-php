<?php
    /* Connect to a MySQL database using driver invocation */
    $con = 'mysql:dbname=tutoseu;host=db';
    $user = 'myuser';
    $password = 'monpassword';

    // initiate connection & manage error
    try {
        $CONN = new PDO($con, $user, $password);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e -> getMessage();
    }