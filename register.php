<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dummy Bank Holdings</title>
<link type="text/css" rel="stylesheet" href="css/mainstyle.css">
<link type="text/css" rel="stylesheet" href="css/header.css">
<link type="text/css" rel="stylesheet" href="css/topNav.css">
<link type="text/css" rel="stylesheet" href="css/dashMain.css">
<link type="text/css" rel="stylesheet" href="css/footer.css">
<link type="text/css" rel="stylesheet" href="css/index.css">
<script src="js/loginInfo.js" defer></script>
</head>
<body>
	<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = mysqli_connect( $servername, $username, $password, $dbname );

// Check connection
if ( !$conn ) {
  die( "Connection failed: " . mysqli_connect_error() );
}
echo "Connected successfully";
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $regFname = $_POST['regFname'];
  $regSname = $_POST['regSname'];
  $regPhone = $_POST['regPhone'];
  $regEmail = $_POST['regEmail'];

  // Insert form data into the database
  $sql = "INSERT INTO your_table_name (firstname, surname, phone, email) VALUES ('$regFname', '$regSname', '$regPhone', '$regEmail')";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
}
?>
<header class="header"><img src="img/DBHoldings Logo.png" alt="DB Holdings Logo">
  <h1>Dummy Bank Holdings &trade;</h1>
</header>
<nav class="navBoard">
  <div class="navBoardLeft"><a href="index.html">Home</a><a href="#">Transfer</a><a href="#">Messages</a><a href="#">Settings</a><a href="#">Support</a></div>
  <form class="navBoardRight">
    <label for="email">Email or Username: </label>
    <input id="userInfo" type="text" placeholder="Login Account">
    <label for="pwd"> Password: </label>
    <input id="userInPwd" type="password" placeholder="Password">
    <label>
      <input type="checkbox" name="remember">
      Remember me </label>
    <button type="submit" onclick="return submit_login()">Enter</button>
    <button type="submit">Forgot Password</button>
  </form>
</nav>
<main class="mainBody">
  <aside class="LeftBoard">
    <h1>Dummy Bank Holding</h1>
    <p>Number Building or Apartment,</p>
    <p>Name of the Streets,</p>
    <p>Name of the Town or City,</p>
    <p>Name of the County or State,</p>
    <p>Postal Code or Eircode</p>
  </aside>
  <section class="RightBoard">
    <h1>Register &amp; Get Your Card Now!</h1>
<form class="formBoard" method="POST" action="register.php">
      <label>Enter Name: </label>
      <input id="regFname" type="text" placeholder="Name" name="regFname">
      <label>Enter Surename: </label>
      <input id="regSname" type="text" placeholder="Surname" name="regSname">
      <label>Mobile Phone: </label>
      <input id="regPhone" type="tel" placeholder="Phone" name="regPhone">
      <label>Enter Email: </label>
      <input id="regEmail" type="email" placeholder="Email" name="regEmail">
      <button type="submit">Sign up now</button>
    </form>
  </section>
</main>
<footer class="footnote">
  <div class="footerNav"><a href="#">Talk to us</a><a href="#">About us</a><a href="#">Career</a></div>
  <div class="companyFnote">&copy; Dummy Holdings Ltd.</div>
</footer>

	
</body>
</html>