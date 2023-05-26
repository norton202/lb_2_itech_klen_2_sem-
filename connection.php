<?php 
require_once __DIR__."/vendor/autoload.php";
$collectionRentals = (new MongoDB\Client)->car_rental->rentals;
$collectionCars = (new MongoDB\Client)->car_rental->cars;
?>