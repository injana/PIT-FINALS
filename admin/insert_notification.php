<?php
include '../dbcon.php'; // Ensure this file includes your database connection

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

$user_id = $data['user_id'];
$message = $data['message'];
 
$sql = "INSERT INTO notifications (user_id, message) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("is", $user_id, $message);

$response = array();

if ($stmt->execute()) {
    $response['success'] = true;
    $response['message'] = "Notification inserted successfully.";
} else {
    $response['success'] = false;
    $response['message'] = $stmt->error;
}

echo json_encode($response);

$stmt->close();
$conn->close();
?>
