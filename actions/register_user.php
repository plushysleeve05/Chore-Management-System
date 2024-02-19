<?php
include "../settings/connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $dob = $_POST['dob'];
    $phoneNumber = $_POST['phoneNumber'];
    $gender = $_POST['gender'];
    $familyRole = $_POST['familyRole'];
    $acceptTerms = isset($_POST['acceptTerms']) ? 1 : 0; // Check if the checkbox is checked

    // Check if the password and confirm password match
    if ($password !== $confirmPassword) {
        header("Location: register.php?error=password_mismatch");
        exit();
    }

    // Check if the email is already registered
    $checkStmt = $conn->prepare("SELECT email FROM People WHERE email = ?");
    $checkStmt->bind_param("s", $email);
    $checkStmt->execute();
    $checkStmt->store_result();

    if ($checkStmt->num_rows > 0) {
        // Email is already registered
        $checkStmt->close();
        header("Location: register.php?error=email_exists");
        exit();
    }

    $checkStmt->close();

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO People (rid, fid, fname, lname, gender, dob, tel, email, passwd) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters
    $stmt->bind_param("iisssssss", $rid, $familyRole, $firstName, $lastName, $gender, $dob, $phoneNumber, $email, $hashedPassword);

    // Set default value for rid
    $rid = 3;

    if ($stmt->execute()) {
        // Redirect to login page with success message
        header("Location: ../Homepage.php#loginsec.php?registration=success");
        exit();
    } else {
        // Handle database error
        header("Location: ../view/register.php?error=database_error");
        exit();
    }

    $stmt->close();
}
?>
