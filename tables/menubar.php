<div class="btn-group dropstart" id="menuBar">
    <h3> <a href="../home.php">Home</a></h3>
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
        Sélectionnez une table
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2" id="menuBarItem">
        <?php foreach ($result as $table) :?>
            <?= "<li><button class='dropdown-item' type='button' class='tabName'><a href='./?table={$table}'>{$table}</a></button></li>" ?>
        <?php endforeach?>
    </ul>
</div>