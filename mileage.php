<?php 
require_once "connection.php";

$mileage = $_GET["mileage"];
$cursor = $collectionCars->find(['mileage' => ['$lt' => intval($mileage)]],['projection' => ['brand'=> 1,'mileage' => 1, '_id' => 0]]);
$result = array();
foreach ($cursor as $document) {
    array_push($result, $document);
    echo "Авто " . $document["brand"];
    echo " - пробіг " . $document["mileage"] . "км<p>";
}

echo "<script> localStorage.setItem('localStorage', '" . json_encode($result) . "');</script>";

?>