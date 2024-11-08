<?php

$name = $_POST["name"];

$file = "auth.txt";

$handle = fopen($file, "w");
fwrite($handle, (string)$name);
fclose($handle);

header("Location: /");