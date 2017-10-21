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

$first_name =  $_REQUEST['first_name'];

//$first_name = "rob";

$sql = "INSERT INTO investor (userId, firstName, lastName, companyName, availableFunding,
interest1, interest2, interest3, avgInvestment, phone, email, twitter, instagram,
facebook, linkedIn)
VALUES (userID, '$first_name', lastName, companyName,availableFunding,
interest1, interest2, interest3, avgInvestment, phone, email, twitter, instagram,
facebook, linkedIn)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    echo $_REQUEST['first_name'];
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
