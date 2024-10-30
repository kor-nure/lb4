<?php
$file = "views.txt";

if (!file_exists($file)) {
  $handle = fopen($file, "w");
  fwrite($handle, "0");
  fclose($handle);
}

$handle = fopen($file, "r");
$views = (int)fread($handle, filesize($file) + 1);
fclose($handle);

$views++;

$handle = fopen($file, "w");
fwrite($handle, (string)$views);
fclose($handle);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Лабораторна робота 4</title>
</head>

<body>
  <h1>Index Page</h1>
  <p>Views: <strong><?= $views ?></strong></p>
</body>

</html>