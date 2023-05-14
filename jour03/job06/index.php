<!DOCTYPE html>
<html>
<body>

<?php
$str = "Les choses que l'on possède finissent par nous posséder";
$longueur = strlen($str);

$mchaine = $str[$longueur - 1]; 

for ($i = 0; $i < $longueur - 1; $i++) {
    $mchaine .= $str[$i + 1];
}

echo $mchaine;
?>

</body>
</html>