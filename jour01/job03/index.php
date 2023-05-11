<!DOCTYPE html>
<html>

<header>
    <table align = "left" border "1" cellpadding = "3" cellsapcing = "2">
<tr>
    <td>Type</td>
    <td>Nom</td>
    <td>Valeur</td>
</tr>
</header>

<body>

<?php
$str = "Chaine de caractere"; //Chaîne de caractères
$int = 19; //Nombre entier
$float = 6.3; //Nombre à virgule flottante
$bool = true; //Boolean
echo "<tr>";
    echo "<td> string </td>";
    echo "<td> str </td>";
    echo "<td> $str </td>";
echo "</tr>";

echo "<tr>";
    echo "<td> int </td>";
    echo "<td> int </td>";
    echo "<td> $int </td>";
echo "</tr>";

echo "<tr>";
    echo "<td> float </td>";
    echo "<td> float </td>";
    echo "<td> $float </td>";
echo "</tr>";

echo "<tr>";
    echo "<td> bool </td>";
    echo "<td> bool </td>";
    echo "<td> $bool </td>";
echo "</tr>";
?>

</body>
</html>