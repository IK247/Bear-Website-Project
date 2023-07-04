<?php

// Connect to the database
$db = new mysqli('ID372542_main.db.webhosting.be', 'ID372542_main', 'isRXZH359v!MVTG', 'ID372542_main	');

// Check for errors
if (mysqli_connect_errno()) {
    echo "Error: Could not connect to database.  Please try again later.";
    exit;
}

// Insert the form data into the database
foreach ($_POST as $key => $value) {
    $query = "INSERT INTO table_name (Contact Names) VALUES ('$value')";
    $result = $db->query($query);
}

// Check for errors
if ($result) {
    echo "Success! Your data was stored in the database.";
} else {
    echo "Error: The data could not be stored in the database.";
}

?>
