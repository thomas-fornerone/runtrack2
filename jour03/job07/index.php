<!DOCTYPE html>
<html>
<body>

<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$longueur = strlen($str);

$mchaine = $str[$longueur - 1];

for ($i = 0; $i < $longueur - 1; $i++) {
    $mchaine .= $str[$i];
}

echo $mchaine;
?>


</body>
</html>