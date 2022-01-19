<?php
 
    include "./pdo/dbconn.php";

    $sql_request = "SELECT * FROM `activite`;";

    $request = $CONN -> prepare($sql_request);
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
                    <h5 class="tabName">Table activities</h5>
                    <a href="../form/post.php?table=activite"><button class='btn btn-primary'>Add new activity</button></a>

                    <thead class="table-dark">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOM</th>
                        <th scope="col">COUT</th>
                        <th scope="col">PRIX</th>
                        <th scope="col" colspan="2">ACTION</th>
                        </tr>
                    </thead>
                    
                    <?php foreach ($result as $result) :?>
                        <?=
                        " <tbody>
                                <tr>
                                    <th scope='row'>{$result['id']}</th>
                                    <td>{$result['name']}</td>
                                    <td>{$result['cout']}</td>
                                    <td>{$result['prix']}</td>
                                    <td> <a href='./form/update.php?table=activite&id={$result['id']}'><button class='btn btn-primary'>Update</button></a> </td>
                                    <td> <a href='./remove.php?table=activite&id={$result['id']}'><button class='btn btn-danger'>Delete</button></a> </td>
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