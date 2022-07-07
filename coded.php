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
	echo "sucessfully connected to database <br> ";
}

$stmt = $conn->prepare("INSERT INTO in_form (matriculation, username, phone_number, address) VALUES(?, ?, ?, ?)");

$stmt->bind_param("ssss", $mat, $name, $phone, $adress);

$mat = $_POST['mat'];
$name = $_POST['name'];
$phone = $_POST['email'];
$adress = $_POST['Adress'];
$stmt->execute();

echo "new records created succesfully";
$stmt->close();
$conn->close();
"<p> do you wish to verify and correct your information?</p>";
 ?>