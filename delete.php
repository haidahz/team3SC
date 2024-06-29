
<?php
include "../db.php";
$conn = connect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id']) && isset($_POST['table_name'])) {
        $id = $_POST['id'];
        $table_name = $_POST['table_name'];
        
        // Prepare the SQL statement to prevent SQL injection
        $stmt = $conn->prepare("DELETE FROM $table_name WHERE id = ?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            session_start();
            $_SESSION["delete"] = "Data Deleted Successfully!";
            header("Location: /hoteladmin/list/" . $table_name . "1.php");
            exit();
        } else {
            echo "Error executing query: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Data does not exist or parameters are missing.";
    }
} else {
    echo "Invalid request method.";
}

$conn->close();


?>