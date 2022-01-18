<?php include "../pdo/dbconn.php"; ?>

<?php

     if (isset($_GET["table"]) && isset($_GET["id"])) {

        $sql_request = "SELECT * FROM {$_GET['table']} WHERE id = {$_GET['id']};";
    
        $request = $dbh -> prepare($sql_request);
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
        
        <form method="POST" action="../ajout.php">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Activité</label>
                <input type="text" name="activite" class="form-control" id="formGroupExampleInput" placeholder="Activite" value=<?="{$result['name']}"?>>
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Date</label>
                <input type="text" name="date" class="form-control" id="formGroupExampleInput2" placeholder="Date" value=<?="{$result['cout']}"?>>
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Heure</label>
                <input type="text" name="heure" class="form-control" id="formGroupExampleInput2" placeholder="Heure" value=<?="{$result['prix']}"?>>
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Seance Col</label>
                <input type="text" name="seance" class="form-control" id="formGroupExampleInput2" placeholder="Seance Col" value=<?="{$result['prix']}"?>>
            </div>
                            
            <button type="submit" class="btn btn-primary">Sauvegarder</button>
            <br /> <br />
        </form>
                


        <script src="./assets/js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <body>
</html>