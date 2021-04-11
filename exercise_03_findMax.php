<?php
function findMax($arr)
{
    $max = $arr[0][0];
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($arr[$i][$j] > $max) {
                $max = $arr[$i][$j];
            }
        }
    }
    return $max;
}

$arr = [
    [0, 1, 2],
    [3, 4, 5, 10, 6],
    [9, 4, 5, 1]
];
echo(findMax($arr));
?>
