<?php

    $method = $_SERVER["REQUEST_MEHTHOD"];

    if ($method == "GET"){
        $response = [
            "message" => "mission retireved",
            "success" => true
            ]
        }else{
            http_response_code(405); // Method Not Allowed
            $response = [
                "message" => "Method not allowed",
                "success" => false
            ];
        }
    echo json_encode($response);
    break;
    
