<?php

/* Connect to a MySQL database using driver invocation */
$con = 'mysql:dbname=tutoseu;host=db:3306';
$user = 'myuser';
$password = 'monpassword';

// initiate connection & manage error
try {
    $dbh = new PDO($con, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$sql_request = "SHOW TABLES;";

$request = $dbh->prepare($sql_request);
$request->execute();

$result = $request->fetchAll(PDO::FETCH_COLUMN);
?>

<label for="table-select">Choose a table:</label>

<select name="tables" id="table-select">
    <!-- Génération d'un menu select -->
    <?php foreach ($result as $key => $value) : ?>
        <option value="<?=$value?>"><?=$value?></option>
    <?php endforeach ?>
</select>

// retourne la table sélectionnée:
<?php
  var_dump();
  ?>