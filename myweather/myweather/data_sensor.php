<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "dataweather";

$conn = mysqli_connect($hostname, $username, $password, $database);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Execute a query to fetch the temperature and humidity values
if (isset($_POST["Temperature"]) && isset($_POST["Humidity"])) {
    $T = $_POST["Temperature"];
    $H = $_POST["Humidity"];

    $sql = "INSERT INTO `dht11`(`Temperature`, `Humidity`) VALUES (".$T.", ".$H.")";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    $sql = "SELECT `Temperature`, `Humidity` FROM `dht11` ORDER BY `ID` DESC LIMIT 1";
    $result = $conn->query($sql);

    if (!$result) {
        die("Query execution failed: " . $conn->error);
    }

    // Prepare the response array
    $response = array();

    // Check if there is a result
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $response["Temperature"] = $row["Temperature"];
        $response["Humidity"] = $row["Humidity"];
    } else {
        $response["Temperature"] = "N/A";
        $response["Humidity"] = "N/A";
    }

    // Set the response headers
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');

    // Send the response as JSON
    echo json_encode($response);
}

// Close the database connection
$conn->close();
?>
