<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sonia";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
{
	echo " connection failed";
}
else{
	echo "  ";
}
$mat = $_POST['mat'];
$sql = "SELECT matriculation, username, phone_number, address FROM in_form WHERE matriculation = '$mat' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<BR> matricule: " . $row["matriculation"]. " <br> username: " . $row["username"]. " <br> Email: " . $row["phone_number"]. "<br> Adress: " . $row["address"]. "<br>";
  }
} else {
  echo "sorry that matricule isn't singed up yet";
}
?>
<form action="new_info.php">
	<br><button><b>click here if your information needs to be corrected</b></button>
</form>
</html>