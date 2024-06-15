<?php
header('Content-Type: application/json');
// insert_pet_info.php
// Include the database connection file
include 'dbcon.php';

$data = json_decode(file_get_contents('php://input'), true);

$pet_name = $data['pet_name']; 
$breed = $data['breed'];
$gender = $data['gender'];
$weight = $data['weight'];
$age = $data['age'];
$color = $data['color'];
$personality = $data['personality'];
$pet_picture = $data['pet_picture'];

$sql = "INSERT INTO pet_info (pname, breed, gender, weight, age, color, personality, pet_pic) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
  echo json_encode(['success' => false, 'message' => 'Prepare failed: ' . $conn->error]);
  exit();
}

$stmt->bind_param("ssssssss", $pet_name, $breed, $gender, $weight, $age, $color, $personality, $pet_picture);

if ($stmt->execute()) {
  $pet_id = $stmt->insert_id; // Get the ID of the inserted pet
  echo json_encode(['success' => true, 'pet_id' => $pet_id]);
} else {
  echo json_encode(['success' => false, 'message' => 'Execute failed: ' . $stmt->error]);
}

$stmt->close();
$conn->close();
?>
