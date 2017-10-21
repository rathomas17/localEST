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

$user_name = $_REQUEST['user_name'];
$password = $_REQUEST['password'];
$first_name =  $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$organization_name = $_REQUEST['organization_name'];
$interest_1 = $_REQUEST['interest_1'];
$interest_2 = $_REQUEST['interest_2'];
$interest_3 = $_REQUEST['interest_3'];
$possible_salary = $_REQUEST['possible_salary'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$twitter = $_REQUEST['twitter'];
$instagram = $_REQUEST['instagram'];
$facebook = $_REQUEST['facebook'];
$linkedIn = $_REQUEST['linkedIn'];
$skill_1 = $_REQUEST['skill_1'];
$skill_1_lvl = $_REQUEST['skill_1_lvl'];
$skill_2 = $_REQUEST['skill_2'];
$skill_2_lvl = $_REQUEST['skill_2_lvl'];
$skill_3 = $_REQUEST['skill_3'];
$skill_3_lvl = $_REQUEST['skill_3_lvl'];
$skill_4 = $_REQUEST['skill_4'];
$skill_4_lvl = $_REQUEST['skill_4_lvl'];
$skill_5 = $_REQUEST['skill_5'];
$skill_5_lvl = $_REQUEST['skill_5_lvl'];
$resume = $_REQUEST['resume'];

$sql = "INSERT INTO contractor (userName, password, firstName, lastName, organizationName, interest1,
interest2, interest3, possibleSalary, phone, email, twitter, instagram,
facebook, linkedIn, skill1, skill1Lvl, skill2, skill2Lvl, skill3, skill3Lvl, skill4, skill4Lvl,
skill5, skill5Lvl, resume)
VALUES ('$user_name', '$password', '$first_name', '$last_name', '$organization_name',
'$interest_1', '$interest_2', '$interest_3', '$possible_salary','$phone', '$email', '$twitter', '$instagram',
'$facebook', '$linkedIn', '$skill_1', '$skill_1_lvl', '$skill_2', '$skill_2_lvl', '$skill_3', '$skill_3_lvl',
'$skill_4', '$skill_4_lvl', '$skill_5', '$skill_5_lvl', '$resume')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    echo $_REQUEST['first_name'];
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
