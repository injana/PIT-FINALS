<?php
include '../dbcon.php';

header('Content-Type: application/json');

// Assuming the user ID is stored in the session
session_start();
$user_id = $_SESSION['user_id'];

$sql = "SELECT message, created_at FROM notifications WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $user_id);
$stmt->execute();
$result = $stmt->get_result();

$notifications = array();
while ($row = $result->fetch_assoc()) {
    $notifications[] = $row;
}

echo json_encode(array('success' => true, 'notifications' => $notifications));

$conn->close();
?>
