<!DOCTYPE html>
<html>
<body>

<?php
$favGenre = "classical"; 

switch ($favGenre) {
  case "rock":
    echo "Genre musik favorit Anda adalah Rock!";
    break;
  case "pop":
    echo "Genre musik favorit Anda adalah Pop!";
    break;
  case "jazz":
    echo "Genre musik favorit Anda adalah Jazz!";
    break;
  case "classical":
    echo "Genre musik favorit Anda adalah Klasik!";
    break;
  default:
    echo "Genre musik favorit Anda tidak terdaftar!";
}
?>
 
</body>
</html>
