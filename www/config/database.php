<?php

try {
  $database = new PDO("mysql:host=db;dbname=master", "admin", "admin");
  $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $database;
} catch (PDOException $err) {
  $this->error = $err->getMessage();
}
