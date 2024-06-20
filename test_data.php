<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "sensor_db";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["temperature"]) && isset($_POST["humidity"]) && isset($_POST["humidity"])) {
    $t = $_POST["temperature"];
    $h = $_POST["humidity"];
    $w = $_POST["weight"];


    $sql = "INSERT INTO dht22 (temperature, humidity, weight) VALUES ($t, $h, $w)";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);

?>
