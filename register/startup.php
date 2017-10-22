<?php
$servername = "localhost";
$username = "root";
$password = "localest";
$dbname = "localest";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$first_name = $_REQUEST['first_name'];

$sql = "INSERT INTO startup (userName, password, orgName, street, city, state,
    zip, phone, email, website, need1, need2, need3, need4, need5) VALUES
    (userName, password, orgName, street, city, state, zip, phone, email,
    website, need1, need2, need3, need4, need5)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
