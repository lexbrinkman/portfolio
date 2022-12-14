<?php
session_start();
header('Access-Control-Allow-Origin: *');

header('Content-Type: application/json');

header("Access-Control-Allow-Methods: GET");

header("Allow: POST");

header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Access-Control-Allow-Origin");

require_once "../config.php";

function error($text) {
    print json_encode([
        "success" => false,
        "error" => $text,
    ]);
    exit();
}

if ($conn->connect_error) {
    error("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM travel_overview";

$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) < 1) {
    mysqli_close($conn);
    print json_encode([
        "success" => false,
        "error" => "No travels found!",
    ]);
    exit();
}

$data = [];
$allTravels = [];
while($data = mysqli_fetch_assoc($result))
{
    $allTravels[] = $data;
}


print json_encode([
    "success" => true,
    "allTravels" => $allTravels,
]);
exit();