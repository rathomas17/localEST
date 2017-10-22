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

//COMMENT
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

$sql = "INSERT INTO startup (userName, password, orgName, firstName, lastName, street, city, state,
    zip, phone, email, website, need1, need2, need3, need4, need5) VALUES
    ('$userName', '$password', '$orgName', '$firstName', '$lastName', '$street', '$city', '$state', '$zip',
    '$phone', '$email', '$website', '$need1', '$need2', '$need3', '$need4',
    '$need5')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<script type="text/javascript">
  localStorage.username = "<?php echo $userName ?>";
  localStorage.password = "<?php echo $password ?>";
  localStorage.orgName = "<?php echo $orgName ?>";
  localStorage.firstName = "<?php echo $firstName ?>";
  localStorage.lastName = "<?php echo $lastName ?>";
  localStorage.street = "<?php echo $street ?>";
  localStorage.city = "<?php echo $city ?>";
  localStorage.state = "<?php echo $state ?>";
  localStorage.zip = "<?php echo $zip ?>";
  localStorage.phone = "<?php echo $phone ?>";
  localStorage.email = "<?php echo $email ?>";
  localStorage.website = "<?php echo $website ?>";
  localStorage.need1 = "<?php echo $need1 ?>";
  localStorage.need2 = "<?php echo $need2 ?>";
  localStorage.need3 = "<?php echo $need3 ?>";
  localStorage.need4 = "<?php echo $need4 ?>";
  localStorage.need5 = "<?php echo $need5 ?>";
  location.href="../index.html";
</script>
