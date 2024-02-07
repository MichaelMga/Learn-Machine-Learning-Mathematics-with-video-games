<?php 

  echo "whatsup";

  define('DB_SERVER', 'localhost:3306');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('DB_DATABASE', 'mlmaths');
  $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


  // Check for connection errors
  if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
  }

  if (isset($_GET['mailValue'])) {
    // Retrieve the value of the mailValue parameter
    $mailValue = $_GET['mailValue'];

    // SQL query to insert a user
   $sql = "INSERT INTO users (mail) VALUES ('$mailValue')";

   // Execute the query
   if (mysqli_query($db, $sql)) {
    echo "User inserted successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
  }


  }

  

  // Close the database connection
  mysqli_close($db);


 ?>