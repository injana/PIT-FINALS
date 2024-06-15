<?php
include '../dbcon.php'; // Ensure this file includes your database connection

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

$adopt_id = $data['adopt_id'];
$status = $data['status'];
$user_id = $data['user_id']; // Ensure you get the us er ID

// Update the adoption request status
$sql = "UPDATE adopt SET status = ? WHERE adopt_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $status, $adopt_id);

$response = array();

if ($stmt->execute()) {
    // Insert notification for the user
    $message = "Your adoption request has been " . ($status == 'approved' ? "approved " : "declined") . ".";
    $notification_sql = "INSERT INTO notifications (user_id, message) VALUES (?, ?)";
    $notification_stmt = $conn->prepare($notification_sql);
    $notification_stmt->bind_param("is", $user_id, $message);
    $notification_stmt->execute();
    
    $response['success'] = true;
    $response['message'] = "Request " . $status . " and user notified.";
} else {
    $response['success'] = false;
    $response['message'] = $stmt->error;
}

echo json_encode($response);

$stmt->close();
$conn->close();
?>
