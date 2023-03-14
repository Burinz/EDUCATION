<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  
<style>
  body {
        font-family: 'sriracha';
        text-align:center;       
        
    }

    h1{
        color:red;
    }
  
    h3{
            margin: auto;
            width: 500px;
            height: 100%;
           
            
            border-radius: 10px;
             border : solid green;
             background-color:rgb(207, 233, 156);
  }    
 </style>
  <body class="mt-3">
  <h1>PHP CODE เลขติดลบใช้งานไม่ได้ <br></h1>
<h3 class="p-4">
    
  <?php

$balance = 1000;
$transfer=1000;



echo "เงินในบัญชี = ".$balance."<br>";
echo "กดเงิน ".$transfer."<br>";
if($transfer<=$balance)
{
    echo "สามารถกดเงินได้ <br>";
   $balance-=$transfer;
   echo "ยอดคงเหลือ = ".$balance."<br>";

}
else
{
    echo "ขออภัยยอดเงินของคุณไม่พอ <br>";
}
echo "คืนบัตร <br>";
?>
</h3>
<hr>

<h3 class="p-4">
<?php






$balance2 = 1000;
$withdraw=500;

$a=$withdraw<=$balance2;
$b=$withdraw>0;
// echo "<hr>";
// echo "<br>";

echo "เงินในบัญชี = ".$balance2."<br>";
echo "กดเงิน ".$withdraw."<br>";
if($a&&$b)
{
    echo "สามารถกดเงินได้ <br>";
   $balance2-=$withdraw;
   echo "ยอดคงเหลือ = ".$balance2."<br>";

}
else
{
    echo "ขออภัยยอดเงินของคุณไม่พอ <br>";
}
echo "คืนบัตร <br>";

?>
</h3>



   





      
    









<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
