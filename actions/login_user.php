<?php
include "../settings/connection.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $query = "SELECT * FROM People WHERE email = ?";
    
    $stmt = mysqli_prepare($conn, $query);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        
        $result = mysqli_stmt_get_result($stmt);
        
        if ($result) {
            $user = mysqli_fetch_assoc($result);
            
            if ($user && password_verify($password, $user['passwd'])) {
                // Successful login
                session_start();
                $_SESSION['user_id'] = $user['pid'];
                header("Location: ../view/UserDash.php");
                exit();
            } else {
                // Invalid credentials
                header("Location: ../Homepage.php#loginsec?login=failed");
                exit();
            }
        } else {
            // Database error
            header("Location: ../Homepage.php#loginsec?error=database_error");
            exit();
        }
        
        mysqli_stmt_close($stmt);
    } else {
        // Statement preparation error
        header("Location: ../Homepage.php#loginsec?error=statement_error");
        exit();
    }
}
?>
