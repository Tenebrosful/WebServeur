<div>
    <?php
    if (array_key_exists('nbrBtn', $_POST)){
        for($i = 0; $i < $_POST['nbrBtn']; $i++)
            echo "<button>Oui</button>";
    } else {
        ?>
        <form action="boutonsPost.php" method="POST">
            <label for="nbrBtn">Nombre de bouton</labe>
            <input type="text" id="nbrBtn" name="nbrBtn" required>
            <input type="submit">
        </form>
        <?php
    }
    ?>
</div>