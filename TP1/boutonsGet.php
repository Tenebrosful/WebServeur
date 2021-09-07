<div>
    <?php
    if (array_key_exists('nbrBtn', $_GET)){
        for($i = 0; $i < $_GET['nbrBtn']; $i++)
            echo "<button>Oui</button>";
    }
    ?>
</div>