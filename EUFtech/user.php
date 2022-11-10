<?php

require 'includes/db.php';
require 'includes/header.php';

{
    if($_SERVER['REQUEST_METHOD'] == "GET") {

    $user = $conn->prepare("SELECT * FROM user WHERE id = ? LIMIT 1");
    $user->execute([$jsonBody->id]);

    $user = $user->fetch(PDO::FETCH_ASSOC);
    if($user) {
        echo json_encode([$user]);
    }
   else{ 
       echo json_encode(['user_does_not_exist']);
    }

    }
}