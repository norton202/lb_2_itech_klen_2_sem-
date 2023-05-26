<?php 
require_once "connection.php";

$date = $_GET["date"];
$pipeline = [
    [
        '$match' => [
            'start_date' => ['$lte' => strtotime($date)]
        ]
    ],
    [
        '$group' => [
            '_id' => "Дохід на обрану дату: ",
            'total_income' => ['$sum' => '$price']
        ]
    ]
];
$cursor = $collectionRentals->aggregate($pipeline);
$result = array();
foreach ($cursor as $document) {
    array_push($result, $document);
    echo "Весь дохід з початку сдачі автомобілів на обрану дату:" . $document["total_income"] . "$\n";
}

echo "<script> localStorage.setItem('localStorage', '" . json_encode($result) . "');</script>";
?>