<?php
/**
 * Created by PhpStorm.
 * User: lidawei
 * Date: 2019/3/28
 * Time: 14:14
 */

$fruit1 = array("Apple","Banana","Orange");
$fruit2 = array("Pear","Apple","Grape");
$fruit3 = array("Watermelon","Orange","Apple");
$intersection = array_intersect($fruit1, $fruit2, $fruit3);
print_r($intersection);

echo "<br>";
echo "<br>";

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);

echo "<br>";
echo "<br>";

$a1 = [1, 2, 3];
$a2 = [3, 4, 5, 6];
print_r(array_diff($a1, $a2));
echo "<br>";
echo "<br>";
print_r(array_diff($a2, $a1));

// 注意输出结果：取交集和差集的时候，两个参数位置不同，结果会不同