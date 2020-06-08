<?php
header("Access-Control-Allow-Origin: *");
$json = array(
    array(
        "title" => "Jan",
    ),
    array(
        "title" => "Kowalski",
    ),
    array(
        "subtitle" => "35"
    ),
);

echo json_encode($json);
?>