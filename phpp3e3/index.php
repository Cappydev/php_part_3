
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>p1e3 php</title>
</head>
<body>
<div>
<?php
  $nbOne = 100;
  $nbRamdom = rand(1,100);
  while($nbOne >= 10) {
    $final = $nbOne * $nbRamdom;
    echo $final.' ';
    $nbOne--;
  }
?>
</div>
</body>
</html>