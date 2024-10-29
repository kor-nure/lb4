<?php
$user = $_ENV["MYSQL_USER"];
$password = $_ENV["MYSQL_PASSWORD"];
$host = $_ENV["MYSQL_HOST"];
$port = $_ENV["MYSQL_PORT"];
$dbname = $_ENV["MYSQL_NAME"];
$options = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES => false,
];
$dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$dbh = new PDO($dsn, $user, $password, $options);

echo "Connected to db!";
