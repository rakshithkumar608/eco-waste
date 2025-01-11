<?php
// Get form data
$firstname = $_POST['name'];
$Email = $_POST['email'];
$Service = $_POST['Service'];
$Date = $_POST['date'];
$Time = $_POST['time'];
$Address = $_POST['Address'];
$Phone = $_POST['Phone'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO registration (firstname, Email, Service, Date, Time, Address, Phone) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $firstname, $Email, $Service, $Date, $Time, $Address, $Phone);
    $stmt->execute();
    echo "Registration Successful";
    $stmt->close();
    $conn->close();
}
?>
