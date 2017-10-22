<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Snippet: Login Form</title>


  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/login.css">


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
  $result = mysqli_query($conn, $sql);

  // output data of each row

  while($row = mysqli_fetch_array($result)) {
    //echo "Name: " . $row["firstName"]. " " . $row["lastName"]."<br>"."Company: " . $row["companyName"]."<br>" . "Interest 1: " . $row["interest1"]."<br>"
    //. "Interest 2: " . $row["interest2"]."<br>"
    //. "Interest 3: " . $row["interest3"]."<br>"
    //. "Average Investment: " . $row["avgInvestment"]."<br>"
    //. "Phone: " . $row["phone"]. "<br>"
   //."Email: " . $row["email"]. "<br>"."<br>";
  //echo "Name = " . $row['userName'];
  //echo "loop"
  }
  mysqli_close($conn);


  ?>





    <div class="wrapper">
    <form class="form-signin">
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="username" placeholder="user name" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    </form>
  </div>


</body>
</html>
