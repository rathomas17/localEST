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

$sql = "INSERT INTO startup (Org_ID, Name, Street, City, State, Zip, Phone,
    Email, Website, Need1, Need2, Need3, Need4, Need5) VALUES (Org_ID, Name,
    Street, City, State, Zip, Phone, Email, Website, Need1, Need2, Need3, Need4,
    Need5)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
