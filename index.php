<?php
$messages = [
    "Hello, Kubernetes!",
    "Keep pushing forward!",
    "Stay curious, stay creative!",
    "Success is the sum of small efforts.",
    "Believe in yourself!"
];
header('Content-Type: application/json');
echo json_encode(["message" => $messages[array_rand($messages)]]);
