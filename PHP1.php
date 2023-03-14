<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class=text-center>


<?php //ทดลองเขียน php
echo "<h1>HELLO\tWORLD</h1><br>";
echo "Burin Intakum";
echo "<hr>";
?> 



<?php
$num1 = -4.5;
$num2 = 5;
$num3 = -5;
$abs1 = abs($num1);
$abs2 = abs($num2);
$abs3 = abs($num3);
echo "ค่าสัมบูรณ์ของ $num1 คือ $abs1 <br>";
echo "ค่าสัมบูรณ์ของ $num2 คือ $abs1 <br>";
echo "ค่าสัมบูรณ์ของ $num3 คือ $abs1 <br>";
echo "<hr>";
?>

<br>
<br>

<?php
$price1 = 5000;
$price2 = 4600;
$price3 = 7800;

echo "ค่าที่มากที่สุด คือ " .max($price1,$price2,$price3). "<br>";
echo "ค่าที่น้อยที่สุด คือ " .min($price1,$price2,$price3);
?>

<br>
<br>
<?php
    echo "9 ยกกำลัง 3 มีค่าเท่ากับ " .pow(9,3). "<br>";
    echo "-3 ยกกำลัง 3 มีค่าเท่ากับ " .pow(-3,3). "<br>"
?>
<br>
<br>
<?php 
    echo "สุ่มเลขครั้งแรก เท่ากับ " .rand(). "<br>";
    echo "สุ่มเลขระหว่าง 1-10 เท่ากับ " .rand(1,10), "<br>";
?>
<br>
<br>
<?php
echo round(3.4) ."<br>";
echo round(1.987,2) ."<br>";
echo round(5.045,2) ."<br>";
?>

<br>
<br>

<?php
echo "ค่ารากที่ 2 ของ 9 คือ ". sqrt(9) ."<br>";
echo "ค่ารากที่ 2 ของ 144 คือ " .sqrt(144) ."<br>";
?>


<?php
$date = new Datetime();
echo $date->format(DateTime::RFC1123) ."\n";

echo "Time in Bangkok"."<br>";
$date2 = new DateTime();
$date2->setTimezone(new DateTimeZone('Asia/Bangkok'));
echo $date2->format(DateTime::RFC1123) . "<br>";
?>

<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;

echo "$txt <br>" ;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";
?>

<?php
$txt = "Cristiano";
echo "My name is " . $txt;
?>

<?php
$x=100;
$y=200;
echo "Result " .($x + $y)."<br>";
?>

<?php

function mytest() {
$A=100;
echo $A;
}

mytest();
?>
<br>


<br>

<?php
$name="CRISTIANO";
$isvalid=true;
$price=100;
$score=90.58;

echo $name."<br>";
echo $isvalid."<br>";

echo gettype($name)."<br>";
echo gettype($isvalid)."<br>";
echo gettype($price). "<br>";
echo gettype($score)."<br>";

echo "ก่อนเปลี่ยน" .gettype($score);
settype($score,"integer");
echo "หลังเปลี่ยน" .gettype($score);
?>



</div>
</body>
</html>
