<html>
  <head>
    <meta charset="utf-8">
    <title>investor registration</title>
    <!--<link rel="stylesheet" href="/css/investor.css">-->
  </head>
<body>
  <script>
  alert("got here");
  </script>
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
$userName =  $_REQUEST['username'];
$password =  $_REQUEST['password'];

$sql = "SELECT userName, password, firstName, lastName, companyName, interest1, interest2, interest3, avgInvestment, phone, email FROM investor";
$result = mysqli_query($conn, $sql);


mysqli_close($conn);


?>

<script>
localStorage.usernameSQL = "<?php echo $userName ?>";
localStorage.passwordSQL = "<?php echo $password ?>";

if(localStorage.usernameSQL === localStorage.usernameUSER && localStorage.passwordSQL === localStorage.passwordUSER){
  alert("THAT MATCHES!");
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
  location.href="/profile/investor.php";
}else{
  console.log("made it");
  alert("nah boi");
  location.href="investorlogin.html";
}
</script>
</body>
