<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>investor</title>
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

  $sql = "SELECT userName, firstName, lastName, companyName, interest1, interest2, interest3, avgInvestment, phone, email FROM investor";
  //$query = "SELECT * FROM investor";
  $result = mysqli_query($conn, $sql);

    // output data of each row

    while($row = mysqli_fetch_array($result)) {
      echo "Name: " . $row["firstName"]. " " . $row["lastName"]."<br>"."Company: " . $row["companyName"]."<br>" . "Interest 1: " . $row["interest1"]."<br>"
      . "Interest 2: " . $row["interest2"]."<br>"
      . "Interest 3: " . $row["interest3"]."<br>"
      . "Average Investment: " . $row["avgInvestment"]."<br>"
      . "Phone: " . $row["phone"]. "<br>"
     ."Email: " . $row["email"]. "<br>"."<br>";
    //echo "Name = " . $row['userName'];
//echo "loop"
    }
    mysqli_close($conn);


    ?>


  </body>
  <script>

  </script>
</html>
