<?php
include '../dbcon.php';

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);
$adopt_id = $data['adopt_id'];
$status = $data['status'];

// Update adoption request status
$sql = "UPDATE adopt SET status = ? WHERE adopt_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $status, $adopt_id);

if ($stmt->execute()) {
    // Fetch the user ID associated with the adoption request
    $sql = "SELECT user_id FROM adopt WHERE adopt_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $adopt_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $user_id = $row['user_id'];

    if ($user_id) {
        // Insert notification for the user
        $message = "Your adoption request has been " . $status .'<br> Please Contact: 09478857738 for more information';
        $sql = "INSERT INTO notifications (user_id, message) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('is', $user_id, $message);

        if ($stmt->execute()) {
            echo json_encode(array('success' => true, 'message' => 'Request status updated and user notified.'));
        } else {
            echo json_encode(array('success' => false, 'message' => 'Error inserting notification.'));
        }
    } else {
        echo json_encode(array('success' => false, 'message' => 'User ID not found.'));
    }
} else {
    echo json_encode(array('success' => false, 'message' => 'Error updating request status.'));
}

$conn->close();
?>
