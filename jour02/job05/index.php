<!DOCTYPE html>
<html>
<body>

<?php
for ($i = 2; $i <= 1000; $i++) {
    $premier = true;

for ($n = 2; $n <= sqrt($i); $n++) {
    if ($i % $n == 0) {
    $premier = false;
    break;
}
}
    
if ($premier) {
    echo $i."<br>";
}
}
?>

</body>
</html>