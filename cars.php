<?php 
require_once "connection.php";

$cursor = $collectionCars->find([],['projection' => ['brand'=> 1, '_id' => 0]]);
$result = array();
foreach ($cursor as $document) {
    array_push($result, $document);
    echo "Авто " . $document["brand"] . "<p>";
}

echo "<script> localStorage.setItem('localStorage', '" . json_encode($result) . "');</script>";

?>