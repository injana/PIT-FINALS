<?php
header('Content-Type: application/json');
// Include the database connection file 
include 'dbcon.php';

$data = json_decode(file_get_contents('php://input'), true);

$pname = $data['pname'];
$pet_id = $data['pet_id'];
$status = $data['status'];

$sql = "INSERT INTO adopt (pname, pet_id, status) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
  echo json_encode(['success' => false, 'message' => 'Prepare failed: ' . $conn->error]);
  exit();
}

$stmt->bind_param("sis", $pname, $pet_id, $status);

if ($stmt->execute()) {
  echo json_encode(['success' => true]);
} else {
  echo json_encode(['success' => false, 'message' => 'Execute failed: ' . $stmt->error]);
}

$stmt->close();
$conn->close();
?>
