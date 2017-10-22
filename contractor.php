<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>User profile </title>



        <style>
        /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
        /* CSS design by @jofpin */
  @import url(https://fonts.googleapis.com/css?family=Raleway|Varela+Round|Coda);
  @import url(http://weloveiconfonts.com/api/?family=entypo);

  [class*="entypo-"]:before {
    font-family: 'entypo', sans-serif;
  }

  body {
    background: black;
    padding: 2.23em;
  }

  .title-pen {
    color: #333;
    font-family: "Coda", sans-serif;
    text-align: center;
  }
  .title-pen span {
    color: #2184cf;
  }

  .user-profile {
    margin: auto;
  	width: 25em;
    height: 11em;
    background: #fff;
    border-radius: .3em;
  }

  .user-profile  .username {
    margin: auto;
    margin-top: -4.40em;
    margin-left: 5.80em;
    color: #658585;
    font-size: 1.53em;
    font-family: "Coda", sans-serif;
    font-weight: bold;
  }
  .user-profile  .bio {
    margin: auto;
    display: inline-block;
    margin-left: 10.43em;
    color: #e76043;
    font-size: .87em;
    font-family: "varela round", sans-serif;
  }
  .user-profile > .description {
    margin: auto;
    margin-top: 1.35em;
    margin-right: 4.43em;
    width: 14em;
    color: #c0c5c5;
    font-size: .87em;
    font-family: "varela round", sans-serif;
  }
  .user-profile > img.avatar {
  	padding: .7em;
    margin-left: .3em;
    margin-top: .3em;
    height: 6.23em;
    width: 6.23em;
    border-radius: 18em;
  }

  .user-profile ul.data {
  	margin: 2em auto;
  	height: 3.70em;
    background: #4eb6b6;
    text-align: center;
    border-radius: 0 0 .3em .3em;
  }
  .user-profile li {
  	margin: 0 auto;
    padding: 1.30em;
    width: 33.33334%;
    display: table-cell;
    text-align: center;
  }

  .user-profile span {
  	font-family: "varela round", sans-serif;
  	color: #e3eeee;
    white-space: nowrap;
    font-size: 1.27em;
    font-weight: bold;
  }
  .user-profile span:hover {
    color: #daebea;
  }


      </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

  </head>

  <body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "localest";
    $dbname = "localest";
    $element1 = "
    <div style=\"display:inline-block\"class=\"user-profile\">
    <img class=\"avatar\" src=\"https:\/\/encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTF_erFD1SeUnxEpvFjzBCCDxLvf-wlh9ZuPMqi02qGnyyBtPWdE-3KoH3s\" alt=\"Ash\" />
      <div class=\"username\">";
      //FIRST NAME + LAST NAME
    $element2 = "</div>
    <div class=\"bio\">";
    //EMAIL
    $element3 = "</div>
      <div class=\"description\">";
      //INTERESTS
    $element4="</div>";

    $element5="<ul class=\"data\">
      <li>
        <span class=\"entypo-heart\"> 127</span>
      </li>
      <li>
        <span class=\"entypo-eye\"> 853</span>
      </li>
      <li>
        <span class=\"entypo-user\"> 311</span>
      </li>
    </ul>
    </div>

    ";
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
        echo $element1;
        echo $row["firstName"]. " " . $row["lastName"];
        echo $element2;
        echo "<a href="."\"mailto:". $row["email"]. "\"".">" ."Email: " . $row["email"]."</a>"."<br>";
        echo $element3;
        echo "Organization: ". $row["organizationName"]."<br>" .
        "Phone: " . $row["phone"]. "<br>"
        echo $element4;
        echo "Interest 1: " . $row["interest1"]."<br>" . "Interest 2: " . $row["interest2"]."<br>" . "Interest 3: "
        . $row["interest3"];
        echo $element5;
        echo "Skill 1: " . $row["skill1"]. "Level: " . $row["skill1Lvl"]. "<br>" . "Skill 2: " . $row["skill2"]. "Level: " . $row["skill2Lvl"]. "<br>" . "Skill 3: " . $row["skill3"]. "Level: "
        . $row["skill3Lvl"]. "<br>" ."Desired Salary: " . $row["possibleSalary"];
    }
  }

  mysqli_close($conn);
    ?>
  </body>
</html>
