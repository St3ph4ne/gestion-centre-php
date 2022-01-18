<?php 
    // ajout de nouveau user dans la table user
    $table = $_GET['table'];

    include "./pdo/dbconn.php";
    if (isset($_POST["nom"]) && isset($_POST["adresse"]) && isset($_POST["age"])) {

        
        $nom = $_POST['nom'];
        $adresse = $_POST['adresse'];
        $age = $_POST['age'];


        $sql = "INSERT INTO {$table} (username, adresse, age) VALUES ('{$nom}', '{$adresse}', $age)";

        $request = $CONN -> prepare($sql);
        $request -> execute();

    
    // ajout de nouveau note dans la table note
     } else if (isset($_POST["id_seance"]) && isset($_POST["id_user"]) && isset($_POST["note"])) {
        
        $id_seance = $_POST['id_seance'];
        $id_user = $_POST['id_user'];
        $note = $_POST['note'];


        $sql = "INSERT INTO {$table} (id_seance, id_user, note) VALUES ({$id_seance}, {$id_user}, {$note})";

        $request = $CONN -> prepare($sql);
        $request -> execute();

    // ajout de nouveau activite dans la table activite
     } else if (isset($_POST["nom"]) && isset($_POST["cout"]) && isset($_POST["prix"])) {
        
        $nom = $_POST['nom'];
        $cout = $_POST['cout'];
        $prix = $_POST['prix'];


        $sql = "INSERT INTO {$table} (name, cout, prix) VALUES ('{$nom}', {$cout}, {$prix})";

        $request = $CONN -> prepare($sql);
        $request -> execute();

        var_dump($sql);
     }

?>

