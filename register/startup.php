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

$userName =  $_REQUEST['userName'];
$password =  $_REQUEST['password'];
$orgName =  $_REQUEST['orgName'];
$firstName = $_REQUEST['firstName'];
$lastName = $_REQUEST['lastName'];
$street = $_REQUEST['street'];
$city = $_REQUEST['city'];
$state = $_REQUEST['state'];
$zip = $_REQUEST['zip'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$website = $_REQUEST['website'];
$need1 = $_REQUEST['need1'];
$need2 = $_REQUEST['need2'];
$need3 = $_REQUEST['need3'];
$need4 = $_REQUEST['need4'];
$need5 = $_REQUEST['need5'];

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
