<?php

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
ini_set("soap.wsdl_cache_enabled", "0");
// require_once "server.php";

// $server = new Product();

// $products = $server->getProducts();

// echo "<pre>"; print_r($products); exit;

try {
    $client = new SoapClient("http://localhost/web_service/soap/service.wsdl");

    $response1 = $client->hello("World");
    echo "Response from hello(): " . $response1 . "<br>";

    $response2 = $client->sum(10, 20);
    echo "Response from sum(): " . $response2;

    $products = $client->getProducts();

    echo "<pre>"; print_r($products); exit;

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
