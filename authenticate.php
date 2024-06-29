<?php 
include 'db.php';

$conn = connect(); 
session_start();

$username = $_POST['uname'] ?? '';
$password = $_POST['psw'] ?? '';

    $sql = "SELECT id FROM access WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    
    // Bind parameters
    $stmt->bind_param("ss", $username, $password);
    
    // Execute statement
    $stmt->execute();
    
    $stmt->bind_result($id);

    // Check if a result is returned
    if ($stmt->fetch()) {
    $_SESSION['user_id'] = $id;
    header('Location: dashboard.php');
    exit();
    } else {
        echo '<script>alert("Invalid username or password."); window.location.href="index.php";</script>';
    }

    

?>
