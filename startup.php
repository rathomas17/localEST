<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>startup</title>
  </head>
  <body>
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

  $sql = "SELECT firstName, lastName, orgName, need1, need2
  , need3, need4, need5, phone, street, city, state, zip, email FROM startup";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row["firstName"]. " " . $row["lastName"]."<br>"
        . "Organization: ". $row["orgName"]."<br>"
        . "Need 1: " . $row["need1"]."<br>"
        . "Need 2: " . $row["need2"]."<br>"
        . "Need 3: " . $row["need3"]."<br>"
        . "Need 4: " . $row["need4"]."<br>"
        . "Need 5: " . $row["need5"]."<br>"
        . "Address: " . $row["street"]. " " . $row["city"]. ", " . $row["state"]. " " . $row["zip"]."<br>"
        . "Phone: " . $row["phone"]. "<br>"
        . "Email: " . $row["email"]. "<br>"
        ;
    }
  }
  mysqli_close($conn);
    ?>
  </body>
</html>
