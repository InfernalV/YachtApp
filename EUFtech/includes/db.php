<?php

try {
    $conn = new PDO("mysql:dbname=yacht;host=127.0.0.1", "root", "");
} catch(PDOException $e) {
    echo $e->getMessage();
}