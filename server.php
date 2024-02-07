<?php

define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'mlmaths');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);


if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['mailValue'])) {
    $mailValue = $_GET['mailValue'];

    if (!filter_var($mailValue, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        mysqli_close($db);
        exit(); 
    }

    $stmt = $db->prepare("INSERT INTO users (mail) VALUES (?)");
    $stmt->bind_param("s", $mailValue);

    if ($stmt->execute()) {
        echo "User inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

mysqli_close($db);

?>
