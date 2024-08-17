
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
    header("Content-Type: application/json"); 
    $method = $_SERVER["REQUEST_MEHTHOD"];

    if ($method == "GET"){
        $response = [
                "message" => "mission success",
                "success" => true
            ];
        }else{
            http_response_code(405); // Method Not Allowed
            $response = [
                "message" => "Method not allowed",
                "success" => false
            ];
        }
    echo json_encode($response);
    break;
    
?>
