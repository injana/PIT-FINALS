<?php
header('Content-Type: application/json');
// Include the database connection file
include 'dbcon.php';

$sql = "SELECT a.pet_id, a.status, p.pame, p.breed, p.gender, p.weight, p.age, p.color, p.personality, p.pet_picture 
        FROM adopt a
        JOIN pet_info p ON a.pet_id = p.pet_id
        WHERE a.status = 'pending'";

$result = $conn->query($sql);
 
if ($result && $result->num_rows > 0) {
  $pets = [];
  while($row = $result->fetch_assoc()) {
    $pets[] = [
      'pet_id' => $row['pet_id'],
      'status' => $row['status'],
      'pet_name' => $row['pet_name'],
      'breed' => $row['breed'],
      'gender' => $row['gender'],
      'weight' => $row['weight'],
      'age' => $row['age'],
      'color' => $row['color'],
      'personality' => $row['personality'],
      'pet_picture' => base64_encode($row['pet_picture'])
    ];
  }
  echo json_encode(['success' => true, 'pets' => $pets]);
} else {
  echo json_encode(['success' => false, 'message' => 'No pending pets found']);
}

$conn->close();
?>
