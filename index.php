<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "<h2>PHP sentencia if else, elseif </h2>";
echo "<h3>No 1 sentencias if </h3><br>";
$t = date("H");

if ($t < "20") {
  echo "¡Que tenga un buen día!";
}

echo "<h3>No 2 sentencias if else </h3><br>";
$t = date("H");

if ($t < "20") {
  echo "¡Que tenga un buen día!";
} else {
  echo "¡Qué tengas buenas noches!";
}
echo "<h3>No 3 sentencias elseif </h3><br>";
echo "<p>La hora (del servidor) es " . $t; 
echo ", y dará el siguiente mensaje:</p>";
$t = date("H");
if ($t < "10") {
  echo "¡Que tengas buen día!";
} elseif ($t < "20") {
  echo "¡Que tenga un buen día!";
} else {
  echo "¡Qué tengas buenas noches!";
}
?>

</body>
</html>