<?php
$array = [1,3,5,8,7,9,1,3,0];
function findMin($arr) {
    $min = $arr[0];
    $index = 0;
    for ($i = 1; $i < count($arr); $i++ ) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
            $index = $i;
        }
    }
    return $index;
}
echo(findMin($array));
?>
