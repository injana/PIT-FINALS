<?php

// 
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $weight = $_POST['weight'];
    $color = $_POST['color'];
    $personality = $_POST['personality']
    ; 

    $sql = "INSERT INTO pet_info (name, breed, age, gender, weight, color, personality)
            VALUES ('$name', '$breed', '$age', '$gender', '$weight', '$color', '$personality')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Adoption</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="breed">Breed:</label>
        <input type="text" id="breed" name="breed"><br><br>
        <label for="age">Age:</label>
        <input type="text" id="age" name="age"><br><br>
        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender"><br><br>
        <label for="weight">Weight:</label>
        <input type="text" id="weight" name="weight"><br><br>
        <label for="color">Color:</label>
        <input type="text" id="color" name="color"><br><br>
        <label for="personality">Personality:</label>
        <textarea id="personality" name="personality"></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
