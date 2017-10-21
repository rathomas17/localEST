<?php
$servername = "104.131.182.97";
$username = "root";
$password = "localest";
$dbname = "localest";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO investor (userID, firstName, lastName, companyName, availableFunding,
interest1, interest2, interest3, avgInvestment, phone, email, twitter, instagram,
facebook, linkedIn)
VALUES (userId, firstN, lastN, companyN, availFund, interest1, interest2, interest3,
  avgInvest, phone, email, twitter, insta, fb, linkedIn)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
