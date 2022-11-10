<?php

require 'includes/db.php';
require 'includes/header.php';


    if($_SERVER['REQUEST_METHOD'] == "GET") {

    $kilometers = $conn->prepare("SELECT * FROM kilometers WHERE id = ? LIMIT 1");
    $kilometers->execute([$jsonBody->id]);

    $kilometers = $kilometers->fetch(PDO::FETCH_ASSOC);
        if($kilometers) {
            echo json_encode([$kilometers]);
        }
     else{ 
            echo json_encode(['information_does_not_exist']);
        }  

    }