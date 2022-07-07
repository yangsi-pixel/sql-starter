<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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
	echo " success<br> ";
}
$uname = $_POST['uname'];
$phone = $_POST['email'];
$adres = $_POST['Adress'];
$matric = $_POST['mat'];
$sql = "UPDATE in_form SET username = '$uname', phone_number = '$phone', address = '$adres' WHERE matriculation = '$matric' ";
if($conn->query($sql) === TRUE)
{
	echo " succesfully updated database";
}
else{
	echo "database update failed:" . $sql . $conn->error;
}
?>
</body>
</html>