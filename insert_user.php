<?php
header('Content-Type: application/json');

// Include the database connection file
include 'dbcon.php';

$data = json_decode(file_get_contents('php://input'), true);

$username = $data['username'];
$password = password_hash($data['password'], PASSWORD_DEFAULT); // Hashing the password
$name = $data['name'];  
$email = $data['email'];  
$address = $data['address']; 
$phone_number = $data['phone_number'];

$sql = "INSERT INTO user (username, password, name, email, address, phone_number) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
  echo json_encode(['success' => false, 'message' => 'Prepare failed: ' . $conn->error]);
  exit();
}

$stmt->bind_param("ssssss", $username, $password, $name, $email, $address, $phone_number);

if ($stmt->execute()) {
  echo json_encode(['success' => true]);
} else {
  echo json_encode(['success' => false, 'message' => 'Execute failed: ' . $stmt->error]);
}

$stmt->close();
$conn->close();
?>
