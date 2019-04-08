<?php
    $nbOne = 0;
    $nbTwo = rand(1,100);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>p3e2 php</title>
</head>
<body>
<div>
  <?php
    echo $nbTwo."\n";
    while($nbOne < 20) {
      $result = $nbOne * $nbTwo;
      echo $result.' ';
      $nbOne++;
    }
   ?>
</div>
</body>
</html>