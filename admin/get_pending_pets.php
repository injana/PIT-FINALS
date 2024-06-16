<?php
include '../dbcon.php'; // Ensure this file includes your database connection

header('Content-Type: application/json');

$response = array();

try {
    $sql = "SELECT pet_info.pet_id, pet_info.pet_name, pet_info.breed, pet_info.age, pet_info.gender, pet_info.weight, pet_info.color, pet_info.personality, pet_info.pet_pic, adopt.status, adopt.adopt_id
            FROM pet_info
            JOIN adopt ON pet_info.pet_id = adopt.pet_id
            WHERE adopt.status = 'pending'";
    $result = $conn->query($sql);

    if (!$result) {
        throw new Exception("Database Query Failed: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        $pets = array();
        while ($row = $result->fetch_assoc()) {
            $pets[] = $row;
        }
        $response['success'] = true;
        $response['pets'] = $pets;
    } else {
        $response['success'] = false;
        $response['message'] = "No pending pets found.";
    }
} catch (Exception $e) {
    $response['success'] = false;
    $response['message'] = $e->getMessage();
}

echo json_encode($response);
$conn->close();
?>
