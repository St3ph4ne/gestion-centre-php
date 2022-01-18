<?php include "../pdo/dbconn.php"; ?>

<?php

    if (isset($_GET["table"]) && isset($_GET["id"])) {

        $sql_request = "SELECT * FROM {$_GET['table']} WHERE id = {$_GET['id']}";
    
        $request = $CONN -> prepare($sql_request);
        $request -> execute();
        $result = $request -> fetch();

        // foreach ($result as $data) var_dump($data);

    }

?>




<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data base</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/css/main.css">
    </head>


    <body class="body-form-modif">
        
        <form method="POST" action="../ajout.php?table=note">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">ID seance</label>
                <input type="text" name="id_seance" class="form-control" id="formGroupExampleInput" placeholder="ID seance" value=<?="{$result['id_seance']}"?>>
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">ID user</label>
                <input type="text" name="id_user" class="form-control" id="formGroupExampleInput2" placeholder="ID user" value=<?="{$result['id_user']}"?>>
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Note</label>
                <input type="text" name="note" class="form-control" id="formGroupExampleInput2" placeholder="Note" value=<?="{$result['note']}"?>>
            </div>
                            
            <button type="submit" class="btn btn-primary">Sauvegarder</button>
            <br /> <br />
        </form>
                

        <script src="./assets/js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <body>
</html>





<?php
    if (isset($_POST["id_user"]) && isset($_POST["id_user"]) && isset($_POST["note"])) {

        $command = "UPDATE {$_GET['table']} SET {$_POST['id_seance']}, {$_POST['id_user']}, {$_POST['note']} WHERE id = {$_GET['id']};";

        $req = $dbh -> prepare($command);

        $req -> execute();

        // $result = $request -> fetch();


        // foreach ($result as $data) var_dump($data);

        echo "Query OK.";
        var_dump($_POST);
    }

?> 