<?php


$name="Burin";

echo $name.=" WEBSITE<br>";

echo $name;

echo "<hr>";



$a=5;
$b=10;

echo "ค่าเริ่มต้น = ".$a. "<br>";
echo "เพิ่มค่า = ".(++$a)."<br>";
echo "$a";

echo "<hr>";

echo "ค่าเริ่มต้น = ".$a. "<br>";
echo "เพิ่มค่า = ".($a++)."<br>";
echo "$a <br>";


$x=10;
$y=5;

$x+=$y;
echo $x."<br>";

$x=10;
$y=5;

$x-=$y;
echo $x."<br>";

$x=10;
$y=5;

$x*=$y;
echo $x."<br>";

$x=10;
$y=5;

$x/=$y;
echo $x."<br>";
?>