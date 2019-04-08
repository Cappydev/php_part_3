<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>p3e4 php</title>
</head>
<body>
<p>
<?php
  $nbOne = 1;
  while($nbOne <= 10) {
    echo $nbOne. ' ';
    $nbOne += $nbOne/2;
  }
?>
</p>
</body>
</html>