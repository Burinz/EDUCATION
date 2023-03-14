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
    div{
      font-family: 'kanit';
    }

    </style>
  <body>
      <div class="text-center">
        <?php
      $width =30;
      $height=300;
      $area = $width*$height;
      if($width>0 && $height>0)
      {
                echo $area."<br>";
      }
     else
     {
        echo "กรุณาใส่ค่ามากกว่า 0 <br>";
     }
      
    // $score=70;
    //  if($score>=80){
    //   echo "คุณได้เกรด A <br>";
    //  }
    //  elseif($score>=70)
    //  {
    //   echo "คุณได้เกรด B <br>";
    //  }
    //  elseif($score>=60)
    //  {
    //   echo "คุณได้เกรด C <br>";
    //  }
    //  elseif($score>=50)
    //  {
    //   echo "คุณได้เกรด d <br>";
    //  }

    $a=11;
    $b=10;

    $a>$b ? print($a." มากกว่า ".$b."<br>"):print($a." น้อยกว่า ".$b."<br>"); 
        
    
    echo "";

    $month=1;
    switch($month){
      case 1:echo "เดือนมกราคม"."<br>";
            break;
      case 2:echo "เดือนกุมภาพันธ์"."<br>";
            break;
      case 3:echo "เดือนมีนาคม"."<br>";
            break;
      default:echo "ไม่พบเดือน"."<br>";
    }
  

    $count=2;
    $limit=10;
    
    while($count<=$limit){
      echo "รอบที่ ".$count."<br>";
      $count++;
    }
    echo "จบโปรแกรม";
    ?>
      
      </div>

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>