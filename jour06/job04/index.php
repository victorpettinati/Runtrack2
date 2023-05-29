<?php 
function calcule($nbr1, $carac, $nbr2) {
    if ($carac === '+') {
        return $nbr1 + $nbr2;
    } elseif ($carac === '-') {
        return $nbr1 - $nbr2;
    } elseif ($carac === '*') {
        return $nbr1 * $nbr2;
    } elseif ($carac === '/') {
        return $nbr1 / $nbr2;
    } elseif ($carac === '%') {
        return $nbr1 * $nbr2;
    } else {
        return "invalid";
    }
}

$result1 = calcule( 10, '+', 10);
$result2 = calcule( 10, '-', 10);
$result3 = calcule( 10,'*', 10);
$result4 = calcule( 10, '/', 10);
$result5 = calcule( 10,'%', 10);

echo $result1 . "<br>";
echo $result2 . "<br>";
echo $result3 . "<br>";
echo $result4 . "<br>";
echo $result5 . "<br>";

?>