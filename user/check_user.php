<?php
header('Content-Type: application/json');

// Include the database connection file
include 'dbcon.php';

$data = json_decode(file_get_contents('php://input'), true);

$username = $data['username'];
$password = $data['password'];

$response = ['success' => false, 'message' => 'Invalid username or password '];

if ($stmt = $conn->prepare("SELECT password FROM admin WHERE username = ?")) {
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();
        if (password_verify($password, $hashed_password)) {
            $response = ['success' => true, 'redirect' => 'admin/index.html'];
        } else {
            $response = ['success' => false, 'message' => 'Invalid password'];
        }
    } else {
        if ($stmt = $conn->prepare("SELECT password FROM user WHERE username = ?")) {
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->store_result();
            if ($stmt->num_rows > 0) {
                $stmt->bind_result($hashed_password);
                $stmt->fetch();
                if (password_verify($password, $hashed_password)) {
                    $response = ['success' => true, 'redirect' => 'user.html'];
                } else {
                    $response = ['success' => false, 'message' => 'Invalid password'];
                }
            }
        }
    }
}

$stmt->close();
$conn->close();

echo json_encode($response);
?>
