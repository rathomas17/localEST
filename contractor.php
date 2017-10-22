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

  $sql = "SELECT firstName, lastName, organizationName, interest1, interest2, interest3, skill1, skill1Lvl, skill2, skill2Lvl, skill3, skill3Lvl, possibleSalary, phone, email FROM contractor";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row["firstName"]. " " . $row["lastName"]."<br>". "Organization: ". $row["organizationName"]."<br>" . "Interest 1: " . $row["interest1"]."<br>" . "Interest 2: " . $row["interest2"]."<br>" . "Interest 3: "
        . $row["interest3"]."<br>" . "Skill 1: " . $row["skill1"]. "Level: " . $row["skill1Lvl"]. "<br>" . "Skill 2: " . $row["skill2"]. "Level: " . $row["skill2Lvl"]. "<br>" . "Skill 3: " . $row["skill3"]. "Level: " . $row["skill3Lvl"]. "<br>" .
        "Desired Salary: " . $row["possibleSalary"]. "<br>"
        . "Phone: " . $row["phone"]. "<br>"
        . "Email: " . $row["email"]. "<br>"
        ;
    }
  }

  mysqli_close($conn);
    ?>
  </body>
</html>
