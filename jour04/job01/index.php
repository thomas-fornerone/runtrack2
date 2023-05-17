<!DOCTYPE html>
<html>
<body>

<form method = "get">
<input type="text" name="Nom"><br>
<input type="text" name="Prenom"><br>
<input type="text" name="Email"><br>
<input type="submit" value="Envoyer">
</form>

<?php
    
if (isset($_GET["Nom"]) && isset($_GET["Prenom"]) && isset($_GET["Email"])) {
    echo "Le nombre d’arguments GET envoyé est : 3 ";
}
?>

</body>
</html>