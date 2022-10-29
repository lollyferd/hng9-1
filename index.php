


<?php
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin:*');
$myData =json_encode([
    "slackUsername" => "Ferdbite",
    "backend" => true,
    "age" => 34,
    "bio" => "I'm Okafor ikenna peter an average php developer hoping to improve my skills",
]);

echo  $myData;

?>