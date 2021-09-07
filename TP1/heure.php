<?php
if (array_key_exists('oui', $_POST)) {
    echo "<p> {$_POST['oui']} </p>";
} else {?>
<form action="heure.php" method="POST">
    <input type="text" id="oui" name="oui" required>
    <input type="submit">
</form>
<?php
}