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
$first_name =  $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$companyName = $_REQUEST['companyName'];
$availableFunding = $_REQUEST['availableFunding'];
$interest1 = $_REQUEST['interest1'];
$interest2 = $_REQUEST['interest2'];
$interest3 = $_REQUEST['interest3'];
$avgInvestment = $_REQUEST['avgInvestment'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$twitter = $_REQUEST['twitter'];
$instagram = $_REQUEST['instagram'];
$facebook = $_REQUEST['facebook'];
$linkedIn = $_REQUEST['linkedIn'];



$sql = "INSERT INTO investor (userName, password, firstName, lastName, companyName, availableFunding,
interest1, interest2, interest3, avgInvestment, phone, email, twitter, instagram,
facebook, linkedIn)
VALUES ('$userName','$password','$first_name', '$last_name', '$companyName','$availableFunding',
'$interest1', '$interest2', '$interest3', '$avgInvestment', '$phone', '$email',
'$twitter', '$instagram','$facebook', '$linkedIn')";
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
  localStorage.firstName = "<?php echo $first_name ?>";
  localStorage.lastName = "<?php echo $last_name ?>";
  localStorage.companyName = "<?php echo $companyName ?>";
  localStorage.availableFunding = "<?php echo $availableFunding ?>";
  localStorage.interest1 = "<?php echo $interest1 ?>";
  localStorage.interest2 = "<?php echo $interest2 ?>";
  localStorage.interest3 = "<?php echo $interest3 ?>";
  localStorage.avgInvestment = "<?php echo $avgInvestment ?>";
  localStorage.phone = "<?php echo $phone ?>";
  localStorage.email = "<?php echo $email ?>";
  localStorage.twitter = "<?php echo $twitter ?>";
  localStorage.instagram = "<?php echo $instagram ?>";
  localStorage.facebook = "<?php echo $facebook ?>";
  localStorage.linkedIn = "<?php echo $linkedIn ?>";
  location.href="../profile/investor.php";
</script>
