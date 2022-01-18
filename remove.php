<?php
    if (isset($_GET["table"])) {
        $table = $_GET['table'];
        $id = $_GET['id'];
    } 
?>


<?php
    
    include "./pdo/dbconn.php";

    $sql_request = "DELETE FROM {$table} WHERE id={$id};";

    $request = $CONN -> prepare($sql_request);
    $request -> execute();

    // header ("Location : ./?table=".$table);
?>






































<!-- 
<body class="body-alert">
    <div class="container">
        <div class="row">
            
            
            <div class="col-md-4"> 
            </div>

            <div class="col-md-4" id="alert-suppr"> 
                <h5 class="alert alert-danger">Confirmez votre choix</h5>
                <p>Cette action est irreversible. <br />Voulez-vous continuer ?</p>

                <a href="#"><button class='btn btn-danger'>Confirmer</button></a> <button class='btn btn-primary'>Annuler</button>
            </div>

            <div class="col-md-4"> 
            </div>
            
        </div>
    </div>
</body> -->