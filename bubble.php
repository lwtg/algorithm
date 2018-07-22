<?php
/**
 * 冒泡排序
 */
$arr = [19, 32, 45, 67, 10, 5, 6, 88];
$length = count($arr);
$tmp = 0;
// 1.0
/*for ($i = 0; $i < $length-1; ++$i) {
    for ($j = $i+1; $j < $length-1; ++$j) {
        if ($arr[$i] > $arr[$j]) {
            $tmp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $tmp;
        }
    }
}*/

//2.0
for ($i = 0; $i < $length-1; ++$i) {
    for ($j = 0; $j < $length-1-$i; ++$j) {
        if ($arr[$j] > $arr[$j+1]) {
            $tmp = $arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j+1] = $tmp;
        }
    }
}
var_dump($arr);
