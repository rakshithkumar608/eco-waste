<?php
$firstname = $_POST['name'];
$Email = $_POST['email'];
$Messagee = $_POST['message'];



$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO registration (firstname, Email, Messagee ) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $firstname, $Email, $Message);
    $stmt->execute();
    echo "Registration Successful";
    $stmt->close();
    $conn->close();
}
?>

