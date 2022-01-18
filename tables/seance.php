<?php
 
    include "./pdo/dbconn.php";

    $sql_request = "SELECT * FROM `seance`;";

    $request = $dbh -> prepare($sql_request);
    $request -> execute();

    $result = $request -> fetchAll();

?>



<body class="bodyTable">
    <div class="conyainer">
        <div class="row">
            <div class="col-md-5">
            </div>

            <div class="col-md-3" id="table">
                <table class="table table-bordered border-primary table-hover border-dark">
                    <h5 class="tabName">Table Seance</h5>
                    <a href="../form/post.php?table=seance"><button class='btn btn-primary'>Add new seance</button></a>
                    <thead class="table-dark">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ACTIVITIE</th>
                        <th scope="col">DATE</th>
                        <th scope="col">HEURE</th>
                        <th scope="col">SEANCE COL</th>
                        <th scope="col" colspan="2">ACTION</th>
                        </tr>
                    </thead>
                    
                    <?php foreach ($result as $result) :?>
                        <?=
                        " <tbody>
                                <tr>
                                    <th scope='row'>{$result['id']}</th>
                                    <td>{$result['activitie']}</td>
                                    <td>{$result['date']}</td>
                                    <td>{$result['heure']}</td>
                                    <td>{$result['seancecol']}</td>
                                    <td> <a href='./form/update.php?table=seance&id={$result['id']}'><button class='btn btn-primary'>Update</button></a> </td>
                                    <td> <a href='./remove.php?table=seance&id={$result['id']}'><button class='btn btn-danger'>Delete</button></a> </td>
                                </tr>
                            </tbody>"
                        ?>
                    <?php endforeach ?>
                </table>
            </div>

            <div class="col-md-4">
            </div>
        </div>
    </div>
</body>