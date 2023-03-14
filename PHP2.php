<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Document</title>
</head>
<style>
  hr{

  }
  </style>
<body>
<h4 class="text-center">
 <?php
 
    $price=100.05;
    $delivery=50.65;

    $total=$price+$delivery;
   
    echo "ก่อนแปลง " .gettype($total)."<br>";
    echo $total."<br>";
    
    echo "<hr>";
    $total=(integer)$total;
    echo "หลังแปลง " .gettype($total)."<br>";
    echo $total."<br>";
    echo "<hr>";

    $sum="400.89";
    echo "ก่อนแปลง = ".gettype($sum). "<br>";
    echo $sum."<br>";
    $sum=(double)$sum;

    echo "หลังแปลง = ".gettype($sum). "<br>";
    echo $sum."<br>";
    echo "<hr>";

  $a=(integer)10.9;
  $b=(integer)20.5;

  $c=$a+$b."<br>";

  echo $c;


 $score=100;

 $score=$score+200.;
 echo $score."<br>";


define("score",100);

echo score."<br>";



define("PI",3.14);

$radius=6;
$area=PI * 6*6;

echo "พื้นที่วงกลม = " .$area. "ตารางเมตร";
echo "<hr>";

$total1=null;
$total2="";
$total3=0;
$total4="kongruksiam";

// unset($total4);
echo "ตัวแปร total1 =" .isset($total1)."<br>";
echo "ตัวแปร total2 =" .isset($total2)."<br>";
echo "ตัวแปร total3 =" .isset($total3)."<br>";
echo "ตัวแปร total4 =" .isset($total4)."<br>";

echo "<br>";

echo "ตัวแปร total1 =" .empty($total1)."<br>";
echo "ตัวแปร total2 =" .empty($total2)."<br>";
echo "ตัวแปร total3 =" .empty($total3)."<br>";
echo "ตัวแปร total4 =" .empty($total4)."<br>";

echo "<br>";
echo var_dump($total1)."<br>";
echo var_dump($total2)."<br>";
echo var_dump($total3)."<br>";
echo var_dump($total4)."<br>";


$d=10;
$e=2;

echo $d."+".$e." = ".($d+$e)."<br>";
echo $d."-".$e." = ".($d-$e)."<br>";
echo $d."x".$e." = ".($d*$e)."<br>";
echo $d."/".$e." = ".($d/$e)."<br>";
echo $d."%".$e." = ".($d%$e)."<br>"; //เศษจากการหาร

 ?>



</h1>







</body>
</html>