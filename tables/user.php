<?php
 
    include "./pdo/dbconn.php";

    $sql_request = "SELECT * FROM User;";

    $request = $CONN -> prepare($sql_request);
    $request -> execute();

    $result = $request -> fetchAll();

?>



<body class="bodyTable">
    <div>
        <div class="row">
            <div class="col-md-3">
            </div>

            <div class="col-md-5" id="table">
                <table class="table table-bordered border-primary table-hover border-dark">
                    <h5 class="tabName">Table User</h5>
                    <a href="../form/post.php?table=user"><button class='btn btn-primary'>Add new user</button></a>

                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOM</th>
                            <th scope="col">ADRESSE</th>
                            <th scope="col">AGE</th>
                            <th scope="col" colspan="2">ACTION</th>
                           
                        </tr>
                    </thead>
                    
                    <?php foreach ($result as  $result) :?>
                        <?=
                        " <tbody>
                                <tr>
                                    <th scope='row'>{$result['idUser']}</th>
                                    <td>{$result['Name']}</td>
                                    <td>{$result['Adresse']}</td>
                                    <td>{$result['Age']}</td>
                                    <td> <a href='./form/update.php?table=user&id={$result['id']}'><button class='btn btn-primary'>Edit</button></a> </td>
                                    <td> <a href='./remove.php?table=user&id={$result['id']}'><button class='btn btn-danger'>Delete</button></a>  </td>
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